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
        $data = JobApplication::with('job')->select('job_applications.*');

        return DataTables::of($data)
            ->addColumn('job_title', fn($row) => $row->job->title ?? '-')
            ->addColumn('cv_link', function ($row) {
                return $row->cv_path
                    ? '<a href="' . route('dashboard.job-applications.downloadCv', $row->id) . '" target="_blank" class="btn btn-sm btn-outline-secondary">Download CV</a>'
                    : '-';
            })
            ->addColumn('action', function ($row) {
                return '
                    <a href="' . route('dashboard.job-applications.show', $row->id) . '" class="btn btn-sm btn-primary">View</a>
                ';
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && $search = strtolower($request->get('search')['value'])) {
                    $query->where(function ($q) use ($search) {
                        $q->where(DB::raw('LOWER(full_name)'), 'like', "%{$search}%")
                          ->orWhere(DB::raw('LOWER(email)'), 'like', "%{$search}%")
                          ->orWhere(DB::raw('LOWER(phone)'), 'like', "%{$search}%")
                          ->orWhere(DB::raw('LOWER(created_at)'), 'like', "%{$search}%")
                          ->orWhereHas('job', function ($q2) use ($search) {
                              $q2->where(DB::raw('LOWER(title)'), 'like', "%{$search}%");
                          });
                    });
                }
            })
            ->rawColumns(['cv_link', 'action'])
            ->make(true);
    }

    return view('dashboard.job_applications.index');
}

    /**
     * Show the specified job application in detail.
     */
public function show(JobApplication $jobApplication)
{
    return view('dashboard.job_applications.show', compact('jobApplication'));
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
    // Not needed: create, store, edit, update (only frontend applies)
}
