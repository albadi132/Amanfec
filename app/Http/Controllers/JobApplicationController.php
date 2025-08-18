<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;


class JobApplicationController extends Controller
{
    /**
     * Display a listing of the job applications.
     */

public function index(Request $request)
{
    if ($request->ajax()) {
        $data = JobApplication::query()
            ->with([
                'job:id,title,department_id,location_id',
                'job.department:id,name',
                'job.location:id,city,country',
            ])
            ->select('job_applications.*');

        return DataTables::of($data)
            // عنوان الوظيفة
            ->addColumn('job_title', fn($row) => e(optional($row->job)->title ?? '-'))

            // القسم
            ->addColumn('job_department', fn($row) => e(optional(optional($row->job)->department)->name ?? '-'))

            // الموقع City, Country
            ->addColumn('job_location', function ($row) {
                $loc = optional(optional($row->job)->location);
                $label = $loc->city ? "{$loc->city}, {$loc->country}" : ($loc->country ?? '-');
                return e($label ?? '-');
            })

            // شارات الحالة (Sponsorship/18+/Non-Compete/Relocation)
            ->addColumn('flags', function ($row) {
                $badges = [];

                if (!is_null($row->requires_sponsorship)) {
                    $badges[] = $row->requires_sponsorship
                        ? '<span class="badge bg-warning-subtle text-warning border border-warning-subtle">Sponsorship</span>'
                        : '<span class="badge bg-success-subtle text-success border border-success-subtle">No Sponsorship</span>';
                }
                if (!is_null($row->is_over_18)) {
                    $badges[] = $row->is_over_18
                        ? '<span class="badge bg-success-subtle text-success border border-success-subtle">18+</span>'
                        : '<span class="badge bg-danger-subtle text-danger border border-danger-subtle">Under 18</span>';
                }
                if (!is_null($row->has_non_compete)) {
                    $badges[] = $row->has_non_compete
                        ? '<span class="badge bg-danger-subtle text-danger border border-danger-subtle">Non-Compete</span>'
                        : '<span class="badge bg-success-subtle text-success border border-success-subtle">No Non-Compete</span>';
                }
                if (!is_null($row->open_to_relocation)) {
                    $text = $row->open_to_relocation ? 'Relocation' : 'No Relocation';
                    $class = $row->open_to_relocation ? 'success' : 'secondary';
                    $badges[] = '<span class="badge bg-'.$class.'-subtle text-'.$class.' border border-'.$class.'-subtle">'.$text.'</span>';
                }

                return $badges ? implode(' ', $badges) : '—';
            })

            // رابط السيرة
            ->addColumn('cv_link', function ($row) {
                return $row->cv_path
                    ? '<a href="'.e(route('dashboard.job-applications.downloadCv', $row->id)).'" target="_blank" rel="noopener" class="btn btn-sm btn-outline-secondary">Download CV</a>'
                    : '—';
            })

            // تاريخ الإرسال بتنسيق جميل
            ->addColumn('submitted_at', fn($row) => optional($row->created_at)->format('Y-m-d H:i'))

            // الأكشن
            ->addColumn('action', function ($row) {
                return '
                    <a href="'.e(route('dashboard.job-applications.show', $row->id)).'" class="btn btn-sm btn-primary">View</a>
                ';
            })

            // فلترة البحث العامة
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && ($search = strtolower($request->get('search')['value'] ?? ''))) {
                    $query->where(function ($q) use ($search) {
                        $q->where(DB::raw('LOWER(full_name)'), 'like', "%{$search}%")
                          ->orWhere(DB::raw('LOWER(email)'), 'like', "%{$search}%")
                          ->orWhere(DB::raw('LOWER(phone)'), 'like', "%{$search}%")
                          ->orWhere(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d %H:%i")'), 'like', "%{$search}%")
                          ->orWhereHas('job', function ($q2) use ($search) {
                              $q2->where(DB::raw('LOWER(title)'), 'like', "%{$search}%")
                                ->orWhereHas('department', function ($q3) use ($search) {
                                    $q3->where(DB::raw('LOWER(name)'), 'like', "%{$search}%");
                                })
                                ->orWhereHas('location', function ($q4) use ($search) {
                                    $q4->where(DB::raw('LOWER(city)'), 'like', "%{$search}%")
                                       ->orWhere(DB::raw('LOWER(country)'), 'like', "%{$search}%");
                                });
                          });
                    });
                }
            })

