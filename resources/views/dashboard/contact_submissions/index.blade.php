<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Contact Submissions</h2>
    </x-slot>

    <div class="card p-3">
        <table class="table table-bordered w-100" id="contact-submissions-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <script>
            $(function () {
                $('#contact-submissions-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('dashboard.contact-submission.index') }}",
                    columns: [
                        { data: 'full_name', name: 'full_name' },
                        { data: 'email', name: 'email' },
                        { data: 'phone', name: 'phone' },
                        { data: 'subject', name: 'subject' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]
                });
            });
        </script>
    @endpush
</x-dashboard.app-layout>
