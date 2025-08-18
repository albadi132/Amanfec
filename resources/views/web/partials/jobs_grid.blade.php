@if($jobs->count() === 0)
  <div class="text-center py-5">
    <h5 class="mb-2">No open positions at the moment.</h5>
    <p class="text-muted">Please check back later.</p>
  </div>
@else
  <div class="row g-4">
    @foreach($jobs as $job)
      @php
        $cityCountry = $job->location ? trim(($job->location->city ? $job->location->city.', ' : '').$job->location->country) : 'Not specified';
        $deptName    = $job->department->name ?? null;
        $catLabel    = $job->category === 'early_career_internships' ? 'Early Career + Internships' : 'Experienced Professionals';
        $workLabel   = match($job->work_arrangement){ 'remote'=>'Remote','hybrid'=>'Hybrid', default=>'On-site' };
        $deadline    = \Carbon\Carbon::parse($job->close_at);
        $daysLeft    = now()->diffInDays($deadline, false);
        $urgency     = $daysLeft <= 3 ? 'danger' : ($daysLeft <= 7 ? 'warning' : 'success');
      @endphp
@php
  $deadline    = \Carbon\Carbon::parse($job->close_at);
  $secondsLeft = now()->diffInSeconds($deadline, false);

  if ($secondsLeft >= 0) {
      $days   = intdiv($secondsLeft, 86400);
      $hours  = intdiv($secondsLeft % 86400, 3600);
      $mins   = intdiv($secondsLeft % 3600, 60);

      if ($days > 0) {
          $leftLabel = "{$days}d ".($hours > 0 ? "{$hours}h " : "")."left";
      } elseif ($hours > 0) {
          $leftLabel = "{$hours}h left";
      } else {
          $leftLabel = "{$mins}m left";
      }
  } else {
      $leftLabel = 'Closed';
  }
@endphp
      <div class="col-md-6 col-xl-4">
        <div class="job-card h-100 p-4 rounded-4 shadow-sm bg-white">
          <div class="d-flex justify-content-between align-items-start gap-3">
            <h5 class="mb-1 fw-bold text-dark">{{ $job->title }}</h5>
            <span class="badge bg-{{ $urgency }}-subtle text-{{ $urgency }} border border-{{ $urgency }}-subtle">
  {{ $leftLabel }}
</span>
          </div>

          @if($deptName)
            <div class="text-muted small mb-2"><i class="bx bx-building-house me-1"></i>{{ $deptName }}</div>
          @endif

          <div class="mb-3 text-muted">
            <i class="fa fa-map-marker-alt me-2"></i>{{ $cityCountry }}
          </div>

          <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="chip">{{ $catLabel }}</span>
            <span class="chip chip-outline">{{ $workLabel }}</span>
          </div>

          <div class="d-flex justify-content-between align-items-center mt-auto">
            <small class="text-muted">
              <i class="far fa-calendar-alt me-1"></i>
              Deadline: {{ $deadline->format('d M, Y') }}
            </small>
            <a class="btn-one rounded-0" href="{{ route('careers.show', $job->id) }}" style="color: #fff; font-weight: bold;">View Details</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="mt-4 d-flex justify-content-center">
    {{ $jobs->onEachSide(1)->links() }}
  </div>
@endif
