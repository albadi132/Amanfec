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
        <h2 class="h4">Edit User</h2>
    </x-slot>

    <div class="card">
        <form method="POST" action="{{ route('dashboard.users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">New Password <small>(leave blank to keep current)</small></label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

            </div>

            <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">Update User</button>
            </div>
        </form>
    </div>
</x-dashboard.app-layout>
