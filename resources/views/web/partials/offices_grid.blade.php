@if($locations->count() === 0)
  <div class="text-center py-5">
    <h5 class="mb-2">No offices found</h5>
    <p class="text-muted">Try adjusting your filters.</p>
  </div>
@else
  <div class="row g-4">
    @foreach($locations as $loc)
      @php
        $addrParts = array_filter([
          $loc->building, $loc->floor_office, $loc->district, $loc->street,
          $loc->city, $loc->postal_code, $loc->country
        ], fn($v) => filled($v));
        $addressLine = implode(', ', $addrParts);
        $mapsUrl = ($loc->latitude && $loc->longitude)
          ? 'https://www.google.com/maps/search/?api=1&query='.$loc->latitude.','.$loc->longitude
          : 'https://www.google.com/maps/search/?api=1&query='.urlencode($addressLine);
      @endphp

      <div class="col-md-6 col-xl-4">
        <div class="office-card h-100 p-4 rounded-4 shadow-sm bg-white d-flex flex-column">
          <div class="d-flex justify-content-between align-items-start mb-2">
            <div>
              <h5 class="mb-0">{{ $loc->city ? e($loc->city) : e($loc->country) }}</h5>
              <div class="text-muted small">{{ $loc->city ? e($loc->country) : '' }}</div>
            </div>
            @if($loc->is_hq)
              <span class="badge bg-primary-subtle text-primary border border-primary-subtle">HQ</span>
            @endif
          </div>

          <div class="text-muted flex-grow-1">
            @if($addressLine)
              <div class="mb-2">
                <i class="fa-sharp fa-solid fa-location-dot me-2"></i>
                <span>{{ e($addressLine) }}</span>
              </div>
            @endif
            <div class="small">
              @if($loc->email)
                <div class="mb-1"><i class="fa-sharp fa-solid fa-envelope me-2"></i>
                  <a href="mailto:{{ e($loc->email) }}">{{ e($loc->email) }}</a>
                </div>
              @endif
              @if($loc->phone)
                <div><i class="fa-sharp fa-solid fa-phone me-2"></i>
                  <a href="tel:{{ e($loc->phone) }}">{{ e($loc->phone) }}</a>
                </div>
              @endif
            </div>
          </div>

          <div class="d-flex gap-2 mt-3">
            <a href="{{ $mapsUrl }}" target="_blank" rel="noopener" class="btn btn-sm btn-outline-primary">Get directions</a>
            @if($addressLine)
              <button type="button" class="btn btn-sm btn-outline-secondary copy-btn" data-copy="{{ e($addressLine) }}">Copy address</button>
            @endif
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="mt-4 d-flex justify-content-center">
    {{ $locations->onEachSide(1)->links() }}
  </div>
@endif
