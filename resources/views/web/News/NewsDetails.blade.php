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
  <img src="{{ asset('storage/' . $news->cover_image) }}" style=" width: auto ; height: 700px; border-radius: 10px;"
       alt="{{ $news->title }}">
</div>
            @endif

            <div class="blog-details__content">
              <h3 class="blog-details__title">{{ $news->title }}</h3>

              @if ($news->published_at)
                <p class="text-muted mb-3">
                  <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($news->published_at)->format('F j, Y') }}
                </p>
              @endif

               <div id="job-desc-shadow" data-html='@json($news->content)'></div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </section>

 @push('style')

<style>
  .services-details__content.job-desc,
  .services-details__content.job-desc * {
    all: revert;
  }

  .services-details__content.job-desc img { max-width:100%; height:auto; }
  .services-details__content.job-desc a { color:#0d6efd; text-decoration:underline; }
</style>
@endpush
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
  const host = document.getElementById('job-desc-shadow');
  // فك ترميز JSON (سيحوّل \u003C إلى < فعلي)
  const html = JSON.parse(host.getAttribute('data-html') || '""');

  const root = host.attachShadow({ mode: 'open' });
  root.innerHTML = `
    <style>
      :host { all: initial; font-family: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial; color:#222; line-height:1.6; }
      h1,h2,h3{ margin:.6em 0 .3em; line-height:1.25; }
      p{ margin:.5em 0; }
      ul,ol{ padding-left:1.25rem; margin:.5em 0; }
      blockquote{ border-inline-start:4px solid #e5e7eb; margin:1em 0; padding:.5em 1em; color:#555; background:#fafafa; }
      img{ max-width:100%; height:auto; }
      pre,code{ font-family: ui-monospace,SFMono-Regular,Menlo,Consolas,"Liberation Mono",monospace; }
      table{ border-collapse:collapse; width:100%; margin:1em 0; }
      th,td{ border:1px solid #e5e7eb; padding:.5em .6em; vertical-align:top; }
      a{ color:#0d6efd; text-decoration:underline; }
    </style>
    <div class="content"></div>
  `;
  root.querySelector('.content').innerHTML = html;

  // حماية روابط داخل الوصف
  root.querySelectorAll('a[href]').forEach(a => {
    a.setAttribute('target','_blank');
    a.setAttribute('rel','noopener noreferrer');
  });
});
</script>

@endpush

</x-app.app-layout>
