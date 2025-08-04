<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="row">
  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-primary h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-briefcase"></i></span>
          </div>
          <h4 class="ms-1 mb-0">{{ $activeJobsCount }}</h4>
        </div>
        <p class="mb-1">Active Job Listings</p>
        <p class="mb-0"><small class="text-muted">Still accepting applications</small></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-info h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-group"></i></span>
          </div>
          <h4 class="ms-1 mb-0">{{ $applicantsCount }}</h4>
        </div>
        <p class="mb-1">Total Applicants</p>
        <p class="mb-0"><small class="text-muted">Submitted applications</small></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-warning h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-envelope"></i></span>
          </div>
          <h4 class="ms-1 mb-0">{{ $contactsTodayCount }}</h4>
        </div>
        <p class="mb-1">Messages Today</p>
        <p class="mb-0"><small class="text-muted">New contact submissions</small></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card card-border-shadow-success h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2 pb-1">
          <div class="avatar me-2">
            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-mail-send"></i></span>
          </div>
          <h4 class="ms-1 mb-0">{{ $totalContacts }}</h4>
        </div>
        <p class="mb-1">Total Contact Messages</p>
        <p class="mb-0"><small class="text-muted">Since launch</small></p>
      </div>
    </div>
  </div>
</div>


<div class="card g-3 mt-5">
    <div class="card-body row g-3">
        <div class="col-lg-8">
            <div class="hero-text-box text-center">
                <h1 class="text-primary hero-title display-4 fw-bold">
                    Aman Fire & Safety Consultancy
                </h1>
                <h2 class="hero-sub-title h6 mb-4 pb-1">
                    A professional system for managing fire protection projects, safety assessments, and expert services in fire and life safety engineering.
                </h2>
                Welcome <span class="text-primary fw-bold">{{ Auth::user()->name }}</span> — your dashboard is ready.
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="card h-100">
                <img src="{{ asset('build/images/testimonial/testimonial-two-image.jpg')}}" class="card-img-top" alt="Aman Fire & Safety">
            </div>
        </div>
    </div>
</div>


</x-dashboard.app-layout>


