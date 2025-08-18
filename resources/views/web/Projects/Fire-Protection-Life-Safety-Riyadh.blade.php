<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Projects') }}">Projects</a></li>
          <li>Fire Protection & Life Safety Management</li>
        </ul>
        <h1 class="title">Fire Protection & Life Safety Management</h1>
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
              <img src="{{ asset('build/images/projects/case11.jpg')}}" alt="Fire Protection and Life Safety Management – Riyadh, KSA">
            </div>

            <div class="blog-details__content">
              <!-- عنوان + تاغات الموقع -->
              <header class="project-header">
                <h2 class="project-title">
                   Integrated Fire Protection and Life Safety Solutions for Large Developments
                </h2>
                <div class="project-tags">
                  <span class="tag tag--city"><i class="fa-solid fa-location-dot"></i> Riyadh</span>

                  <span class="tag tag--country">Saudi Arabia</span>
                </div>
              </header>

              <p class="blog-details__text-2 lead-paragraph">
               This project involved comprehensive fire protection and life safety management during the construction of a major facility in Riyadh, Kingdom of Saudi Arabia. Given the critical operational periods including Ramadan and Hajj seasons, our team ensured full regulatory compliance and safety readiness at every stage of the construction lifecycle.
              </p>

              <h4 class="blog-details__subtitle mt-4">Supervision of Daily Construction Activities for Temporary Systems</h4>
              <p class="blog-details__text-2">
                We managed and supervised daily on-site activities concerning temporary fire protection and life safety systems. Our scope included the following:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Preparation of detailed staff, equipment, and documentation readiness reports to ensure compliance.</li>
                <li>Execution of Fire Risk Assessments, particularly during Ramadan and Hajj seasons.</li>
                <li>Development and implementation of safety KPIs and performance monitoring procedures.</li>
                <li>Formulation of Fire Protection Management Plans for both construction and high-traffic periods.</li>
                <li>Creation of Emergency and Evacuation Plans tailored to construction and partial operation phases.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">Design Review – Initial Stage</h4>
              <p class="blog-details__text-2">
                During the early design phase, we reviewed and validated submittals for all fire and life safety systems, including:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Fire Suppression System specifications and layout.</li>
                <li>Fire Alarm and Voice Communication system compliance and integration.</li>
                <li>Evacuation planning and egress analysis for safe occupant flow.</li>
                <li>Life Safety and Passive Fire Protection systems for fire containment.</li>
                <li>Smoke Control Systems for efficient hazard mitigation and visibility preservation.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">Design Review – Detailed Stage</h4>
              <p class="blog-details__text-2">
                At the detailed design phase, we conducted a comprehensive evaluation of submitted documents, including:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Fire Alarm & Notification system layout drawings.</li>
                <li>Firefighting and fire safety equipment distribution plans.</li>
                <li>Detailed life safety plans covering all building zones.</li>
                <li>Technical calculations confirming system capacity and coverage.</li>
                <li>Material submittals assessed against project specifications and code requirements.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">Construction Administration and On-Site Support</h4>
              <p class="blog-details__text-2">
                Our support extended through construction with an active presence to ensure that system installation and performance aligned with safety expectations:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Technical site support during fire system testing and inspections.</li>
                <li>Commissioning coordination to verify systems were fully functional.</li>
                <li>Oversight of Acceptance Tests and verification of engineering compliance.</li>
                <li>Management of Civil Defense (CD) approval processes to secure operational licenses.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">Outcome</h4>
              <p class="blog-details__text-2">
                Through continuous supervision, proactive risk management, and detailed technical reviews, the project successfully met stringent fire protection and life safety standards. The emergency response strategies and safety planning significantly enhanced the operational readiness and ensured a safe environment for both construction teams and eventual occupants.
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
