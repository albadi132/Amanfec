<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Add New Job</h2>
    </x-slot>

    <div class="card">
        <form id="career-job-form" method="POST" action="{{ route('dashboard.career-jobs.store') }}">
            @csrf
            <div class="card-body">
                {{-- Title --}}
                <div class="mb-3">
                    <label class="form-label">Job Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                {{-- Department --}}
                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <select name="department_id" class="form-select">
                        <option value="">— Select Department —</option>
                        @foreach($departments ?? [] as $dept)
                            <option value="{{ $dept->id }}" @selected(old('department_id')==$dept->id)>
                                {{ $dept->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Location (from locations table) --}}
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <select name="location_id" class="form-select">
                        <option value="">— Select Location —</option>
                        @foreach($locations ?? [] as $loc)
                            @php
                                $label = trim(($loc->city ? $loc->city.', ' : '').$loc->country);
                            @endphp
                            <option value="{{ $loc->id }}" @selected(old('location_id')==$loc->id)>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Category --}}
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="category" class="form-select" required>
                        <option value="experienced_professionals" @selected(old('category')=='experienced_professionals')>
                            Experienced Professionals
                        </option>
                        <option value="early_career_internships" @selected(old('category')=='early_career_internships')>
                            Early Career + Internships
                        </option>
                    </select>
                </div>

                {{-- Work Arrangement --}}
                <div class="mb-3">
                    <label class="form-label">Work Arrangement</label>
                    <select name="work_arrangement" class="form-select" required>
                        <option value="on_site" @selected(old('work_arrangement')=='on_site')>On-site</option>
                        <option value="hybrid"  @selected(old('work_arrangement')=='hybrid')>Hybrid</option>
                        <option value="remote"  @selected(old('work_arrangement')=='remote')>Remote</option>
                    </select>
                </div>

                {{-- Close Date --}}
                <div class="mb-3">
                    <label class="form-label">Close Date</label>
                    <input type="date" name="close_at" class="form-control" value="{{ old('close_at') }}" required>
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="active"   @selected(old('status')=='active')>Active</option>
                        <option value="inactive" @selected(old('status')=='inactive')>Inactive</option>
                    </select>
                </div>

                {{-- Description (Quill) --}}
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <div id="full-editor" style="height: 300px;">{!! old('description') !!}</div>
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
        <script src="{{ asset('build/assets/assets/vendor/libs/quill/katex.js')}}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const fullToolbar = [
                    [{ font: [] }, { size: [] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ color: [] }, { background: [] }],
                    [{ script: 'super' }, { script: 'sub' }],
                    [{ header: '1' }, { header: '2' }, 'blockquote', 'code-block'],
                    [{ list: 'ordered' }, { list: 'bullet' }, { indent: '-1' }, { indent: '+1' }],
                    [{ direction: 'rtl' }],
                    ['link', 'image', 'formula'],
                    ['clean']
                ];

                const fullEditor = new Quill('#full-editor', {
                    bounds: '#full-editor',
                    placeholder: 'Type Something...',
                    modules: { formula: true, toolbar: fullToolbar },
                    theme: 'snow'
                });

const form = document.getElementById('career-job-form');
                 function updateDescription() {
        const html = fullEditor.root.innerHTML;
        document.querySelector('input[name="description"]').value = html;
        console.log('Description updated:', html);
    }

    form.addEventListener('submit', function () {
        console.log('Form submitted');
        updateDescription();
    });

            });
        </script>
    @endpush
</x-dashboard.app-layout>
