<?php

namespace App\Http\Controllers;

use App\Models\CareerJob;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class CareerJobController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $jobs = CareerJob::select(['id', 'title', 'location', 'status', 'linkedin_url', 'created_at', 'close_at']);

            return DataTables::of($jobs)
                ->addColumn('action', function ($row) {
                    return '
                        <a href="' . route('dashboard.career-jobs.edit', $row->id) . '" class="btn btn-sm btn-primary">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteJob(' . $row->id . ')">Delete</button>
                        <form id="delete-form-' . $row->id . '" action="' . route('dashboard.career-jobs.destroy', $row->id) . '" method="POST" style="display:none;">
                            ' . csrf_field() . method_field('DELETE') . '
                        </form>
                    ';
                })
                ->editColumn('status', function ($row) {
                    return ucfirst($row->status);
                })
                ->addColumn('close_at', function ($row) {
                    return $row->close_at ? \Carbon\Carbon::parse($row->close_at)->format('Y-m-d') : 'N/A';
                })
                ->addColumn('is_closed', function ($row) {
                    $now = now();
                    if ($row->close_at && $now->gt($row->close_at)) {
                        return '<span class="badge bg-danger">Closed</span>';
                    } else {
                        return '<span class="badge bg-success">Open</span>';
                    }
                })
                ->rawColumns(['action', 'is_closed'])
                ->make(true);
        }

        return view('dashboard.career_jobs.index');
    }


    public function create()
    {
        return view('dashboard.career_jobs.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
            'linkedin_url' => 'nullable|url|max:255',
            'close_at' => 'required|date|after_or_equal:today'

        ]);

        CareerJob::create($validated);

        return redirect()->route('dashboard.career-jobs.index')->with('success', 'Job created successfully.');
    }

    public function edit(CareerJob $careerJob)
    {
        return view('dashboard.career_jobs.edit', compact('careerJob'));
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


    public function show($id)
    {
        $job = CareerJob::findOrFail($id);
        return view('web.Careers.show', compact('job'));
    }

public function apply($id)
{
    $careerJob = CareerJob::where('id', $id)
        ->where('status', 'active')
        ->where(function ($query) {
            $query->whereNull('close_at')
                  ->orWhere('close_at', '>=', Carbon::now());
        })
        ->firstOrFail();

    return view('web.Careers.apply', compact('careerJob'));
}

    public function submitApplication(Request $request)
    {

        $validated = $request->validate([
            'job_id' => 'required|exists:career_jobs,id',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'cv_path' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'message' => 'nullable|string',
        ]);

        $cvPath = $request->file('cv_path')->store('job_applications/cv', 'public');

        JobApplication::create([
            'job_id' => $validated['job_id'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'cv_path' => $cvPath,
            'message' => $validated['message'] ?? null,
        ]);

        return redirect()->route('careers.show', $validated['job_id'])->with('success', 'Your application has been submitted successfully.');

    }
}
