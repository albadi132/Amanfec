<x-app.app-layout>

  <!-- العنوان -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>News</li>
        </ul>
        <h1 class="title">Latest News</h1>
      </div>
    </div>
  </section>

  <!-- الأخبار -->
  <section class="team-section pt-120 pb-120">
    <div class="team-shape wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
      <img class="sway__animation" src="{{ asset('build/images/shape/team-shape.png') }}" alt="Shape">
    </div>

    <div class="container">
      <div class="row g-4">
        @forelse ($news as $item)
<div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
        <article class="blog-block-two">
          <div class="image-box">
            <figure class="image">
              <img src="{{ asset('storage/' . $item->cover_image) }}" alt="{{ $item->title }}">
            </figure>
          </div>

          <div class="content-box">
            <h4 class="title">
              <a class="stretched-link" href="{{ route('news.details', $item->slug) }}">{{ $item->title }}</a>
            </h4>
            <a class="btn-one-rounded" href="{{ route('news.details', $item->slug) }}">
              Read More <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </article>
      </div>
        @empty
          <div class="col-12 text-center">
            <p>No news articles found.</p>
          </div>
        @endforelse
      </div>

      <!-- Pagination -->
<div class="mt-5">
  <nav aria-label="News pagination" class="d-flex justify-content-center">
    <ul class="pagination pagination-lg">

      {{ $news->onEachSide(1)->links('pagination::bootstrap-5') }}
    </ul>
  </nav>
</div>


    </div>
  </section>

  @push('styles')
<style>
  .custom-section {
    background-color: #f8f9fa;
    padding: 40px 20px;
    border-radius: 8px;
  }

  .pagination .page-link {
    border-radius: 8px;
    color: #163839;
    transition: all 0.3s ease-in-out;
  }

  .pagination .active .page-link,
  .pagination .page-link:hover {
    background-color: #163839;
    color: white;
    border-color: #163839;
  }
</style>
@endpush

@push('styles')
<style>
/* ====== البطاقة الطولية بالصورة ====== */
.blog-block-two{
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  background: #000;
  /* نسبة طولية ثابتة 3:4 */
  aspect-ratio: 3 / 4;
  /* Fallback للمتصفحات القديمة: يحاكي النسبة */
  height: 0;
  padding-top: calc(100% * (4 / 3)); /* 4/3 = (الارتفاع/العرض) */
}
@supports (aspect-ratio: 3 / 4){
  .blog-block-two{
    height: auto;
    padding-top: 0;
  }
}

/* ظل وحدود خفيفة */
.blog-block-two{
  border: 1px solid rgba(255,255,255,0.08);
  box-shadow: 0 8px 22px rgba(0,0,0,0.08);
  transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
}
.blog-block-two:hover{
  transform: translateY(-4px);
  border-color: rgba(214,40,40,0.45);
  box-shadow: 0 12px 28px rgba(0,0,0,0.12);
}

/* الصورة تملأ الكرت بالكامل */
.blog-block-two .image-box,
.blog-block-two .image-box .image,
.blog-block-two .image-box img{
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
}
.blog-block-two .image-box img{
  object-fit: cover;     /* يملأ مع القص */
  object-position: center;
  display: block;
  transform: scale(1.01);
  transition: transform .45s ease;
}
.blog-block-two:hover .image-box img{
  transform: scale(1.06); /* تكبير بسيط عند المرور */
}

/* تدرّج أسفل لتوضيح النص */
.blog-block-two .content-box{
  position: absolute;
  inset: auto 0 0 0;
  padding: 16px 16px 14px;
  background: linear-gradient(to top, rgba(0,0,0,0.72), rgba(0,0,0,0.45), transparent 70%);
  color: #fff;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

/* العنوان: احجز 3 أسطر دائمًا */
.blog-block-two .content-box .title{
  --lines: 3;
  line-height: 1.35;
  margin: 0;
  font-size: 1.05rem;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: var(--lines);
  overflow: hidden;
  text-overflow: ellipsis;
  min-height: calc(1.35em * var(--lines)); /* يحجز ارتفاع 3 أسطر */
}
.blog-block-two .content-box .title a{
  color: #fff;
  text-decoration: none;
}

/* الزر */
.blog-block-two .content-box .btn-one-rounded{
  align-self: flex-start;
  margin-top: 6px;
  background: #d62828;
  color: #fff;
  padding: 8px 14px;
  border-radius: 22px;
  font-size: 14px;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: background .3s ease, transform .2s ease;
}
.blog-block-two .content-box .btn-one-rounded:hover{
  background: #b81f1f;
  transform: translateY(-1px);
}

/* اجعل <figure> بلا مسافات افتراضية */
.blog-block-two .image-box figure{
  margin: 0;
}

/* لجعل الكرت بأكمله قابل للنقر عبر .stretched-link (Bootstrap-like سلوك إن أردت) */
.blog-block-two .stretched-link::after{
  content: "";
  position: absolute;
  inset: 0;
}
/* العنوان مع خلفية حمراء شفافة وحدود ناعمة */
.blog-block-two .content-box .title {
  --lines: 3;
  line-height: 1.4;
  margin: 0;
  font-size: 1.3rem; /* تكبير الخط */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: var(--lines);
  overflow: hidden;
  text-overflow: ellipsis;
  min-height: calc(1.4em * var(--lines));
}

/* الزر بنفس النمط */
.blog-block-two .content-box .btn-one-rounded {
  align-self: flex-start;
  margin-top: 6px;
  color: #fff;
  padding: 8px 14px;
  border-radius: 22px;
  font-size: 15px; /* تكبير الخط */
  font-weight: 500;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: background .3s ease, transform .2s ease;
}
.blog-block-two .content-box .btn-one-rounded:hover {
  background: rgba(184, 31, 31, 0.85); /* أغمق عند المرور */
  transform: translateY(-1px);
}
/* الصندوق السفلي مع تدرج غامق */
.blog-block-two .content-box {
  position: absolute;
  inset: auto 0 0 0;
  padding: 16px 16px 14px;
  background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.85) 0%,   /* أسفل غامق جدًا */
    rgba(0, 0, 0, 0.6) 40%,   /* تدرج متوسط */
    rgba(0, 0, 0, 0.3) 70%,   /* شبه شفاف */
    transparent 100%          /* شفاف تمامًا */
  );
  color: #fff;
  display: flex;
  flex-direction: column;
  gap: 10px;
}
</style>
@endpush
</x-app.app-layout>
