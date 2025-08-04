<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">News Management</h2>
    </x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">News Management</h5>
             <a href="{{ route('dashboard.news.create') }}" class="btn btn-success mb-3">+ Create News</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="news-table">
                <thead>
                    <tr>
                        <th>Cover</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Published At</th>
                    <th>Created At</th>
                    <th>Action</th>
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
                $('#news-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('dashboard.news.index') }}",
                    columns: [
                        { data: 'cover_image', name: 'cover_image', orderable: false, searchable: false },
                        { data: 'title', name: 'title' },
                        { data: 'slug', name: 'slug' },
                        { data: 'published_at', name: 'published_at' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]
                });
            });
        </script>
    @endpush
</x-dashboard.app-layout>
