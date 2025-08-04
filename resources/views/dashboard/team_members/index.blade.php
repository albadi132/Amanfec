<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Team Members</h2>
    </x-slot>

  <div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Team Members</h5>
    <button class="btn btn-success" onclick="openCreateModal()">
      <i class="bx bx-plus"></i> Add Member
    </button>
  </div>

  <div class="card-body">
    <div class="table-responsive">
        <br>
      <table class="table table-bordered table-hover w-100" id="team-members-table">
        <thead class="table-light">
          <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Title</th>
            <th>Department</th>
            <th>Order</th>
            <th>Show on Home</th>
            <th>Status</th>

            <th style="width: 130px;">Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>




 <!-- Team Member Modal -->
<div class="modal fade" id="teamMemberModal" tabindex="-1" aria-labelledby="teamMemberModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form id="memberForm" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="_method" id="formMethod" value="POST">
      <input type="hidden" name="id" id="teamMemberId">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="teamMemberModalLabel">Add / Edit Team Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Name</label>
              <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Title</label>
              <input type="text" name="title" id="title" class="form-control">
            </div>

            <label class="form-label">Department</label>
<select name="department_id" id="department_id" class="form-select">
  <option value="">-- Select Department --</option>
  @foreach($departments as $department)
    <option value="{{ $department->id }}">{{ $department->name }}</option>
  @endforeach
</select>

<div class="col-md-12">
  <label class="form-label">Bio</label>
  <textarea name="bio" id="bio" class="form-control" rows="4"></textarea>
</div>

            <div class="col-md-6">
              <label class="form-label">Display Order</label>
              <input type="number" name="display_order" id="display_order" class="form-control" min="0">
            </div>

            <div class="col-md-6">
              <label class="form-label">Show on Homepage</label>
              <select name="show_on_homepage" id="show_on_homepage" class="form-select">
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select name="status" id="status" class="form-select">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>

            <div class="col-md-12">
              <label class="form-label">Photo</label>
              <input type="file" name="photo" id="photo" class="form-control">
              <div class="mt-2">
                <img id="photoPreview" src="" alt="Preview" style="max-height: 100px; display: none;">
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer mt-4">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
        let table;

$(function () {
    table = $('#team-members-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('dashboard.team-members.index') }}",
        columns: [
            {
                data: 'photo',
                name: 'photo',
                render: function (data) {
                    return data
                        ? `<img src="/storage/${data}" width="50" height="50" class="rounded-circle" style="object-fit: cover;" alt="Photo" />`
                        : '-';
                }
            },
            { data: 'name', name: 'name' },
            { data: 'title', name: 'title' },
            { data: 'department', name: 'department' },
            { data: 'display_order', name: 'display_order' },
            {
                data: 'show_on_homepage',
                name: 'show_on_homepage',
    render: function (data, type, row) {

        const isShown = ( data === "Yes");
        return `<span class="badge bg-${isShown ? 'success' : 'secondary'}">${isShown ? 'Yes' : 'No'}</span>`;
    }
            },
            {
                data: 'status',
                name: 'status',
render: function (data, type, row) {
 console.log(data);
        const isShown = ( data === "Active");
        return `<span class="badge bg-${isShown ? 'success' : 'secondary'}">${data}</span>`;
    }

            },

            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});

function openCreateModal() {
    $('#memberForm')[0].reset();
    $('#teamMemberId').val('');
    $('#photoPreview').hide();
    $('#formMethod').val('POST');
    $('#teamMemberModal').modal('show');
}

function editMember(id) {

  Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'info',
    title: 'Loading data...',
    showConfirmButton: false,
    timer: 1000
});

    $.get("{{ url('dashboard/team-members') }}/" + id + "/edit", function(data) {
        $('#teamMemberId').val(data.id);
        $('#formMethod').val('PUT');
        $('#bio').val(data.bio ?? '');
        $('#name').val(data.name);
        $('#title').val(data.title);
        $('#department_id').val(data.department_id);
        $('#display_order').val(data.display_order);
        $('#show_on_homepage').val(data.show_on_homepage);
        $('#status').val(data.status);

        if (data.photo) {
            $('#photoPreview').attr('src', '/storage/' + data.photo).show();
        } else {
            $('#photoPreview').hide();
        }

        $('#teamMemberModal').modal('show');
    });
}

$('#memberForm').on('submit', function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    let id = $('#teamMemberId').val();
    let url = id
        ? "{{ url('dashboard/team-members') }}/" + id
        : "{{ route('dashboard.team-members.store') }}";

        console.log(formData);
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
       success: function () {
    $('#teamMemberModal').modal('hide');
    table.ajax.reload();

    Swal.fire({
        icon: 'success',
        title: 'Saved successfully!',
        showConfirmButton: false,
        timer: 1500
    });
},
error: function (xhr) {
    let message = 'Something went wrong';
    if (xhr.responseJSON && xhr.responseJSON.message) {
        message = xhr.responseJSON.message;
    }

    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: message,
    });
}

    });
});

function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This will permanently delete the team member!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it!',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/dashboard/team-members/${id}`,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: "DELETE"
                },
                success: function (response) {
                    table.ajax.reload();

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
                        title: 'Oops...',
                        text: 'Failed to delete the member!'
                    });
                }
            });
        }
    });
}

    </script>
    @endpush

</x-dashboard.app-layout>
