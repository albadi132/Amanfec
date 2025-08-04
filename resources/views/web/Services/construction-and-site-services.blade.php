<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Services') }}">Services</a></li>
          <li>Construction & Site Services</li>
        </ul>
        <h1 class="title">Construction & Site Services</h1>
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
              <img src="{{ asset('build/images/Services/fireprotectionsystemcomponents.jpg')}}" alt="Construction & Site Services">
            </div>
            <div class="blog-details__content">

              <h3 class="blog-details__title">On-Site Support for Fire Protection Execution</h3>

              <p class="blog-details__text-2">
                Aman Fire Engineering Consultancy offers a full suite of Construction & Site Services to ensure that fire protection systems are installed in accordance with approved designs, applicable codes, and industry best practices. Our field team acts as your trusted partner on-site, bridging the gap between design intent and actual implementation.
              </p>

              <p class="blog-details__text-2">
                <strong>Shop Drawing Reviews:</strong> We meticulously review contractor shop drawings and material submittals to confirm alignment with fire protection design documents, code requirements, and client expectations.
              </p>

              <p class="blog-details__text-2">
                <strong>Site Inspections and Progress Reports:</strong> Our engineers perform regular site visits to monitor installation progress and compliance. Detailed progress reports and photo documentation are provided to support project transparency and accountability.
              </p>

              <p class="blog-details__text-2">
                <strong>Quality Assurance and Punch Lists:</strong> We conduct quality checks throughout the construction phase and generate punch lists that identify deficiencies requiring correction before final acceptance.
              </p>

              <p class="blog-details__text-2">
                <strong>RFI Tracking and Documentation:</strong> We assist in managing Requests for Information (RFIs) and clarifications related to fire protection systems, ensuring timely responses and proper documentation for all construction queries.
              </p>

              <p class="blog-details__text-2">
                With a hands-on approach and a deep understanding of code compliance and construction dynamics, Aman FEC helps clients mitigate risk, improve build quality, and ensure that safety objectives are achieved on-site without compromise.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Details End-->

</x-app.app-layout>
