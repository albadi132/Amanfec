<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Projects') }}">Projects</a></li>
          <li>Life Safety System Review Riyadh</li>
        </ul>
        <h1 class="title">Life Safety System Review Riyadh</h1>
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

            <!-- صورة الغلاف -->
            <div class="blog-details__img mb-4 project-cover">
              <img src="{{ asset('build/images/projects/case22.jpg')}}" alt="Comprehensive Fire and Life Safety System Review – Riyadh, KSA">
            </div>

            <div class="blog-details__content">
              <!-- العنوان + التاغات -->
              <header class="project-header">
                <h2 class="project-title">
                  Comprehensive Fire & Life Safety System Review & Construction Administration – Riyadh
                </h2>
                <div class="project-tags">
                  <span class="tag tag--city"><i class="fa-solid fa-location-dot"></i> Riyadh</span>

                  <span class="tag tag--country">Saudi Arabia</span>
                </div>
              </header>

              <!-- الفقرة الافتتاحية -->
              <p class="blog-details__text-2 lead-paragraph">
                This project involved a full-scale fire and life safety system review and construction administration for a large-scale development in Riyadh, KSA. Our team ensured that all designs, installations, and commissioning activities complied with regulatory codes and project-specific safety requirements.
              </p>

              <!-- المرحلة الأولى -->
              <h4 class="blog-details__subtitle mt-4">Fire & Life Safety System Design Review (Design Stage)</h4>
              <p class="blog-details__text-2">
                During the initial design stage, we provided comprehensive reviews for the following system components:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li><strong>Fire Suppression Systems:</strong> Assessed system type, design coverage, and compatibility with overall protection strategies.</li>
                <li><strong>Fire Alarm & Voice Communication:</strong> Evaluated alert mechanisms and layout for timely and effective communication.</li>
                <li><strong>Evacuation Systems:</strong> Reviewed egress paths and layouts to ensure safe and efficient evacuation for occupants.</li>
                <li><strong>Life Safety & Passive Fire Barriers:</strong> Verified materials and configurations to contain fire and protect critical areas.</li>
                <li><strong>Smoke Control Systems:</strong> Checked ventilation design for effective smoke removal during emergencies.</li>
              </ul>

              <!-- المرحلة الثانية -->
              <h4 class="blog-details__subtitle mt-4">Fire & Life Safety System Review (Detailed Design Stage)</h4>
              <p class="blog-details__text-2">
                In the detailed design phase, we examined all technical documentation and final layouts, including:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Detailed layouts for fire alarm and notification systems.</li>
                <li>Firefighting and safety equipment placement drawings.</li>
                <li>Life safety design drawings reflecting full compliance with codes.</li>
                <li>Hydraulic and system performance calculations.</li>
                <li>Material submittals assessed for adherence to standards and specifications.</li>
              </ul>

              <!-- المرحلة الثالثة -->
              <h4 class="blog-details__subtitle mt-4">Construction Administration</h4>
              <p class="blog-details__text-2">
                Throughout the construction stage, we provided on-site technical support to oversee system installation and ensure regulatory compliance:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Provided assistance during testing and commissioning to resolve issues in real time.</li>
                <li>Managed acceptance testing procedures to validate full system readiness.</li>
                <li>Handled documentation and inspections for final engineer’s and Civil Defense approvals.</li>
              </ul>

              <!-- النتيجة -->
              <h4 class="blog-details__subtitle mt-4">Project Outcome</h4>
              <p class="blog-details__text-2">
                The project achieved full regulatory compliance and met all performance expectations. Our reviews and support ensured the successful implementation of robust, reliable fire and life safety systems, resulting in enhanced occupant safety and seamless handover approvals.
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
