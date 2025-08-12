<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Projects') }}">Projects</a></li>
          <li>Fire Life Safety Management Makkah</li>
        </ul>
        <h1 class="title">Fire Life Safety Management Makkah</h1>
      </div>
    </div>
  </section>
  <!-- end main-content -->

  <section class="blog-details pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="blog-details__left">
            <!-- صورة المشروع مع تحسينات بصرية -->
            <div class="blog-details__img mb-4 project-cover">
              <img src="{{ asset('build/images/projects/case66.jpg') }}" alt="Fire and Life Safety Design – Makkah, KSA">
            </div>

            <div class="blog-details__content">
              <!-- عنوان منسق + تاغات الموقع -->
              <header class="project-header">
                <h2 class="project-title">
                  Comprehensive Fire & Life Safety System Design & Construction Management
                </h2>

                <div class="project-tags">
                  <span class="tag tag--city"><i class="fa-solid fa-location-dot"></i> Makkah</span>
                  <span class="tag tag--region">Makkah Province</span>
                  <span class="tag tag--country">Saudi Arabia</span>
                </div>
              </header>

              <p class="blog-details__text-2 lead-paragraph">
                This large-scale development project in Makkah required full-scope fire and life safety (FLS) management, from preliminary design through detailed planning and into construction administration. The objective was to implement an integrated and fully compliant FLS system that aligned with stringent safety codes and operational excellence.
              </p>

              <h4 class="blog-details__subtitle mt-4">1. Preliminary Design (PD) Stage – FLS System</h4>
              <p class="blog-details__text-2">
                At the preliminary stage, foundational elements of the fire safety infrastructure were defined and evaluated, including:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li><strong>Suppression & Sprinkler Systems:</strong> Developed initial strategies for active fire control.</li>
                <li><strong>Standpipe Systems, Fire Mains, Hydrants & Pumps:</strong> Defined key firefighting infrastructure layouts.</li>
                <li><strong>Detection & Notification Systems:</strong> Planned fire alarm control panels, notification appliances & operational sequences.</li>
                <li><strong>Smoke Detector & MCP Placement:</strong> Strategically distributed for early hazard detection.</li>
                <li><strong>Fire & Smoke Barriers:</strong> Defined fire rating requirements based on occupancy and functional use.</li>
                <li><strong>Egress & Occupant Safety:</strong> Assessed occupant loads, exit capacity, emergency lighting & access routes.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">2. Detailed Design Stage – FLS System</h4>
              <p class="blog-details__text-2">
                This phase focused on refining system components to ensure complete compliance and technical integrity:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Finalized suppression and sprinkler system specifications and layouts.</li>
                <li>Produced detailed drawings for standpipes, hydrants, and pump systems.</li>
                <li>Engineered functional detection & alarm systems, including control panels and notification logic.</li>
                <li>Verified detector placement for optimized coverage and response time.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">3. Construction Administration Stage – FLS System</h4>
              <p class="blog-details__text-2">
                During construction, we ensured quality execution and code adherence through:
              </p>
              <ul class="blog-details__text-2 checklist">
                <li>Reviewing shop and IFC drawings for fire protection and detection systems.</li>
                <li>Verifying that contractor submittals covered all FLS components accurately.</li>
                <li>Inspecting material submittals for compliance with technical specifications.</li>
                <li>Witnessing installation, testing, and commissioning processes on-site.</li>
                <li>Compiling final documentation and coordinating with Civil Defense for occupancy approval.</li>
              </ul>

              <h4 class="blog-details__subtitle mt-4">Project Outcome</h4>
              <p class="blog-details__text-2">
                The comprehensive approach across all stages of the project ensured delivery of a robust and compliant fire and life safety system. The detailed planning and oversight resulted in successful Civil Defense approval, safe conditions for occupancy, and seamless handover to stakeholders.
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
