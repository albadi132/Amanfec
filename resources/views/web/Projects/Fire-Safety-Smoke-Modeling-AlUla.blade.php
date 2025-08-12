<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Projects') }}">Projects</a></li>
          <li>Fire Safety Smoke Modeling AlUla</li>
        </ul>
        <h1 class="title">Fire Safety Smoke Modeling AlUla</h1>
      </div>
    </div>
  </section>
  <!-- end main-content -->

  <!--Blog Details Start-->
  <section class="blog-details pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="blog-details__left">

            <!-- صورة الغلاف المحسّنة -->
            <div class="blog-details__img mb-4 project-cover">
              <img src="{{ asset('build/images/projects/case55.jpg')}}" alt="Fire and Life Safety Design and CFD Modeling – AlUla, KSA">
            </div>

            <div class="blog-details__content">
              <!-- عنوان + تاغات الموقع -->
              <header class="project-header">
                <h2 class="project-title">
                  Integrated Fire & Life Safety Design Review, Construction Support & Smoke CFD — AlUla
                </h2>
                <div class="project-tags">
                  <span class="tag tag--city"><i class="fa-solid fa-location-dot"></i> AlUla</span>
                  <span class="tag tag--region">Al Madinah Region</span>
                  <span class="tag tag--country">Saudi Arabia</span>
                </div>
              </header>

              <p class="blog-details__text-2 lead-paragraph">
                This large-scale development in AlUla required a full-scope approach to fire protection, including design reviews, construction administration, and advanced modeling services. The objective was to deliver a compliant and high-performing fire and life safety system from planning through commissioning.
              </p>

              <h4 class="blog-details__subtitle mt-4">1. Fire & Life Safety System Design Review (Design Stage)</h4>
              <p class="blog-details__text-2">
                Our team performed a detailed assessment of the submitted designs, ensuring compliance with safety standards and functional integration:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li><strong>Fire Suppression Systems:</strong> Reviewed system design for adequate fire control coverage and integration.</li>
                <li><strong>Fire Alarm & Voice Systems:</strong> Assessed notification layouts for clarity, coverage, and emergency effectiveness.</li>
                <li><strong>Evacuation Systems:</strong> Evaluated exit strategies and travel paths to ensure safe occupant egress.</li>
                <li><strong>Life Safety & Passive Fire Barriers:</strong> Verified containment solutions and fire-resistant materials.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">2. Construction Administration</h4>
              <p class="blog-details__text-2">
                During construction, we provided critical oversight to support the successful implementation and testing of fire protection systems:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Coordinated on-site system testing and commissioning activities.</li>
                <li>Supervised acceptance testing to validate system readiness and functionality.</li>
                <li>Assisted with securing final engineer approvals and Civil Defense certifications.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">3. Smoke Control Design & CFD/Fire Modeling</h4>
              <p class="blog-details__text-2">
                We utilized advanced engineering tools to support the development of effective smoke management solutions:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Designed optimized smoke control systems tailored to the project architecture.</li>
                <li>Conducted CFD (Computational Fluid Dynamics) simulations to predict smoke behavior and inform system design.</li>
                <li>Applied fire modeling to validate performance-based strategies and ensure code compliance.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">Project Outcome</h4>
              <p class="blog-details__text-2">
                The combination of robust design reviews, expert construction support, and intelligent fire modeling contributed to the delivery of a fully compliant fire and life safety system. Our CFD analysis provided critical insights for smoke control optimization, enhancing occupant protection and accelerating regulatory approvals.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Details End-->
  @push('styles')
<style>
  /* صورة الغلاف: حواف ناعمة + ظل + نسبة ثابتة */
.project-cover{
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 14px 30px rgba(0,0,0,.08);
  background: #000;
  aspect-ratio: 16 / 9;
}
.project-cover img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transform: scale(1.01);
  transition: transform .5s ease;
}
.project-cover:hover img{
  transform: scale(1.05);
}

/* رأس المشروع: عنوان + تاغات الموقع */
.project-header{
  margin-bottom: 14px;
}
.project-title{
  margin: 0 0 10px;
  font-weight: 800;
  /* حجم مرن حسب الشاشة */
  font-size: clamp(1.35rem, 2.2vw, 2rem);
  line-height: 1.25;
  letter-spacing: .2px;
}

/* تاغات الموقع */
.project-tags{
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}
.tag{
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: .85rem;
  line-height: 1;
  padding: 7px 10px;
  border-radius: 999px;
  border: 1px solid rgba(214,40,40,.25);
  background: rgba(214,40,40,.08);
  color: #b01e1e;
  font-weight: 600;
}
.tag--city{
  background: rgba(214,40,40,.12);
  color: #d62828;
  border-color: rgba(214,40,40,.35);
}
.tag--region{
  background: rgba(214,40,40,.06);
}
.tag--country{
  background: rgba(214,40,40,.06);
}

/* فقرة افتتاحية أكبر قليلًا لسهولة القراءة */
.lead-paragraph{
  font-size: clamp(1rem, 1.2vw, 1.1rem);
  line-height: 1.85;
  color: #2a2a2a;
}

/* عناوين فرعية */
.blog-details__subtitle{
  font-size: clamp(1.05rem, 1.4vw, 1.25rem);
  font-weight: 700;
  margin-top: 24px !important;
  margin-bottom: 8px;
  letter-spacing: .2px;
}

/* قائمة بنقاط مُحسّنة (checklist) */
.checklist{
  padding-left: 0;
  list-style: none;
}
.checklist li{
  position: relative;
  padding-left: 28px;
  margin: 8px 0;
}
.checklist li::before{
  content: "\f00c"; /* check */
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  position: absolute;
  left: 0;
  top: 2px;
  font-size: .9rem;
  color: #1f9d55; /* أخضر موفق */
}

/* تحسين عام للنص */
.blog-details__text-2{
  color: #3a3a3a;
  line-height: 1.8;
}

/* تدرج خفيف أسفل صورة الغلاف لمزيد من العمق */
.project-cover{
  position: relative;
}
.project-cover::after{
  content: "";
  position: absolute;
  inset: auto 0 0 0;
  height: 28%;
  background: linear-gradient(to top, rgba(0,0,0,.28), transparent);
  pointer-events: none;
}

  </style>
  @endpush
</x-app.app-layout>