            ->rawColumns(['cv_link', 'action', 'flags'])
            ->make(true);
    }

    return view('dashboard.job_applications.index');
}

    /**
     * Show the specified job application in detail.
     */
public function show(JobApplication $jobApplication)
{
    $jobApplication->load([
        'job:id,title,department_id,location_id,category,work_arrangement,close_at',
        'job.department:id,name',
        'job.location:id,city,country',
        'educations:id,job_application_id,school,degree,discipline,end_year',
    ]);

    // تحضير عرض آمن للنصوص الحرّة (cover letter text / message)
    $renderSafe = function (?string $html) {
        if (!$html) return null;
        if (class_exists(\Mews\Purifier\Facades\Purifier::class)) {
            // بروفايل بسيط يسمح بنص وروابط أساسية فقط (بدون سكربت/ستايل)
            return \Mews\Purifier\Facades\Purifier::clean($html, [
                'HTML.ForbiddenElements' => ['script','style'],
                'HTML.Allowed' => 'p,br,ul,ol,li,strong,em,b,i,u,s,blockquote,code,pre,a[href|title|target|rel]',
                'URI.AllowedSchemes' => ['http'=>true,'https'=>true,'mailto'=>true],
                'HTML.TargetBlank' => true,
            ]);
        }
        // fallback: نص عادي + أسطر
        return nl2br(e($html));
    };

    $coverLetterHtml = $renderSafe($jobApplication->cover_letter_text);
    $messageHtml     = $renderSafe($jobApplication->message);

    // معلومات إضافية للعرض
    $cityCountry = optional($jobApplication->job->location)->city
        ? $jobApplication->job->location->city . ', ' . $jobApplication->job->location->country
        : (optional($jobApplication->job->location)->country ?? '—');

    $deptName  = optional($jobApplication->job->department)->name;
    $catLabel  = $jobApplication->job?->category === 'early_career_internships'
        ? 'Early Career + Internships' : 'Experienced Professionals';
    $workLabel = match($jobApplication->job?->work_arrangement){
        'remote' => 'Remote',
        'hybrid' => 'Hybrid',
        default  => 'On-site',
    };

    return view('dashboard.job_applications.show', compact(
        'jobApplication','coverLetterHtml','messageHtml','cityCountry','deptName','catLabel','workLabel'
    ));
}
    /**
     * Remove the specified job application from storage.
     */
    public function destroy(JobApplication $jobApplication)
    {
        $jobApplication->delete();
        return redirect()->route('job-applications.index')->with('success', 'Application deleted.');
    }


public function downloadCv($id): StreamedResponse
{
    $jobApplication = JobApplication::with('job')->findOrFail($id);

    $filePath = $jobApplication->cv_path;

    if (!Storage::disk('public')->exists($filePath)) {
        abort(404, 'File not found.');
    }

    $jobTitle = $jobApplication->job?->title ?? 'Job';
    $applicantName = $jobApplication->full_name;

    $safeName = Str::slug($applicantName . '-' . $jobTitle) . '.' . pathinfo($filePath, PATHINFO_EXTENSION);

    return Storage::disk('public')->download($filePath, $safeName);
}

public function downloadCover($id): StreamedResponse
{
    $jobApplication = JobApplication::with('job')->findOrFail($id);

    $filePath = $jobApplication->cover_letter_path;

    if (!Storage::disk('public')->exists($filePath)) {
        abort(404, 'File not found.');
    }

    $jobTitle = $jobApplication->job?->title ?? 'Job';
    $applicantName = $jobApplication->full_name;

    $safeName = Str::slug($applicantName . '-' . $jobTitle) . '.' . pathinfo($filePath, PATHINFO_EXTENSION);

    return Storage::disk('public')->download($filePath, $safeName);
}

    // Not needed: create, store, edit, update (only frontend applies)
}
