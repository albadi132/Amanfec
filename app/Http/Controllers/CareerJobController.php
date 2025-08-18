<?php

namespace App\Http\Controllers;

use App\Models\CareerJob;
use App\Models\JobApplication;
use App\Models\JobApplicationEducation;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Mews\Purifier\Facades\Purifier;

class CareerJobController extends Controller
{


public function index(Request $request)
{
    if ($request->ajax()) {

        // جهّز الاستعلام مع العلاقات لتجنّب N+1
        $jobs = CareerJob::query()
            ->with([
                'department:id,name',
                'location:id,country,city,building,floor_office,district,street,postal_code'
            ])
            ->select([
                'id',
                'title',
                'status',
                'linkedin_url',
                'created_at',
                'close_at',
                'department_id',
                'location_id',
                'category',
                'work_arrangement',
            ]);

        return DataTables::of($jobs)
            // عمود القسم
            ->addColumn('department', function ($row) {
                return optional($row->department)->name ?: '—';
            })

            // عمود الموقع (تجميعة لطيفة من الحقول)
            ->addColumn('location', function ($row) {
                if (!$row->location) return '—';
                $parts = array_filter([
                    $row->location->city,
                    $row->location->country,
                ]);
                // مثال مختصر: "Riyadh, Saudi Arabia"
                return e(implode(', ', $parts));
            })

            // حالة النشر
            ->editColumn('status', function ($row) {
                return ucfirst($row->status);
            })

            // تاريخ الإغلاق
            ->editColumn('close_at', function ($row) {
                return $row->close_at ? \Carbon\Carbon::parse($row->close_at)->format('Y-m-d') : 'N/A';
            })

            // مغلقة/مفتوحة
            ->addColumn('is_closed', function ($row) {
                $now = now();
                if ($row->close_at && $now->gt($row->close_at)) {
                    return '<span class="badge bg-danger">Closed</span>';
                }
                return '<span class="badge bg-success">Open</span>';
            })

            // الفئة (Category)
            ->addColumn('category_label', function ($row) {
                return $row->category === 'early_career_internships'
                    ? 'Early Career + Internships'
                    : 'Experienced Professionals';
            })

            // نمط العمل (Work Arrangement)
            ->addColumn('work_arrangement_label', function ($row) {
                return match ($row->work_arrangement) {
                    'remote' => 'Remote',
                    'hybrid' => 'Hybrid',
                    default  => 'On-site',
                };
            })

            // الأكشن
            ->addColumn('action', function ($row) {
                return '
                    <a href="' . route('dashboard.career-jobs.edit', $row->id) . '" class="btn btn-sm btn-primary">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" onclick="deleteJob(' . $row->id . ')">Delete</button>
                    <form id="delete-form-' . $row->id . '" action="' . route('dashboard.career-jobs.destroy', $row->id) . '" method="POST" style="display:none;">
                        ' . csrf_field() . method_field('DELETE') . '
                    </form>
                ';
            })

            // اعتمد الأعمدة التي تحتوي HTML
            ->rawColumns(['action', 'is_closed'])

            ->make(true);
    }

    return view('dashboard.career_jobs.index');
}



    public function create() {
    $departments = \App\Models\Department::orderBy('name')->get(['id','name']);
    $locations   = \App\Models\Location::orderBy('country')->orderBy('city')->get(['id','country','city']);
    return view('dashboard.career_jobs.create', compact('departments','locations'));
}

   public function store(Request $request)
{
    $validated = $request->validate([
        'title'            => 'required|string|max:255',
        'description'      => 'required|string',
        'status'           => 'required|in:active,inactive',
        'close_at'         => 'required|date|after_or_equal:today',

        'department_id'    => 'nullable|exists:departments,id',
        'location_id'      => 'nullable|exists:locations,id',
        'category'         => 'required|in:early_career_internships,experienced_professionals',
        'work_arrangement' => 'required|in:on_site,hybrid,remote',
    ]);

    // الإنشاء
    \App\Models\CareerJob::create([
        'title'            => $validated['title'],
        'description'      => $validated['description'],
        'status'           => $validated['status'],
        'close_at'         => $validated['close_at'],
        'department_id'    => $validated['department_id'] ?? null,
        'location_id'      => $validated['location_id'] ?? null,
        'category'         => $validated['category'],
        'work_arrangement' => $validated['work_arrangement'],
    ]);

    return redirect()
        ->route('dashboard.career-jobs.index')
        ->with('success', 'Job created successfully.');
}


public function edit(CareerJob $careerJob) {
    $departments = \App\Models\Department::orderBy('name')->get(['id','name']);
    $locations   = \App\Models\Location::orderBy('country')->orderBy('city')->get(['id','country','city']);
    return view('dashboard.career_jobs.edit', compact('careerJob','departments','locations'));
}


