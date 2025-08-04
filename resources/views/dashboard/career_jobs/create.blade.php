

<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Add New Job</h2>
    </x-slot>

    <div class="card">
<form id="career-job-form" method="POST" action="{{ route('dashboard.career-jobs.store') }}">

            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Job Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">LinkedIn URL</label>
                    <input type="url" name="linkedin_url" class="form-control">
                       <div id="defaultFormControlHelp" class="form-text">
                        Note: You may leave the LinkedIn URL field blank if you prefer to use the built-in system feature for receiving applications instead of redirecting users to LinkedIn.


                        </div>
                </div>
<div class="mb-3">
    <label class="form-label">Close Date</label>
    <input type="date" name="close_at" class="form-control">
</div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

               <div class="mb-3">
    <label class="form-label">Description</label>
    <div id="quill-editor" style="height: 200px;"></div>
    <input type="hidden" name="description" required>
</div>

            </div>

            <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">Save Job</button>
            </div>
        </form>
    </div>


@push('styles')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const quill = new Quill('#quill-editor', {
        theme: 'snow'
    });

    const form = document.getElementById('career-job-form');

    function updateDescription() {
        const html = quill.root.innerHTML;
        document.querySelector('input[name="description"]').value = html;
        console.log('Description updated:', html);
    }

    form.addEventListener('submit', function () {
        console.log('Form submitted'); // تأكد من ظهورها في الكونسول
        updateDescription();
    });

    @isset($careerJob)
        quill.root.innerHTML = {!! json_encode($careerJob->description) !!};
    @endisset
});

</script>
@endpush
</x-dashboard.app-layout>
