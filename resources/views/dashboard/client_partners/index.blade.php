<x-dashboard.app-layout>
  <x-slot name="header">
    <h2 class="h4">Clients & Partners</h2>
  </x-slot>

  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Manage Clients & Partners</h5>
      <button class="btn btn-success" onclick="openCreateModal()">+ Add Entry</button>
    </div>
    <div class="card-body">
      <table class="table table-bordered w-100" id="client-partners-table">
        <thead>
          <tr>
            <th>Logo</th>
            <th>Name</th>
            <th>Type</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="clientPartnerModal" tabindex="-1">
    <div class="modal-dialog">
      <form id="clientPartnerForm" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" id="entry_id">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add / Edit Entry</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label>Name</label>
              <input type="text" name="name" class="form-control" required />
            </div>
            <div class="mb-3">
              <label>Type</label>
              <select name="type" class="form-control">
                <option value="client">Client</option>
                <option value="partner">Partner</option>
              </select>
            </div>
            <div class="mb-3">
              <label>Logo</label>
              <input type="file" name="logo_path" class="form-control" />
              <div id="logoPreview" class="mt-2"></div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  @push('scripts')
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      let table;
      $(function () {
        table = $('#client-partners-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.client-partners.index') }}",
          columns: [
            {
              data: 'logo_path',
              render: data => data ? `<img src="/storage/${data}" width="50">` : '-'
            },
            { data: 'name' },
            { data: 'type' },
            { data: 'created_at' },
            {
              data: 'action',
              orderable: false,
              searchable: false
            }
          ]
        });
      });

      function openCreateModal() {
        $('#clientPartnerForm')[0].reset();
        $('#entry_id').val('');
        $('#logoPreview').html('');
        $('#clientPartnerModal').modal('show');
      }

      function editEntry(id) {
        $.get("{{ url('dashboard/client-partners') }}/" + id + "/edit", function (data) {
          for (const key in data) {
            if (key !== "logo_path") {
              $(`[name="${key}"]`).val(data[key]);
            }
          }
          $('#entry_id').val(data.id);
          $('#logoPreview').html(data.logo_path ? `<img src="/storage/${data.logo_path}" width="80">` : '');
          $('#clientPartnerModal').modal('show');
        });
      }

      $('#clientPartnerForm').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        let id = $('#entry_id').val();
        let url = id ? "{{ url('dashboard/client-partners') }}/" + id : "{{ route('dashboard.client-partners.store') }}";
        if (id) formData.append('_method', 'PUT');

        $.ajax({
          url,
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: () => {
            $('#clientPartnerModal').modal('hide');
            table.ajax.reload();
          },
          error: () => alert('An error occurred.')
        });
      });
    </script>
  @endpush
</x-dashboard.app-layout>
