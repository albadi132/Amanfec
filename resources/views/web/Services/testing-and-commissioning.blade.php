<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Services') }}">Services</a></li>
          <li>Testing & Commissioning</li>
        </ul>
        <h1 class="title">Testing & Commissioning</h1>
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
            <div class="blog-details__img">
              <img src="{{ asset('build/images/Services/testing-and-commissioning.png')}}" alt="Testing & Commissioning">
            </div>
            <div class="blog-details__content">

              <h3 class="blog-details__title">Ensuring Performance Through Rigorous Testing</h3>

              <p class="blog-details__text-2">
                Aman Fire Engineering Consultancy provides comprehensive Testing & Commissioning services to validate the functionality and reliability of fire protection and life safety systems. Our team ensures that all systems are installed, tested, and documented in accordance with code requirements, manufacturer specifications, and project objectives.
              </p>

              <p class="blog-details__text-2">
                <strong>System Testing and Acceptance:</strong> We conduct functional testing for fire alarm, suppression, and smoke control systems to verify their readiness for operation. Our approach ensures all components perform as intended under simulated emergency conditions.
              </p>

              <p class="blog-details__text-2">
                <strong>Witnessing and Verification:</strong> We coordinate with stakeholders and authorities to witness testing procedures and verify system compliance. This step is critical to obtaining final approvals and occupancy permits.
              </p>

              <p class="blog-details__text-2">
                <strong>Special Inspections (Fireproofing, Smoke Control):</strong> Our certified specialists perform detailed inspections for passive fire protection measures such as spray-applied fireproofing, smoke barriers, dampers, and pressurization systems.
              </p>

              <p class="blog-details__text-2">
                <strong>Final Commissioning Documentation:</strong> We prepare comprehensive documentation packages including test reports, certifications, system manuals, and as-built data to support project handover and long-term facility management.
              </p>

              <p class="blog-details__text-2">
                With a focus on safety, accuracy, and compliance, Aman FEC ensures that every system is properly tested and fully commissioned — giving clients confidence in their life safety infrastructure from day one.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Details End-->

</x-app.app-layout>
