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
    <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="color: #fff; font-weight: bold;">Our Team</h6>
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
@push('styles')
<style>
/* جعل الأعمدة تتمدّد بالتساوي داخل الصف */
.team-section .row {
  display: flex;
  flex-wrap: wrap;
}
.team-section .col-md-6.col-xl-3 {
  display: flex;
}
.team-section .team-block,
.team-section .team-block .inner-box {
  display: flex;
  flex-direction: column;
  width: 100%;
}

/* تثبيت مساحة الصورة لمنع تغيّر الارتفاع */
.team-section .image {
  aspect-ratio: 4 / 5; /* عدّل النسبة إن لزم لتطابق تصميمك الحالي */
  overflow: hidden;
}
.team-section .image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* توحيد ارتفاع صندوق المحتوى عبر حساب يعتمد على عدد الأسطر */
:root {
  --title-font-size: 1.125rem;   /* نفس حجم .title الحالي */
  --title-line-height: 1.3;      /* إن كان لديك قيمة مختلفة استخدمها */
  --title-lines: 2;              /* أقصى أسطر للاسم */

  --sub-font-size: 0.95rem;      /* نفس حجم .sub-title الحالي (قرّبته) */
  --sub-line-height: 1.4;
  --sub-lines: 3;                /* أقصى أسطر للمسمى */

  --content-padding: 1.25rem;    /* مجموع الحشوات داخل content-box تقريبًا */
}

/* صندوق المحتوى يأخذ حدًا أدنى موحّدًا */
.team-section .content-box {
 display: flex;
  flex-direction: column;
  justify-content: flex-start; /* النصوص تبدأ من الأعلى */
  min-height: calc(
    (var(--title-lines) * var(--title-font-size) * var(--title-line-height)) +
    (var(--sub-lines)   * var(--sub-font-size)   * var(--sub-line-height)) +
    var(--content-padding)
  );
}

/* قصّ النص لعدد أسطر محدّد لمنع تمدّد البطاقة */
.team-section .content-box .title,
.team-section .content-box .sub-title {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.team-section .content-box .title {
  -webkit-line-clamp: var(--title-lines);
  line-height: var(--title-line-height);
  font-size: var(--title-font-size);
  margin-bottom: 0.35rem; /* عدّل حسب تصميمك */
}

.team-section .content-box .sub-title {
  -webkit-line-clamp: var(--sub-lines);
  line-height: var(--sub-line-height);
  font-size: var(--sub-font-size);
}
.team-section .content-box .title a {
  color: inherit; /* يحافظ على اللون الأساسي الحالي */
  text-decoration: none;
  transition: color 0.3s ease;
}

.team-section .team-block:hover .content-box .title a {
  color: #d62828;
}
</style>
@endpush


</x-app.app-layout>
