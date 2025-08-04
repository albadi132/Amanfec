@push('styles')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
    var quill = new Quill('#quill-editor', {
        theme: 'snow'
    });

    document.querySelector('form').addEventListener('submit', function () {
        document.querySelector('input[name="notes"]').value = quill.root.innerHTML;
    });

    @isset($user)
        quill.root.innerHTML = {!! json_encode($user->notes) !!};
    @endisset
</script>
@endpush

<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Add New User</h2>
    </x-slot>

    <div class="card">
        <form method="POST" action="{{ route('dashboard.users.store') }}">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>



            </div>

            <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">Save User</button>
            </div>
        </form>
    </div>
</x-dashboard.app-layout>