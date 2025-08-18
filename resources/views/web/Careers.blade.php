<x-app.app-layout>
  {{-- Hero --}}
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

  {{-- Intro Section --}}
  <section class="services-details pt-120 pb-60">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="sec-title mb-3">
            <h6 class="sub-title" style="color: #fff; font-weight: bold;">Join Our Team</h6>
            <h2 class="title">Shape the future of fire and life safety.<br class="d-none d-lg-block">Explore open roles.</h2>
            <p class="mt-3 text-muted">Find roles that match your experience, location, and work style.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="services-details__content position-relative rounded-3 overflow-hidden shadow-sm">
            <img class="w-100" src="{{ asset('build/images/resource/person-working-building-construction_23-2149184977.jpg') }}" alt="Careers">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Filters --}}
  <section class="pb-20">
    <div class="container">
      <form method="GET" class="filter-bar p-3 p-md-4 rounded-3 shadow-sm bg-white mb-4">
        <div class="row g-3">
          <div class="col-md-4">
            <input type="text" name="q" class="form-control" placeholder="Search by title…" value="{{ request('q') }}">
          </div>
          <div class="col-md-2">
            <select name="dept" class="form-select">
              <option value="">All Departments</option>
              @foreach($departments as $d)
                <option value="{{ $d->id }}" @selected(request('dept')==$d->id)>{{ $d->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-2">
            <select name="loc" class="form-select">
              <option value="">All Locations</option>
              @foreach($locations as $l)
                @php $label = trim(($l->city ? $l->city.', ' : '').$l->country); @endphp
                <option value="{{ $l->id }}" @selected(request('loc')==$l->id)>{{ $label }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-2">
            <select name="category" class="form-select">
              <option value="">All Categories</option>
              @foreach($categories as $key => $label)
                <option value="{{ $key }}" @selected(request('category')==$key)>{{ $label }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-2">
            <select name="work" class="form-select">
              <option value="">Any Work Style</option>
              @foreach($workOptions as $key => $label)
                <option value="{{ $key }}" @selected(request('work')==$key)>{{ $label }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 d-flex gap-2">
            <button class="btn btn-primary px-4">Filter</button>
            <a href="{{ route('Careers') }}" class="btn btn-outline-secondary">Clear</a>
          </div>
        </div>
      </form>
    </div>
  </section>

  {{-- Jobs List --}}
  <section class="pb-120">
  <div class="container">
    <div id="jobs-container">
      @include('web.partials.jobs_grid', ['jobs' => $jobs])
    </div>
  </div>
</section>


  @push('scripts')
<script>
(() => {
  const form = document.querySelector('.filter-bar');
  const container = document.getElementById('jobs-container');

  function setLoading(on) {
    container.classList.toggle('loading', !!on);
  }

  function scrollToResults() {
    const top = container.getBoundingClientRect().top + window.pageYOffset - 80; // تعويض الهيدر
    window.scrollTo({ top, behavior: 'smooth' });
  }

  async function fetchJobs(url) {
    try {
      setLoading(true);
      const res = await fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' }});
      const data = await res.json();
      container.innerHTML = data.html || '';

    } catch (e) {
      console.error(e);
    } finally {
      setLoading(false);
    }
  }

  // إرسال الفلاتر بدون Reload
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const params = new URLSearchParams(new FormData(form));
      params.set('page', 1); // ابدأ من الصفحة الأولى مع أي فلتر جديد
      const url = `${window.location.pathname}?${params.toString()}`;
      window.history.pushState({}, '', url);
      fetchJobs(url);
    });
  }

  // صفحات الـpagination داخل النتائج
  document.addEventListener('click', (e) => {
    const link = e.target.closest('#jobs-container .pagination a');
    if (!link) return;
    e.preventDefault();
    const url = link.getAttribute('href');
    window.history.pushState({}, '', url);
    fetchJobs(url);
  });

  // دعم الرجوع/التقدم في المتصفح
  window.addEventListener('popstate', () => {
    fetchJobs(window.location.href);
  });
})();
</script>

<style>
  #jobs-container.loading { opacity: .5; pointer-events: none; }
  .chip {
    display:inline-block; font-size:.8rem; padding:.35rem .6rem;
    background:#f3f5f7; border-radius:999px;
  }
  .chip-outline { background:transparent; border:1px solid #e3e6ea; color:#6c757d; }
  .job-card { transition: transform .15s ease, box-shadow .15s ease; }
  .job-card:hover { transform: translateY(-2px); box-shadow: 0 10px 24px rgba(0,0,0,.08); }
  /* شارات ألوان خفيفة */
  .bg-success-subtle{background:#e9f7ef}.bg-warning-subtle{background:#fff7e6}.bg-danger-subtle{background:#fdecea}
  .text-success{color:#198754}.text-warning{color:#b58100}.text-danger{color:#dc3545}
  .border-success-subtle{border-color:#cfe9da}.border-warning-subtle{border-color:#ffe0a3}.border-danger-subtle{border-color:#f5b5b0}
</style>
@endpush
</x-app.app-layout>
