<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Services') }}">Services</a></li>
          <li>Surveys & Risk Assessments</li>
        </ul>
        <h1 class="title">Surveys & Risk Assessments</h1>
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
              <img src="{{ asset('build/images/Services/fire-assesment-1.jpg')}}" alt="Surveys & Risk Assessments">
            </div>
            <div class="blog-details__content">

              <h3 class="blog-details__title">Evaluating Risk. Enhancing Safety.</h3>

              <p class="blog-details__text-2">
                Aman Fire Engineering Consultancy offers thorough Surveys & Risk Assessments to identify gaps in fire and life safety measures, evaluate compliance with regulatory standards, and provide actionable recommendations for improvement. Our assessments are tailored to each facility’s unique risk profile, operational use, and regulatory environment.
              </p>

              <p class="blog-details__text-2">
                <strong>Due Diligence and Gap Analysis:</strong> We perform audits for new acquisitions, renovations, or operational reviews to assess current fire protection conditions, identify deficiencies, and benchmark against NFPA, SBC, and other standards.
              </p>

              <p class="blog-details__text-2">
                <strong>Building and Life Safety Audits:</strong> Our team evaluates egress routes, occupancy classifications, alarm systems, and suppression measures to ensure life safety compliance and identify risks before they escalate.
              </p>

              <p class="blog-details__text-2">
                <strong>Emergency Plans and Evacuation Diagrams:</strong> We develop and review emergency response procedures, evacuation strategies, and visual diagrams to support effective communication and safe evacuation during emergencies.
              </p>

              <p class="blog-details__text-2">
                <strong>Certification and Compliance Support:</strong> We assist building owners and facility managers in achieving and maintaining compliance with local civil defense authorities, offering support through all stages of the certification process.
              </p>

              <p class="blog-details__text-2">
                With a proactive and data-driven approach, Aman FEC helps clients mitigate fire-related risks, enhance occupant safety, and ensure regulatory compliance across various sectors and facility types.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Details End-->

</x-app.app-layout>
