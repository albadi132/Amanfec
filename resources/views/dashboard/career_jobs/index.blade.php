
<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Career Jobs</h2>
    </x-slot>


    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Job Listings</h5>
            <a href="{{ route('dashboard.career-jobs.create') }}" class="btn btn-success">
                <i class="bx bx-plus"></i> Add New Job
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="jobs-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Status</th>
                         <th>Close Date</th>
        <th>Is Closed?</th>
                        <th>LinkedIn URL</th>
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
                $('#jobs-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route("dashboard.career-jobs.index") }}',
columns: [
    { data: 'title', name: 'title' },
    { data: 'location', name: 'location' },
    { data: 'status', name: 'status' },
    { data: 'close_at', name: 'close_at' }, // جديد
    { data: 'is_closed', name: 'is_closed', orderable: false, searchable: false }, // جديد
    { data: 'linkedin_url', name: 'linkedin_url' },
    { data: 'action', name: 'action', orderable: false, searchable: false }
]
                });
            });


            function deleteJob(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This action cannot be undone.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById('delete-form-' + id);
            if (form) form.submit();
        }
    });
}
        </script>
    @endpush
</x-dashboard.app-layout>