    public function update(Request $request, CareerJob $careerJob)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
            'linkedin_url' => 'nullable|url|max:255',
              'close_at' => 'required|date|after_or_equal:today'
        ]);

        $careerJob->update($validated);

        return redirect()->route('dashboard.career-jobs.index')->with('success', 'Job updated successfully.');
    }

    public function destroy(CareerJob $careerJob)
    {
        $careerJob->delete();

        return redirect()->route('dashboard.career-jobs.index')->with('success', 'Job deleted.');
    }


public function show(int $job) // Route Model Binding
{
    $job = CareerJob::findOrFail($job);

    // منع عرض وظيفة غير نشطة أو مغلقة
    if ($job->status !== 'active' || Carbon::parse($job->close_at)->isPast()) {
        abort(404);
    }

    // العلاقات للعرض
    $job->load([
        'department:id,name',
        'location:id,country,city,building,floor_office,district,street,postal_code'
    ]);

        $safeDescription = $job->description;


    // حساب الوقت المتبقي (أيام/ساعات/دقائق بلا كسور)
    $deadline    = Carbon::parse($job->close_at);
    $secondsLeft = now()->diffInSeconds($deadline, false);
    if ($secondsLeft >= 0) {
        $days  = intdiv($secondsLeft, 86400);
        $hours = intdiv($secondsLeft % 86400, 3600);
        $mins  = intdiv($secondsLeft % 3600, 60);

        if     ($days  > 0) $leftLabel = "{$days}d " . ($hours > 0 ? "{$hours}h " : "") . "left";
        elseif ($hours > 0) $leftLabel = "{$hours}h left";
        else                $leftLabel = "{$mins}m left";
    } else {
        $leftLabel = 'Closed';
    }

    // شارة الاستعجال
    $daysLeft = now()->diffInDays($deadline, false);
    $urgency  = $daysLeft <= 3 ? 'danger' : ($daysLeft <= 7 ? 'warning' : 'success');

    return view('web.Careers.show', compact('job', 'safeDescription', 'leftLabel', 'urgency', 'deadline'));
}

