@push('styles')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var quill = new Quill('#quill-editor', {
            theme: 'snow'
        });

        // إذا كنا في صفحة التعديل، نضع المحتوى القديم
        @isset($careerJob)
            quill.root.innerHTML = {!! json_encode($careerJob->description) !!};
        @endisset

        const form = document.getElementById('career-job-form');
        form.addEventListener('submit', function () {
            document.querySelector('input[name="description"]').value = quill.root.innerHTML;
            console.log("✔ تم تعيين وصف Quill داخل الحقل المخفي بنجاح.");
        });
    });
</script>
@endpush

<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Edit Job</h2>
    </x-slot>

    <div class="card">
     <form id="career-job-form" method="POST" action="{{ route('dashboard.career-jobs.update', $careerJob) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Job Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $careerJob->title }}" required>
                </div>

                  <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" value="{{ $careerJob->location }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">LinkedIn URL</label>
                    <input type="url" name="linkedin_url" class="form-control" value="{{ $careerJob->linkedin_url }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="active" {{ $careerJob->status === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $careerJob->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <div class="mb-3">
    <label class="form-label">Close Date</label>
    <input type="date" name="close_at" class="form-control">
</div>


              <div class="mb-3">
    <label class="form-label">Description</label>
    <div id="quill-editor" style="height: 200px;"></div>
    <input type="hidden" name="description" required>
</div>

            </div>

            <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">Update Job</button>
            </div>
        </form>
    </div>
</x-dashboard.app-layout>
