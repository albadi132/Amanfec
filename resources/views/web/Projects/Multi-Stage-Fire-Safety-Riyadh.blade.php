<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Projects') }}">Projects</a></li>
          <li>Multi Stage Fire Safety Riyadh</li>
        </ul>
        <h1 class="title">Multi Stage Fire Safety Riyadh</h1>
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
              <img src="{{ asset('build/images/projects/case44.jpg')}}" alt="Multi-Stage Fire and Life Safety Review – Riyadh, KSA">
            </div>

            <div class="blog-details__content">
              <!-- العنوان + التاغات -->
              <header class="project-header">
                <h2 class="project-title">
                  Multi-Stage Fire & Life Safety System Design Review — Riyadh
                </h2>
                <div class="project-tags">
                  <span class="tag tag--city"><i class="fa-solid fa-location-dot"></i> Riyadh</span>

                  <span class="tag tag--country">Saudi Arabia</span>
                </div>
              </header>

              <p class="blog-details__text-2 lead-paragraph">
                This large-scale development project involved a phased and thorough review of fire and life safety system designs across the Concept, Schematic, and Detailed Design stages. The aim was to ensure full compliance with local and international fire safety standards while optimizing system performance and ensuring occupant protection throughout.
              </p>

              <h4 class="blog-details__subtitle mt-4">1. Concept Design Stage Review</h4>
              <p class="blog-details__text-2">
                At this early stage, we evaluated preliminary design proposals, focusing on:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li><strong>Fire Suppression Systems:</strong> Reviewed concept-level strategies for system adequacy and integration.</li>
                <li><strong>Fire Alarm & Voice Communication:</strong> Assessed the feasibility of early alarm and communication plans.</li>
                <li><strong>Evacuation Systems:</strong> Evaluated proposed egress routes and evacuation scenarios for effectiveness.</li>
                <li><strong>Life Safety & Passive Fire Barriers:</strong> Inspected initial passive protection plans to contain fire spread.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">2. Schematic Design Stage Review</h4>
              <p class="blog-details__text-2">
                As the design progressed, we refined our analysis to ensure improved alignment with project needs and code requirements:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Verified the enhancement and alignment of fire suppression and alarm system designs.</li>
                <li>Confirmed evacuation plans incorporated realistic occupant safety strategies.</li>
                <li>Reviewed compartmentalization and placement of passive fire barriers.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">3. Detailed Design Stage Review</h4>
              <p class="blog-details__text-2">
                In the final design phase, a comprehensive technical review was conducted, including:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li><strong>Fire Alarm & Notification Layouts:</strong> Assessed device locations, distribution, and system coverage.</li>
                <li><strong>Fire Fighting & Safety Equipment Drawings:</strong> Validated the accuracy and compliance of equipment positioning.</li>
                <li><strong>Life Safety Drawings:</strong> Ensured complete documentation and integration of life safety measures.</li>
                <li><strong>Associated Calculations:</strong> Evaluated hydraulic, alarm, and performance data for compliance and accuracy.</li>
                <li><strong>Materials Submittals:</strong> Checked all selected materials for compliance with regulatory codes and specifications.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">Project Outcome</h4>
              <p class="blog-details__text-2">
                This multi-phase approach allowed us to proactively detect and resolve design issues, streamline coordination with stakeholders, and ensure full code compliance. The project proceeded smoothly through approval stages and was delivered with a high standard of safety, readiness, and regulatory alignment.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Details End-->
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
