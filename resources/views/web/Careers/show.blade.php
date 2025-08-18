<x-app.app-layout>

  <!-- Title Section -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('Careers') }}">Careers</a></li>
          <li>{{ e($job->title) }}</li>
        </ul>
        <h1 class="title">{{ e($job->title) }}</h1>
      </div>
    </div>
  </section>

  <!-- Job Detail Section -->
  <section class="services-details pt-120 pb-120">
    <div class="container">
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="row mb-5 align-items-start g-4">
        <div class="col-lg-8">
          <h2 class="mb-2">{{ e($job->title) }}</h2>

          @php
            $cityCountry = $job->location
              ? trim(($job->location->city ? $job->location->city.', ' : '').$job->location->country)
              : 'Not specified';
            $deptName  = $job->department->name ?? null;
            $catLabel  = $job->category === 'early_career_internships' ? 'Early Career + Internships' : 'Experienced Professionals';
            $workLabel = match($job->work_arrangement){ 'remote'=>'Remote','hybrid'=>'Hybrid', default=>'On-site' };
          @endphp

          <div class="text-muted mb-2">
            <i class="fa fa-map-marker-alt text-primary me-2"></i>{{ e($cityCountry) }}
            @if($deptName)
              &nbsp; | &nbsp;<i class="bx bx-building-house text-primary me-1"></i>{{ e($deptName) }}
            @endif
          </div>


          <div class="mb-3">
            <small class="text-muted">
              <i class="far fa-calendar-alt text-primary me-2"></i>
              Deadline: {{ $deadline->format('d M, Y') }}
            </small>
            <span class="ms-2 badge bg-{{ $urgency }}-subtle text-{{ $urgency }} border border-{{ $urgency }}-subtle">
              {{ $leftLabel }}
            </span>
          </div>
        </div>

        <div class="col-lg-4 text-lg-end text-start">
          <a class="btn-one rounded-0" href="{{ route('career.apply', $job->id) }}" style="color: #fff; font-weight: bold;">Apply for this Job</a>
        </div>
      </div>

      <div class="services-details__content job-desc">
        {{-- عرض الوصف المنقّى فقط --}}
        {!! $safeDescription !!}

      </div>
    </div>
  </section>
 @push('style')
  <style>
    .chip{display:inline-block;font-size:.85rem;padding:.35rem .6rem;background:#f3f5f7;border-radius:999px}
    .chip-outline{background:transparent;border:1px solid #e3e6ea;color:#6c757d}
    .bg-success-subtle{background:#e9f7ef}.bg-warning-subtle{background:#fff7e6}.bg-danger-subtle{background:#fdecea}
    .text-success{color:#198754}.text-warning{color:#b58100}.text-danger{color:#dc3545}
    .border-success-subtle{border-color:#cfe9da}.border-warning-subtle{border-color:#ffe0a3}.border-danger-subtle{border-color:#f5b5b0}

    /* تحسينات أمان/عرض للروابط داخل الوصف */
    .job-desc a{word-break:break-word}


  </style>
<style>
  .services-details__content.job-desc,
  .services-details__content.job-desc * {
    all: revert;           /* يعطل تأثير CSS المشروع */
  }
  /* تحسينات طفيفة */
  .services-details__content.job-desc img { max-width:100%; height:auto; }
  .services-details__content.job-desc a { color:#0d6efd; text-decoration:underline; }
</style>
@endpush
  {{-- (اختياري) تأمين rel/target للروابط عبر JS إن رغبت --}}
  @push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.job-desc a[href]').forEach(a => {
        // افتح الروابط في تبويب جديد مع حماية noopener
        a.setAttribute('target','_blank');
        const rel = (a.getAttribute('rel') || '').split(' ').filter(Boolean);
        ['noopener','noreferrer'].forEach(v => { if(!rel.includes(v)) rel.push(v); });
        a.setAttribute('rel', rel.join(' '));
      });
    });
  </script>
  @endpush

</x-app.app-layout>
