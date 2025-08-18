<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Projects') }}">Projects</a></li>
          <li>Fire Safety Design Review Jeddah</li>
        </ul>
        <h1 class="title">Fire Safety Design Review Jeddah</h1>
      </div>
    </div>
  </section>
  <!-- end main-content -->

  <section class="blog-details pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="blog-details__left">

            <!-- صورة الغلاف المحسّنة -->
            <div class="blog-details__img mb-4 project-cover">
              <img src="{{ asset('build/images/projects/case33.jpg')}}" alt="Fire and Life Safety System Design Review – Jeddah, KSA">
            </div>

            <div class="blog-details__content">
              <!-- عنوان + تاغات الموقع -->
              <header class="project-header">
                <h2 class="project-title">
                  Fire & Life Safety System Design Review for Major Development – Jeddah
                </h2>
                <div class="project-tags">
                  <span class="tag tag--city"><i class="fa-solid fa-location-dot"></i> Jeddah</span>

                  <span class="tag tag--country">Saudi Arabia</span>
                </div>
              </header>

              <p class="blog-details__text-2 lead-paragraph">
                This project focused on reviewing fire and life safety system designs during the early stages of a major construction development in Jeddah, KSA. Our goal was to ensure regulatory compliance and optimize the safety performance of all proposed systems for future occupants.
              </p>

              <h4 class="blog-details__subtitle mt-4">Design Stage Review of Fire & Life Safety Systems</h4>
              <p class="blog-details__text-2">
                Our fire protection experts carried out a detailed review of the initial design documents and technical plans, covering the following components:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li><strong>Fire Suppression Systems:</strong> Reviewed system coverage, selected technologies, and integration with building services to ensure effective fire control and extinguishment.</li>
                <li><strong>Fire Alarm & Voice Communication:</strong> Evaluated alarm layouts and specifications to confirm fast, clear, and reliable emergency notifications.</li>
                <li><strong>Evacuation Systems:</strong> Assessed egress paths, exits, and overall emergency strategy to ensure safe occupant movement in crisis scenarios.</li>
                <li><strong>Life Safety & Passive Barriers:</strong> Analyzed fire-rated walls, doors, and barriers designed to contain fire spread and safeguard critical infrastructure.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">Project Outcome</h4>
              <p class="blog-details__text-2">
                Our design review led to targeted recommendations that improved system effectiveness and regulatory alignment, enabling a smoother transition to the next design phase and reinforcing the project's commitment to occupant safety and code compliance.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
