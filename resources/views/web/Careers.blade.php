<x-app.app-layout>
  <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
      <div class="auto-container">
        <div class="title-outer">
          <ul class="page-breadcrumb">
            <li><a href="/">Home</a></li>
            <li>Careers</li>
          </ul>
          <h1 class="title">Careers</h1>
        </div>
      </div>
    </section>
    <!-- end main-content -->


<section class="services-details pt-120 pb-120">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title"></div>
      </div>
      <div class="col-lg-6">
        <div class="section-title"></div>
      </div>
      <div class="col-lg-12">
        <div class="services-details__content position-relative my-5">
          <img src="{{ asset('build/images/resource/person-working-building-construction_23-2149184977.jpg') }}" alt="" />

        </div>
      </div>
    </div> <!-- نهاية row الأول -->

    <div class="row align-items-lg-center">
      <div class="col-lg-6">
        <div class="sec-title mb-40">
          <h6 class="sub-title wow fadeInUp bg-transparent ps-0" data-wow-delay="00ms" data-wow-duration="1500ms">Join Our Team</h6>
          <h2 class="title mb-30 wow splt-txt" data-splitting>Shape the future of fire and life safety <br class="d-none d-lg-block"> explore careers.</h2>
        </div>
      </div>
    </div>
  </div>
</section>

   <!-- Jobs Start -->
        <div class="container-xxl ">
            <div class="container">
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                    @foreach($jobs as $job)
<div class="job-item p-4 mb-5 border rounded shadow-sm bg-white">
  <div class="row g-4 align-items-center">
    <div class="col-sm-12 col-md-8 d-flex align-items-center">
      <div class="text-start ps-3">
        <h5 class="mb-2 text-dark fw-bold">{{ $job->title }}</h5>
        <span class="text-muted">
          <i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location ?? 'Not specified' }}
        </span>
      </div>
    </div>
    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
      <div class="d-flex mb-3">

        <a class="btn-one wow fadeInUp rounded-0" data-wow-delay="200ms" data-wow-duration="1500ms" href="{{ route('careers.show', $job->id) }}">
          Apply Now
        </a>
      </div>
      <small class="text-muted">
        <i class="far fa-calendar-alt text-primary me-2"></i>
        Deadline: {{ \Carbon\Carbon::parse($job->close_at)->format('d M, Y') }}
      </small>
    </div>
  </div>
</div>
@endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->

  		<!-- Services Section-->

</x-app.app-layout>