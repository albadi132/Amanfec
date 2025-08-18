<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Job Applications</h2>
    </x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Job Applications</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="job-app-table">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Job Title</th>
                        <th>Department</th>
                        <th>Location</th>
                        <th>Flags</th>
                        <th>CV</th>
                        <th>Submitted</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <script>
            $(function () {
                $('#job-app-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('dashboard.job-applications.index') }}",
                    order: [[8, 'desc']], // Submitted
                    columns: [
                        { data: 'full_name', name: 'full_name' },
                        { data: 'email', name: 'email' },
                        { data: 'phone', name: 'phone' },

                        { data: 'job_title', name: 'job.title', orderable: false },
                        { data: 'job_department', name: 'job.department.name', orderable: false },
                        { data: 'job_location', name: 'job.location.city', orderable: false },

                        { data: 'flags', name: 'flags', orderable: false, searchable: false },
                        { data: 'cv_link', name: 'cv_link', orderable: false, searchable: false },
                        { data: 'submitted_at', name: 'created_at' },
                        { data: 'action', name: 'action', orderable: false, searchable: false },
                    ]
                });
            });
        </script>
    @endpush
</x-dashboard.app-layout>
