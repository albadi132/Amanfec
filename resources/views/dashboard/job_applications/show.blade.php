<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Application Details</h2>
    </x-slot>

    <div class="card p-4">
        <div class="mb-3"><strong>Full Name:</strong> {{ $jobApplication->full_name }}</div>
        <div class="mb-3"><strong>Email:</strong> {{ $jobApplication->email }}</div>
        <div class="mb-3"><strong>Phone:</strong> {{ $jobApplication->phone }}</div>
        <div class="mb-3"><strong>Job Title:</strong> {{ $jobApplication->job?->title ?? '-' }}</div>
        <div class="mb-3"><strong>Message:</strong> <div class="border p-2 bg-light">{{ $jobApplication->message }}</div></div>
        <div class="mb-3">
            <strong>CV File:</strong>
            @if ($jobApplication->cv_path)
               <a href="{{ route('dashboard.job-applications.downloadCv', $jobApplication->id) }}" class="btn btn-sm btn-primary" target="_blank">
    Download CV
</a>
            @else
                <span class="text-muted">No file uploaded.</span>
            @endif
        </div>
        <a href="{{ route('dashboard.job-applications.index') }}" class="btn btn-outline-secondary">Back</a>
    </div>
</x-dashboard.app-layout>
