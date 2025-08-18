<x-app.app-layout>
  {{-- ===================== Hero ===================== --}}
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Find an office</li>
        </ul>
        <h1 class="title">Find an office</h1>
      </div>
    </div>
  </section>

  {{-- ===================== Map + Filter ===================== --}}
  <section class="pt-100 pb-40">
    <div class="container">
      <div class="row g-4 align-items-start">
        {{-- Map --}}
        <div class="col-lg-7">
          <div class="map-card shadow-sm rounded-4 overflow-hidden bg-white">
            <img class="w-100 d-block" src="{{ asset('build/images/contact/offices-map.png') }}" alt="Offices Map">
          </div>

        </div>

        {{-- Filter --}}
        <div class="col-lg-5">
          <form id="office-filter" method="GET" class="filter-card p-3 p-md-4 rounded-4 shadow-sm bg-white">
            <div class="filter-fields">
              <div class="mb-3">
                <label class="form-label">Search</label>
                <input type="text" name="q" value="{{ $q }}" class="form-control" placeholder="City, building, street…">
              </div>
              <div class="mb-0">
                <label class="form-label">Country</label>
                <select name="country" class="form-select">
                  <option value="">All countries</option>
                  @foreach($countries as $c)
                    <option value="{{ $c }}" @selected($country === $c)>{{ $c }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            {{-- Actions ALWAYS at the bottom --}}
            <div class="filter-actions mt-3 pt-3">
              <div class="row g-2">
                <div class="col-12 col-md-auto">
                  <button class="btn btn-primary w-100 px-4" type="submit">Filter</button>
                </div>
                <div class="col-12 col-md-auto">
                  <button class="btn btn-outline-secondary w-100 px-4" type="button" id="clear-filter">Reset</button>
                </div>
              </div>
            </div>
          </form>

          {{-- Summary --}}
          <div class="mt-3 text-muted small" id="results-summary">
            Showing <strong id="total-count">{{ $locations->total() }}</strong> office(s)
            <span id="summary-country">
              @if($country) in <strong>{{ $country }}</strong>@endif
            </span>
            <span id="summary-q">
              @if($q) matching “<strong>{{ e($q) }}</strong>”@endif
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ===================== Offices List ===================== --}}
  <section class="pb-120">
    <div class="container">
      <div id="offices-container">
        {{-- نفس محتوى partial: web.offices.partials.grid --}}
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
                  : 'https://www.google.com/maps/search/?api=1&query='.urlencode($loc->building);
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
      </div>
    </div>
  </section>

  {{-- ===================== Scripts ===================== --}}
  @push('scripts')
  <script>
  (() => {
    const form = document.getElementById('office-filter');
    const container = document.getElementById('offices-container');
    const totalEl = document.getElementById('total-count');
    const summaryCountry = document.getElementById('summary-country');
    const summaryQ = document.getElementById('summary-q');
    const clearBtn = document.getElementById('clear-filter');

    function setLoading(on){ container.classList.toggle('opacity-50', !!on); }

    function setSummaryFromUrl(url){
      const u = new URL(url, location.origin);
      const q = u.searchParams.get('q') || '';
      const country = u.searchParams.get('country') || '';

      // country
      summaryCountry.innerHTML = country ? ` in <strong>${country.replace(/</g,'&lt;')}</strong>` : '';
      // q
      summaryQ.innerHTML = q ? ` matching “<strong>${q.replace(/</g,'&lt;')}</strong>”` : '';
    }

    async function fetchOffices(url){
      try{
        setLoading(true);
        const res = await fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' }});
        const data = await res.json();
        container.innerHTML = data.html || '';
        if (typeof data.total !== 'undefined' && totalEl) totalEl.textContent = data.total;
        setSummaryFromUrl(url);

      }catch(e){ console.error(e); }
      finally{ setLoading(false); }
    }

    // submit without refresh
    form?.addEventListener('submit', (e) => {
      e.preventDefault();
      const params = new URLSearchParams(new FormData(form));
      params.set('page', 1);
      const url = `${window.location.pathname}?${params.toString()}`;
      history.pushState({}, '', url);
      fetchOffices(url);
    });

    // pagination
    document.addEventListener('click', (e) => {
      const link = e.target.closest('#offices-container .pagination a');
      if(!link) return;
      e.preventDefault();
      const url = link.getAttribute('href');
      history.pushState({}, '', url);
      fetchOffices(url);
    });

    // back/forward
    window.addEventListener('popstate', () => fetchOffices(location.href));

    // clear (no refresh)
    clearBtn?.addEventListener('click', () => {
      form.reset();
      const url = window.location.pathname;
      history.pushState({}, '', url);
      fetchOffices(url);
    });

    // copy address
    document.addEventListener('click', (e) => {
      const btn = e.target.closest('.copy-btn');
      if(!btn) return;
      const text = btn.getAttribute('data-copy') || '';
      navigator.clipboard.writeText(text).then(() => {
        const old = btn.textContent;
        btn.textContent = 'Copied';
        setTimeout(() => btn.textContent = old, 1200);
      });
    });
  })();
  </script>
  @endpush

  {{-- ===================== Styles ===================== --}}
  <style>
    .map-card { border:1px solid #eef1f5; }
    .filter-card { position: sticky; top: 90px; display:flex; flex-direction:column; border:1px solid #eef1f5; }
    .filter-actions { border-top: 1px dashed #e8eaee; }
    .office-card { transition: transform .15s ease, box-shadow .15s ease; border:1px solid #eef1f5; }
    .office-card:hover { transform: translateY(-2px); box-shadow: 0 10px 24px rgba(0,0,0,.08); }
    .bg-primary-subtle{background:#e6efff}.text-primary{color:#0d6efd}.border-primary-subtle{border-color:#cfe2ff}
  </style>
</x-app.app-layout>
