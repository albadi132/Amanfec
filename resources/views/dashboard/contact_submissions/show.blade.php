<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Submission Details</h2>
    </x-slot>

    <div class="card p-4">
        <p><strong>Full Name:</strong> {{ $contactSubmission->full_name }}</p>
        <p><strong>Email:</strong> {{ $contactSubmission->email }}</p>
        <p><strong>Phone:</strong> {{ $contactSubmission->phone }}</p>
        <p><strong>Subject:</strong> {{ $contactSubmission->subject }}</p>
        <p><strong>Message:</strong><br>{{ $contactSubmission->message }}</p>
        <a href="{{ route('dashboard.contact-submission.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</x-dashboard.app-layout>
