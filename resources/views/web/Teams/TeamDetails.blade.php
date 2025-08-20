<x-app.app-layout>

  <!-- صفحة العنوان -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('Team') }}">Team</a></li>
          <li>{{ $member->name }}</li>
        </ul>
        <h1 class="title">{{ $member->name }}</h1>
      </div>
    </div>
  </section>

  <!-- قسم التفاصيل -->
  <section class="about-section-two paralax__animation pt-120 pb-120">
    <div class="container">
      <div class="row g-5 g-xl-4 align-items-center">

        <!-- صورة العضو -->
        <div class="col-xl-5 image-column">
          <div class="inner-column text-center">
            <figure class="image">
              <img data-tilt data-tilt-max="3"
                src="{{ $member->photo ? asset('storage/' . $member->photo) : asset('build/images/default-avatar.jpg') }}"
                alt="{{ $member->name }}"
               >
            </figure>
          </div>
        </div>

        <!-- المحتوى -->
        <div class="col-xl-7 content-column">
          <div class="inner-column">
            <div class="content-box">

              <!-- العناوين -->
              <div class="sec-title mb-4">
                <h6 class="sub-title" style="color: #fff; font-weight: bold;" >Team Member</h6>
                <h2 class="title">{{ $member->name }}</h2>
                @if($member->title)
                  <p >{{ $member->title }}</p>
                @endif
                @if($member->department)
                 <!-- <p class="text text-secondary fw-semibold"> {{ $member->department->name }}</p> -->
                @endif
              </div>

              <!-- السيرة الذاتية -->
              @if($member->bio)
              <div class="about-block-two mt-4 w-100">
                <p class="text" style="line-height: 1.9;">
                  {!! nl2br(e($member->bio)) !!}
                </p>
              </div>
              @endif

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</x-app.app-layout>
