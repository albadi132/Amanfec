<x-app.app-layout>
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg') }});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Team</li>
        </ul>
        <h1 class="title">Our Team</h1>
      </div>
    </div>
  </section>

  <section class="team-section pt-120 pb-120">
    <div class="outer-box">
  <div class="sec-title center mb-50">
    <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Our Team</h6>
    <h2 class="title wow splt-txt" data-splitting>
      Meet the Experts Behind Our Success<br>
      Passionate Professionals, Committed to Excellence
    </h2>
  </div>
</div>

    <div class="team-shape wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
      <img class="sway__animation" src="{{ asset('build/images/shape/team-shape.png')}}" alt="Team Shape">
    </div>
    <div class="container">
      <div class="row g-4">
        @foreach ($teamMembers as $member)
          <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="{{ $loop->index * 200 }}ms" data-wow-duration="1500ms">
            <div class="team-block">
              <div class="inner-box">
                <figure class="image">
                  <img src="{{ $member->photo ? asset('storage/' . $member->photo) : asset('build/images/default-avatar.jpg') }}" alt="{{ $member->name }}">
                </figure>
                <div class="content-box">
                  <h4 class="title">
                    <a href="{{ route('team.details', $member->id) }}">{{ $member->name }}</a>
                  </h4>
                  <p class="sub-title">{{ $member->title }}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</x-app.app-layout>
