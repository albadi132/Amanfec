<x-app.app-layout>
    <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('Careers') }}">Careers</a></li>
                    <li>Apply</li>
                </ul>
                <h1 class="title">Apply for: {{ e($careerJob->title) }}</h1>
            </div>
        </div>
    </section>

    <section class="contact-form-section pt-120 pb-120">
        <div class="container">
            <div class="sec-title text-center mb-4">
                <h6 class="sub-title" style="color: #fff; font-weight: bold;">Application Form</h6>
                <h2 class="title">Submit Your Application</h2>
                <p class="text-muted">Fields marked * are required.</p>
            </div>

            {{-- Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>There were some problems with your submission:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('careers.apply.submit') }}" enctype="multipart/form-data" class="row g-4">
                @csrf
                <input type="hidden" name="job_id" value="{{ $careerJob->id }}">

                {{-- ========== المجموعة 1: المعلومات الشخصية ========== --}}
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Personal Information</h5>
                        </div>
                        <div class="card-body row g-3">
                            <div class="col-md-6">
                                <label class="form-label">First Name *</label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name *</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email *</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone *</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ========== المجموعة 2: العنوان والسكن ========== --}}
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Address</h5>
                        </div>
                        <div class="card-body row g-3">
                            <div class="col-md-12">
                                <label class="form-label">Street</label>
                                <input type="text" name="address_street" value="{{ old('address_street') }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">City</label>
                                <input type="text" name="address_city" value="{{ old('address_city') }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">State/Region</label>
                                <input type="text" name="address_state" value="{{ old('address_state') }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Country</label>
                                <input type="text" name="address_country" value="{{ old('address_country') }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Postal Code</label>
                                <input type="text" name="address_zip" value="{{ old('address_zip') }}" class="form-control">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Current City (for job filter)</label>
                                <input type="text" name="location_city" value="{{ old('location_city') }}" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ========== المجموعة 3: الروابط والمعلومات المهنية ========== --}}
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Professional Info</h5>
                        </div>
                        <div class="card-body row g-3">
                            <div class="col-md-6">
                                <label class="form-label">LinkedIn URL</label>
                                <input type="url" name="linkedin_url" value="{{ old('linkedin_url') }}" class="form-control" placeholder="https://...">
                                <small class="text-muted">Optional — share your professional profile.</small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Licenses / Certifications</label>
                                <input type="text" name="licenses_certifications" value="{{ old('licenses_certifications') }}" class="form-control" placeholder="e.g., PE, PMP, NFPA ...">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ========== المجموعة 4: السيرة والخطاب ========== --}}
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Resume & Cover Letter</h5>
                            <small class="text-muted">Upload a PDF/DOC. Cover letter can be a file or text.</small>
                        </div>
                        <div class="card-body row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Upload CV *</label>
                                <input type="file" name="cv_path" class="form-control" accept=".pdf,.doc,.docx" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Cover Letter (File)</label>
                                <input type="file" name="cover_letter_path" class="form-control" accept=".pdf,.doc,.docx">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Cover Letter (Text)</label>
                                <textarea name="cover_letter_text" class="form-control" rows="5" placeholder="Write your cover letter here...">{{ old('cover_letter_text') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Additional Message</label>
                                <textarea name="message" class="form-control" rows="4" placeholder="Anything else you'd like us to know?">{{ old('message') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ========== المجموعة 5: التعليم (مكرّر) ========== --}}
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Education</h5>
                            <button type="button" class="btn btn-sm btn-outline-primary" id="add-edu">Add Education</button>
                        </div>
                        <div class="card-body">
                            <div id="edu-list" class="row g-3">
                                {{-- عنصر افتراضي واحد --}}
                                @php $oldEdus = old('educations', [['school'=>'','degree'=>'','discipline'=>'','end_year'=>'']]); @endphp
                                @foreach($oldEdus as $i => $edu)
                                    <div class="col-12 edu-item border rounded p-3 position-relative">
                                        <button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-edu" aria-label="Remove"></button>
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label class="form-label">School</label>
                                                <input type="text" name="educations[{{ $i }}][school]" value="{{ $edu['school'] ?? '' }}" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Degree</label>
                                                <input type="text" name="educations[{{ $i }}][degree]" value="{{ $edu['degree'] ?? '' }}" class="form-control" placeholder="e.g., BSc, MSc">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Discipline</label>
                                                <input type="text" name="educations[{{ $i }}][discipline]" value="{{ $edu['discipline'] ?? '' }}" class="form-control" placeholder="e.g., Fire Engineering">
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">End Year</label>
                                                <input type="number" min="1900" max="{{ now()->year+1 }}" name="educations[{{ $i }}][end_year]" value="{{ $edu['end_year'] ?? '' }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <template id="edu-template">
                                <div class="col-12 edu-item border rounded p-3 position-relative">
                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-edu" aria-label="Remove"></button>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label class="form-label">School</label>
                                            <input type="text" name="__NAME__[school]" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Degree</label>
                                            <input type="text" name="__NAME__[degree]" class="form-control" placeholder="e.g., BSc, MSc">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Discipline</label>
                                            <input type="text" name="__NAME__[discipline]" class="form-control" placeholder="e.g., Fire Engineering">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">End Year</label>
                                            <input type="number" min="1900" max="{{ now()->year+1 }}" name="__NAME__[end_year]" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                {{-- ========== المجموعة 6: الأهلية (Sponsorship, Non-compete, Relocation, Age) ========== --}}
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Eligibility</h5>
                        </div>
                        <div class="card-body row g-3">
                            <div class="col-md-3">
                                <label class="form-label d-block">Require Sponsorship?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="requires_sponsorship" value="1" @checked(old('requires_sponsorship')==='1')>
                                    <label class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="requires_sponsorship" value="0" @checked(old('requires_sponsorship')==='0')>
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label d-block">At least 18 years old?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_over_18" value="1" @checked(old('is_over_18')==='1')>
                                    <label class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_over_18" value="0" @checked(old('is_over_18')==='0')>
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label d-block">Non-Compete Agreement?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="has_non_compete" value="1" @checked(old('has_non_compete')==='1')>
                                    <label class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="has_non_compete" value="0" @checked(old('has_non_compete')==='0')>
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label d-block">Open to Relocation?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="open_to_relocation" value="1" @checked(old('open_to_relocation')==='1')>
                                    <label class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="open_to_relocation" value="0" @checked(old('open_to_relocation')==='0')>
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">If open to relocation, where specifically?</label>
                                <input type="text" name="relocation_where" value="{{ old('relocation_where') }}" class="form-control" placeholder="City/Country preferences">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ========== المجموعة 7: (اختياري) التقارير الحكومية / التنوع ========== --}}
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Voluntary Demographics (Optional)</h5>
                        </div>
                        <div class="card-body row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Gender</label>
                                <input type="text" name="eeoc_gender" value="{{ old('eeoc_gender') }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Ethnicity</label>
                                <input type="text" name="eeoc_ethnicity" value="{{ old('eeoc_ethnicity') }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Race</label>
                                <input type="text" name="eeoc_race" value="{{ old('eeoc_race') }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Veteran Status</label>
                                <input type="text" name="veteran_status" value="{{ old('veteran_status') }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Disability Status</label>
                                <input type="text" name="disability_status" value="{{ old('disability_status') }}" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="col-12 text-center">
                    <button class="btn btn-primary px-4" type="submit">Submit Application</button>
                </div>
            </form>
        </div>
    </section>

    @push('scripts')
    <script>
        (function(){
            const list = document.getElementById('edu-list');
            const tpl  = document.getElementById('edu-template').innerHTML;

            document.getElementById('add-edu')?.addEventListener('click', () => {
                const index = list.querySelectorAll('.edu-item').length;
                const html  = tpl.replaceAll('__NAME__', `educations[${index}]`);
                const wrapper = document.createElement('div');
                wrapper.innerHTML = html.trim();
                list.appendChild(wrapper.firstElementChild);
            });

            document.addEventListener('click', (e) => {
                const btn = e.target.closest('.remove-edu');
                if(!btn) return;
                const item = btn.closest('.edu-item');
                item?.remove();
            });
        })();
    </script>
    @endpush

    <style>
        .card { border-radius: 12px; }
        .card-header { border-bottom: 1px solid #f0f2f5; }
    </style>
</x-app.app-layout>
