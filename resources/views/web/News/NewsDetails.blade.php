<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('News') }}">News</a></li>
          <li>{{ $news->title }}</li>
        </ul>
        <h1 class="title">{{ $news->title }}</h1>
      </div>
    </div>
  </section>
  <!-- end main-content -->

  <section class="blog-details pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="blog-details__left">
            @if ($news->cover_image)
            <div class="blog-details__img mb-4 text-center">
  <img src="{{ asset('storage/' . $news->cover_image) }}"
       alt="{{ $news->title }}"
       style="max-width: 100%; width: 1000px; height: auto; border-radius: 10px;">
</div>
            @endif

            <div class="blog-details__content">
              <h3 class="blog-details__title">{{ $news->title }}</h3>

              @if ($news->published_at)
                <p class="text-muted mb-3">
                  <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($news->published_at)->format('F j, Y') }}
                </p>
              @endif

              <div class="blog-details__text-2">
                {!! $news->content !!}
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

</x-app.app-layout>
