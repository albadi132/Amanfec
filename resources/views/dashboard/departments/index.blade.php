<x-dashboard.app-layout>


 <x-slot name="header">
        <h2 class="h4">Department</h2>
    </x-slot>

  <div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Department</h5>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
      <i class="bx bx-plus"></i> Add Department
    </button>

  </div>

  <div class="card-body">
    <div class="table-responsive">
        <br>
      <table class="table table-bordered table-hover w-100" id="departments-table">
        <thead class="table-light">
          <tr>
           <th>ID</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Actions</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>



 <!-- Add Department Modal -->
    <div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form method="POST" action="{{ route('departments.store') }}">
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addDepartmentModalLabel">Add New Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                    <label for="department-name" class="form-label">Department Name</label>
                    <input type="text" class="form-control" name="name" id="department-name" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
        </form>
      </div>
    </div>

    <!-- Edit Modal -->
<div class="modal fade" id="editDepartmentModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" id="editDepartmentForm">
      @csrf
      @method('PUT')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Department</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="editName" class="form-label">Department Name</label>
            <input type="text" name="name" id="editName" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>

    @push('scripts')
    <!-- jQuery & DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(function () {
            $('#departments-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("dashboard.departments.index") }}',
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'created_at' },
                    { data: 'action', orderable: false, searchable: false },
                ]
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
    $(document).on('click', '.btn-edit', function () {
        var id = $(this).data('id');
        var name = $(this).data('name');

        $('#editName').val(name);
        $('#editDepartmentForm').attr('action', '/dashboard/departments/' + id);
    });
});


$(document).on('click', '.btn-delete', function () {
    const id = $(this).data('id');

    Swal.fire({
        title: 'Are you sure?',
        text: 'This will permanently delete the department.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/dashboard/departments/${id}`,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE'
                },
                success: function (response) {
                    $('#departments-table').DataTable().ajax.reload();

                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: response.message,
                        timer: 1500,
                        showConfirmButton: false
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to delete the department.'
                    });
                }
            });
        }
    });
});

    </script>
    @endpush
</x-dashboard.app-layout>
