<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Application Details</h2>
    </x-slot>

    <div class="card p-4">
        {{-- ====== Applicant Info ====== --}}
        <h5 class="mb-3">Applicant</h5>
        <div class="row g-3 mb-4">
            <div class="col-md-4"><strong>Full Name:</strong> {{ e($jobApplication->full_name) }}</div>
            <div class="col-md-4">
                <strong>Email:</strong>
                <a href="mailto:{{ e($jobApplication->email) }}">{{ e($jobApplication->email) }}</a>
            </div>
            <div class="col-md-4">
                <strong>Phone:</strong>
                <a href="tel:{{ e($jobApplication->phone) }}">{{ e($jobApplication->phone) }}</a>
            </div>

            @if($jobApplication->linkedin_url)
                <div class="col-md-4">
                    <strong>LinkedIn:</strong>
                    <a href="{{ e($jobApplication->linkedin_url) }}" target="_blank" rel="noopener noreferrer">View Profile</a>
                </div>
            @endif

            {{-- Address --}}
            <div class="col-md-12">
                <strong>Address:</strong>
                @php
                    $parts = array_filter([
                        $jobApplication->address_street,
                        $jobApplication->address_city,
                        $jobApplication->address_state,
                        $jobApplication->address_zip,
                        $jobApplication->address_country,
                    ]);
                @endphp
                {{ $parts ? e(implode(', ', $parts)) : '—' }}
            </div>

            @if($jobApplication->location_city)
                <div class="col-md-4"><strong>Current City:</strong> {{ e($jobApplication->location_city) }}</div>
            @endif
        </div>

        <hr>

        {{-- ====== Job Info ====== --}}
        <h5 class="mb-3">Job</h5>
        <div class="row g-3 mb-4">
            <div class="col-md-4"><strong>Title:</strong> {{ e($jobApplication->job->title ?? '-') }}</div>
            <div class="col-md-4"><strong>Department:</strong> {{ e($deptName ?? '—') }}</div>
            <div class="col-md-4"><strong>Location:</strong> {{ e($cityCountry) }}</div>
            @if($jobApplication->job)
                <div class="col-md-4"><strong>Category:</strong> {{ $catLabel }}</div>
                <div class="col-md-4"><strong>Work Arrangement:</strong> {{ $workLabel }}</div>
                <div class="col-md-4">
                    <strong>Job Close At:</strong>
                    {{ optional($jobApplication->job->close_at)->format('Y-m-d') ?? '—' }}
                </div>
            @endif
        </div>

        <hr>

        {{-- ====== Eligibility Flags ====== --}}
        <h5 class="mb-3">Eligibility</h5>
        <div class="d-flex flex-wrap gap-2 mb-4">
            @if(!is_null($jobApplication->requires_sponsorship))
                <span class="badge bg-{{ $jobApplication->requires_sponsorship ? 'warning' : 'success' }}-subtle text-{{ $jobApplication->requires_sponsorship ? 'warning' : 'success' }} border border-{{ $jobApplication->requires_sponsorship ? 'warning' : 'success' }}-subtle">
                    {{ $jobApplication->requires_sponsorship ? 'Requires Sponsorship' : 'No Sponsorship' }}
                </span>
            @endif

            @if(!is_null($jobApplication->is_over_18))
                <span class="badge bg-{{ $jobApplication->is_over_18 ? 'success' : 'danger' }}-subtle text-{{ $jobApplication->is_over_18 ? 'success' : 'danger' }} border border-{{ $jobApplication->is_over_18 ? 'success' : 'danger' }}-subtle">
                    {{ $jobApplication->is_over_18 ? '18+' : 'Under 18' }}
                </span>
            @endif

            @if(!is_null($jobApplication->has_non_compete))
                <span class="badge bg-{{ $jobApplication->has_non_compete ? 'danger' : 'success' }}-subtle text-{{ $jobApplication->has_non_compete ? 'danger' : 'success' }} border border-{{ $jobApplication->has_non_compete ? 'danger' : 'success' }}-subtle">
                    {{ $jobApplication->has_non_compete ? 'Has Non-Compete' : 'No Non-Compete' }}
                </span>
            @endif

            @if(!is_null($jobApplication->open_to_relocation))
                <span class="badge bg-{{ $jobApplication->open_to_relocation ? 'success' : 'secondary' }}-subtle text-{{ $jobApplication->open_to_relocation ? 'success' : 'secondary' }} border border-{{ $jobApplication->open_to_relocation ? 'success' : 'secondary' }}-subtle">
                    {{ $jobApplication->open_to_relocation ? 'Open to Relocation' : 'No Relocation' }}
                </span>
            @endif
        </div>

        @if($jobApplication->relocation_where)
            <div class="mb-4"><strong>Relocation Where:</strong> {{ e($jobApplication->relocation_where) }}</div>
        @endif

        <hr>

        {{-- ====== Documents ====== --}}
        <h5 class="mb-3">Documents</h5>
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <strong>CV File:</strong>
                @if ($jobApplication->cv_path)
                    <a href="{{ route('dashboard.job-applications.downloadCv', $jobApplication->id) }}"
                       class="btn btn-sm btn-outline-primary ms-2" target="_blank" rel="noopener">
                        Download CV
                    </a>
                @else
                    <span class="text-muted ms-2">No file uploaded.</span>
                @endif
            </div>

            <div class="col-md-6">
                <strong>Cover Letter (File):</strong>
                @if ($jobApplication->cover_letter_path ?? null)
                    {{-- أنشئ رووت downloadCover إن رغبت بنفس أسلوب CV --}}
                    <a href="{{ route('dashboard.job-applications.downloadCover', $jobApplication->id) }}"
                       class="btn btn-sm btn-outline-secondary ms-2" target="_blank" rel="noopener">
                        Download Cover Letter
                    </a>
                @else
                    <span class="text-muted ms-2">—</span>
                @endif
            </div>
        </div>

        @if($coverLetterHtml)
            <div class="mb-4">
                <strong>Cover Letter (Text):</strong>
                <div class="border rounded p-3 bg-light job-desc">{!! $coverLetterHtml !!}</div>
            </div>
        @endif

        {{-- ====== Message ====== --}}
        @if($messageHtml)
            <div class="mb-4">
                <strong>Message:</strong>
                <div class="border rounded p-3 bg-light job-desc">{!! $messageHtml !!}</div>
            </div>
        @endif

        <hr>

        {{-- ====== Education ====== --}}
        <h5 class="mb-3">Education</h5>
        @if($jobApplication->educations->count())
            <div class="table-responsive mb-4">
                <table class="table table-sm align-middle">
                    <thead>
                        <tr>
                            <th>School</th>
                            <th>Degree</th>
                            <th>Discipline</th>
                            <th>End Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobApplication->educations as $edu)
                            <tr>
                                <td>{{ e($edu->school ?? '—') }}</td>
                                <td>{{ e($edu->degree ?? '—') }}</td>
                                <td>{{ e($edu->discipline ?? '—') }}</td>
                                <td>{{ e($edu->end_year ?? '—') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-muted mb-4">No education records.</div>
        @endif

        {{-- ====== Optional EEOC ====== --}}
        @if($jobApplication->eeoc_gender || $jobApplication->eeoc_ethnicity || $jobApplication->eeoc_race || $jobApplication->veteran_status || $jobApplication->disability_status)
            <hr>
            <h5 class="mb-3">Voluntary Demographics</h5>
            <div class="row g-3 mb-4">
                @if($jobApplication->eeoc_gender)<div class="col-md-4"><strong>Gender:</strong> {{ e($jobApplication->eeoc_gender) }}</div>@endif
                @if($jobApplication->eeoc_ethnicity)<div class="col-md-4"><strong>Ethnicity:</strong> {{ e($jobApplication->eeoc_ethnicity) }}</div>@endif
                @if($jobApplication->eeoc_race)<div class="col-md-4"><strong>Race:</strong> {{ e($jobApplication->eeoc_race) }}</div>@endif
                @if($jobApplication->veteran_status)<div class="col-md-4"><strong>Veteran Status:</strong> {{ e($jobApplication->veteran_status) }}</div>@endif
                @if($jobApplication->disability_status)<div class="col-md-4"><strong>Disability Status:</strong> {{ e($jobApplication->disability_status) }}</div>@endif
            </div>
        @endif

        <hr>

        {{-- ====== Meta ====== --}}
        <div class="mb-3"><strong>Submitted At:</strong> {{ optional($jobApplication->created_at)->format('Y-m-d H:i') }}</div>

        <div class="d-flex gap-2">
            <a href="{{ route('dashboard.job-applications.index') }}" class="btn btn-outline-secondary">Back</a>
        </div>
    </div>

    <style>
        .bg-success-subtle{background:#e9f7ef}.bg-warning-subtle{background:#fff7e6}.bg-danger-subtle{background:#fdecea}.bg-secondary-subtle{background:#eef1f5}
        .text-success{color:#198754}.text-warning{color:#b58100}.text-danger{color:#dc3545}.text-secondary{color:#6c757d}
        .border-success-subtle{border-color:#cfe9da}.border-warning-subtle{border-color:#ffe0a3}.border-danger-subtle{border-color:#f5b5b0}.border-secondary-subtle{border-color:#d7dbe1}
        .job-desc a{word-break:break-word}
    </style>
</x-dashboard.app-layout>
