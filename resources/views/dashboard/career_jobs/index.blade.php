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
                        <th>Department</th>         {{-- جديد --}}
                        <th>Location</th>
                        <th>Category</th>           {{-- جديد --}}
                        <th>Work Arrangement</th>   {{-- جديد --}}
                        <th>Status</th>
                        <th>Close Date</th>
                        <th>Is Closed?</th>

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
        {{-- (اختياري) SweetAlert2 إن لم يكن مضافاً مسبقاً --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            $(function () {
                $('#jobs-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route("dashboard.career-jobs.index") }}',
                    order: [[6, 'desc']], // ترتيب حسب Close Date تنازلياً (يمكن تغييره)
                    columns: [
                        { data: 'title', name: 'title' },
                        { data: 'department', name: 'department', defaultContent: '—' },              // من addColumn('department')
                        { data: 'location', name: 'location', defaultContent: '—' },                  // من addColumn('location')
                        { data: 'category_label', name: 'category_label' },                           // من addColumn('category_label')
                        { data: 'work_arrangement_label', name: 'work_arrangement_label' },           // من addColumn('work_arrangement_label')
                        { data: 'status', name: 'status' },
                        { data: 'close_at', name: 'close_at' },
                        { data: 'is_closed', name: 'is_closed', orderable: false, searchable: false },// HTML badge
                        { data: 'action', name: 'action', orderable: false, searchable: false }       // أزرار التعديل والحذف
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
