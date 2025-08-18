<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Services') }}">Services</a></li>
          <li>Code Consulting</li>
        </ul>
        <h1 class="title">Code Consulting</h1>
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
              <img src="{{ asset('build/images/Services/Code-Consulting.png')}}" alt="">
            </div>
            <div class="blog-details__content">

              <h3 class="blog-details__title">Comprehensive Code Consulting Services</h3>

               <p class="blog-details__text-2">
                At Aman Fire Engineering Consultancy, we understand the critical importance of fire and life safety code compliance in building design and operations. Our Code Consulting services are tailored to assist architects, engineers, developers, and building owners in navigating complex regulatory frameworks while ensuring innovative and safe design solutions.
              </p>

              <p class="blog-details__text-2">
                <strong>Compliance Reviews:</strong> We conduct detailed reviews in accordance with international and regional standards, including NFPA, Saudi Building Code (SBC), and Gulf Cooperation Council (GCC) regulations. Our experts ensure your project is aligned with all relevant fire safety codes from conceptual design through to final inspection.
              </p>

              <p class="blog-details__text-2">
                <strong>Means of Egress Evaluation:</strong> Our team evaluates egress systems to verify that occupants can evacuate safely during emergencies. We analyze exit routes, capacities, travel distances, and accessibility in compliance with applicable codes.
              </p>

              <p class="blog-details__text-2">
                <strong>Performance-Based Design:</strong> When prescriptive codes limit innovation, we offer performance-based design strategies using advanced fire modeling and risk assessments. These designs are backed by data to meet safety objectives while enabling design flexibility.
              </p>

              <p class="blog-details__text-2">
                <strong>Peer Reviews and Alternative Design Solutions:</strong> We provide third-party peer reviews to validate design integrity and propose code-alternative solutions where applicable. Our team collaborates with authorities having jurisdiction (AHJs) to gain approvals and maintain compliance without compromising safety or aesthetics.
              </p>

              <p class="blog-details__text-2">
                With a commitment to excellence and technical precision, Aman Fire Engineering Consultancy is your trusted partner for all code compliance needs. We strive to simplify complexity, support creative design, and ensure life safety across every project we touch.
              </p>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Details End-->

</x-app.app-layout>