public function apply($id)
{
    $careerJob = CareerJob::where('id', $id)
        ->where('status', 'active')
        ->where(function ($q) {
            $q->whereNull('close_at')->orWhere('close_at', '>=', Carbon::now());
        })
        ->firstOrFail();

    return view('web.Careers.apply', compact('careerJob'));
}

    public function submitApplication(Request $request)
{
    // تحقّق أساسي
    $request->validate([
        'job_id'     => ['required','exists:career_jobs,id'],
        'first_name' => ['required','string','max:255'],
        'last_name'  => ['required','string','max:255'],
        'email'      => ['required','email','max:255'],
        'phone'      => ['required','string','max:255'],

        'address_street'  => ['nullable','string','max:255'],
        'address_city'    => ['nullable','string','max:255'],
        'address_state'   => ['nullable','string','max:255'],
        'address_country' => ['nullable','string','max:255'],
        'address_zip'     => ['nullable','string','max:255'],
        'location_city'   => ['nullable','string','max:255'],

        'linkedin_url'          => ['nullable','url','max:255'],
        'licenses_certifications'=> ['nullable','string','max:1000'],

        'cv_path'           => ['required','file','mimes:pdf,doc,docx','max:5120'], // 5MB
        'cover_letter_path' => ['nullable','file','mimes:pdf,doc,docx','max:5120'],
        'cover_letter_text' => ['nullable','string','max:10000'],
        'message'           => ['nullable','string','max:5000'],

        'requires_sponsorship' => ['nullable','in:0,1'],
        'is_over_18'           => ['nullable','in:0,1'],
        'has_non_compete'      => ['nullable','in:0,1'],
        'open_to_relocation'   => ['nullable','in:0,1'],
        'relocation_where'     => ['nullable','string','max:255'],

        'eeoc_gender'     => ['nullable','string','max:255'],
        'eeoc_ethnicity'  => ['nullable','string','max:255'],
        'eeoc_race'       => ['nullable','string','max:255'],
        'veteran_status'  => ['nullable','string','max:255'],
        'disability_status'=> ['nullable','string','max:255'],

        'educations'                 => ['nullable','array','max:10'],
        'educations.*.school'        => ['nullable','string','max:255'],
        'educations.*.degree'        => ['nullable','string','max:255'],
        'educations.*.discipline'    => ['nullable','string','max:255'],
        'educations.*.end_year'      => ['nullable','integer','min:1900','max:'.(int)now()->year+1],
    ]);

    // تأكد أنّ الوظيفة ما زالت مفتوحة
    $job = CareerJob::where('id', $request->job_id)
        ->where('status','active')
        ->where(function($q){ $q->whereNull('close_at')->orWhere('close_at','>=', now()); })
        ->firstOrFail();

    // رفع الملفات
    $cvPath = $request->file('cv_path')
        ? $request->file('cv_path')->store('careers/cv','public')
        : null;

    $coverPath = $request->file('cover_letter_path')
        ? $request->file('cover_letter_path')->store('careers/cover_letters','public')
        : null;

    // تنظيف نصوص بسيطة (منع HTML غير مرغوب)
    $clean = fn($v) => $v ? trim(strip_tags($v)) : null;

    // نبني full_name من الأول/الأخير
    $fullName = trim($request->first_name.' '.$request->last_name);

    $app = JobApplication::create([
        'job_id'            => $job->id,
        'first_name'        => $clean($request->first_name),
        'last_name'         => $clean($request->last_name),
        'full_name'         => $clean($fullName),
        'email'             => strtolower($clean($request->email)),
        'phone'             => $clean($request->phone),

        'address_street'    => $clean($request->address_street),
        'address_city'      => $clean($request->address_city),
        'address_state'     => $clean($request->address_state),
        'address_country'   => $clean($request->address_country),
        'address_zip'       => $clean($request->address_zip),
        'location_city'     => $clean($request->location_city),

        'cv_path'           => $cvPath,
        'cover_letter_path' => $coverPath,

        // نسمح بنص فقط في هذه الحقول
        'cover_letter_text'     => $clean($request->cover_letter_text),
        'message'               => $clean($request->message),
        'linkedin_url'          => $request->linkedin_url, // URL مُتحقق منه
        'licenses_certifications'=> $clean($request->licenses_certifications),

        'requires_sponsorship'  => $request->requires_sponsorship !== null ? (int)$request->requires_sponsorship : null,
        'is_over_18'            => $request->is_over_18 !== null ? (int)$request->is_over_18 : null,
        'has_non_compete'       => $request->has_non_compete !== null ? (int)$request->has_non_compete : null,
        'open_to_relocation'    => $request->open_to_relocation !== null ? (int)$request->open_to_relocation : null,
        'relocation_where'      => $clean($request->relocation_where),

        'eeoc_gender'       => $clean($request->eeoc_gender),
        'eeoc_ethnicity'    => $clean($request->eeoc_ethnicity),
        'eeoc_race'         => $clean($request->eeoc_race),
        'veteran_status'    => $clean($request->veteran_status),
        'disability_status' => $clean($request->disability_status),
    ]);

    // التعليم (متعدد)
    if (is_array($request->educations)) {
        foreach ($request->educations as $edu) {
            if (!array_filter($edu ?? [])) continue; // تجاهل الصف الفارغ
            JobApplicationEducation::create([
                'job_application_id' => $app->id,
                'school'     => $clean($edu['school'] ?? null),
                'degree'     => $clean($edu['degree'] ?? null),
                'discipline' => $clean($edu['discipline'] ?? null),
                'end_year'   => isset($edu['end_year']) && $edu['end_year'] !== '' ? (int)$edu['end_year'] : null,
            ]);
        }
    }

    return redirect()
        ->route('careers.show', $job->id)
        ->with('success', 'Your application has been submitted successfully.');
}
}
