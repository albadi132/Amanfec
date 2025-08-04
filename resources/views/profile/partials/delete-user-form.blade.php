<div class="card border-danger mb-4">
    <h5 class="card-header text-danger">
        {{ __('Delete Account') }}
    </h5>
    <div class="card-body">
        <p class="text-muted mb-3">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <button
            class="btn btn-danger"
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        >
            {{ __('Delete Account') }}
        </button>
    </div>
</div>

{{-- Modal --}}
<x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
        @csrf
        @method('delete')

        <h5 class="mb-3 text-danger">
            {{ __('Are you sure you want to delete your account?') }}
        </h5>

        <p class="mb-3 text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
        </p>

        <div class="mb-3">
            <label for="password" class="form-label sr-only">
                {{ __('Password') }}
            </label>
            <input
                type="password"
                id="password"
                name="password"
                class="form-control"
                placeholder="{{ __('Password') }}"
            />
            @if ($errors->userDeletion->get('password'))
                <div class="text-danger small mt-2">
                    {{ $errors->userDeletion->first('password') }}
                </div>
            @endif
        </div>

        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-secondary me-2" x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </button>
            <button type="submit" class="btn btn-danger">
                {{ __('Delete Account') }}
            </button>
        </div>
    </form>
</x-modal>
