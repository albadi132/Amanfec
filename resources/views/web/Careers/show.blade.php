<x-app.app-layout>

  <!-- Title Section -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('Careers') }}">Careers</a></li>
          <li>{{ $job->title }}</li>
        </ul>
        <h1 class="title">{{ $job->title }}</h1>
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
      <div class="row mb-5">
        <div class="col-lg-8">
          <h2 class="mb-3">{{ $job->title }}</h2>
          <p class="mb-2 text-muted">
            <i class="fa fa-map-marker-alt text-primary me-2"></i>
            {{ $job->location ?? 'Not specified' }}
          </p>
          <p class="mb-3 text-muted">
            <i class="far fa-calendar-alt text-primary me-2"></i>
            Deadline: {{ \Carbon\Carbon::parse($job->close_at)->format('d M, Y') }}
          </p>
        </div>
        <div class="col-lg-4 text-lg-end text-start">
          @if($job->linkedin_url)
    <a href="{{ $job->linkedin_url }}" target="_blank" class="btn btn-outline-primary">
        Apply via LinkedIn
    </a>
@else
<a class="btn-one wow fadeInUp rounded-0" data-wow-delay="200ms" data-wow-duration="1500ms" href="{{ route('career.apply', $job->id) }}">Apply for this Job</a>

@endif
        </div>
      </div>

      <div class="services-details__content">
        {!! $job->description !!}
      </div>
    </div>

  </section>


</x-app.app-layout>