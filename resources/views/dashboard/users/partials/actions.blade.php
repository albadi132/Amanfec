<a href="{{ route('dashboard.users.edit', $user->id) }}" class="btn btn-sm btn-primary">
    <i class="bx bx-edit"></i> Edit
</a>

<form method="POST" action="{{ route('dashboard.users.destroy', $user->id) }}"
      style="display:inline;" id="delete-form-{{ $user->id }}">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-sm btn-danger" onclick="deleteUser({{ $user->id }})">
        <i class="bx bx-trash"></i> Delete
    </button>
</form>
