<x-app.app-layout>
  <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
      <div class="auto-container">
        <div class="title-outer">
          <ul class="page-breadcrumb">
            <li><a href="/">Home</a></li>
            <li>Services</li>
          </ul>
          <h1 class="title">Services</h1>
        </div>
      </div>
    </section>
    <!-- end main-content -->


     <!--Start Services Details-->
<section class="services-details pt-120 pb-120">
  <div class="container">
    <div class="row align-items-lg-center">
      <div class="col-lg-6">
        <div class="sec-title mb-40">
          <h6 class="sub-title wow fadeInUp bg-transparent ps-0" data-wow-delay="00ms" data-wow-duration="1500ms">Service Details</h6>
          <h2 class="title mb-30 wow splt-txt" data-splitting>Comprehensive Fire & Life Safety Solutions <br class="d-none d-lg-block"> Tailored to Your Project Needs</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="project-details__top mt-lg-5">
          <div class="text mb-40">
           At Aman Fire Engineering Consultancy, we provide a wide range of specialized services in fire protection engineering, code compliance, and safety consulting. Our offerings are designed to support each phase of your project, from design and modeling to on-site inspections, testing, and risk assessments, ensuring full regulatory compliance and long-term safety assurance.
          </div>
        </div>
      </div>
    </div>

    <div class="row">



    </div>
  </div>
</section>

<!-- Services Section-->
<section class="case-section bg-thm1 pt-120 pb-120">
  <div class="auto-container">
    <div class="row g-0">
      <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="service-block-two">
          <div class="inner-box">
            <div class="icon">
              <img style="width: 96px;height: 96px;" src="{{ asset('build/images/Services/1.png')}}" alt="Code Consulting">
            </div>
            <div class="content-box">
              <h4 class="title">Code Consulting</h4>
              <p class="text">Comprehensive code compliance services including NFPA, SBC, and GCC reviews, performance-based design, and peer consultations.</p>
              <a class="btn-two-rounded" href="{{ route('Code-Consulting') }}">learn more</a>
            </div>
            <div class="block-bg">
              <img src="{{ asset('build/images/shape/service-block-shape.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
        <div class="service-block-two">
          <div class="inner-box">
            <div class="icon">
              <img style="width: 96px;height: 96px;" src="{{ asset('build/images/Services/2.png')}}" alt="Fire Protection Design">
            </div>
            <div class="content-box">
              <h4 class="title">Fire Protection Design</h4>
              <p class="text">Design and integration of sprinkler, standpipe, alarm, suppression, and smoke control systems tailored to each project’s needs.</p>
              <a class="btn-two-rounded" href="{{ route('Fire-Protection-Design') }}">learn more</a>
            </div>
            <div class="block-bg">
              <img src="{{ asset('build/images/shape/service-block-shape.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="service-block-two">
          <div class="inner-box border-0">
            <div class="icon">
              <img style="width: 96px;height: 96px;" src="{{ asset('build/images/Services/3.png')}}" alt="Modeling Services">
            </div>
            <div class="content-box">
              <h4 class="title">Modeling Services</h4>
              <p class="text">Advanced simulations including CFD, FDS, evacuation, and smoke modeling to ensure safety and optimize building performance.</p>
              <a class="btn-two-rounded" href="{{ route('Modeling-Services') }}">learn more</a>
            </div>
            <div class="block-bg">
              <img src="{{ asset('build/images/shape/service-block-shape.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
        <div class="service-block-two">
          <div class="inner-box border-0">
            <div class="icon">
              <img style="width: 96px;height: 96px;" src="{{ asset('build/images/Services/4.png')}}" alt="Construction & Site Services">
            </div>
            <div class="content-box">
              <h4 class="title">Construction & Site Services</h4>
              <p class="text">On-site support including shop drawing reviews, inspections, progress reports, RFIs, and quality assurance during construction.</p>
              <a class="btn-two-rounded" href="{{ route('Construction-and-Site-Services') }}">learn more</a>
            </div>
            <div class="block-bg">
              <img src="{{ asset('build/images/shape/service-block-shape.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
        <div class="service-block-two">
          <div class="inner-box">
            <div class="icon">
              <img style="width: 96px;height: 96px;" src="{{ asset('build/images/Services/5.png')}}" alt="Testing & Commissioning">
            </div>
            <div class="content-box">
              <h4 class="title">Testing & Commissioning</h4>
              <p class="text">System testing, special inspections, witnessing, and final documentation to ensure all life safety systems are operational and compliant.</p>
              <a class="btn-two-rounded" href="{{ route('Testing-and-Commissioning') }}">learn more</a>
            </div>
            <div class="block-bg">
              <img src="{{ asset('build/images/shape/service-block-shape.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
        <div class="service-block-two">
          <div class="inner-box">
            <div class="icon">
              <img style="width: 96px;height: 96px;" src="{{ asset('build/images/Services/6.png')}}" alt="Surveys & Risk Assessments">
            </div>
            <div class="content-box">
              <h4 class="title">Surveys & Risk Assessments</h4>
              <p class="text">Life safety audits, emergency plans, gap analysis, and compliance support to enhance safety and meet regulatory requirements.</p>
              <a class="btn-two-rounded" href="{{ route('Surveys-and-Risk-Assessments') }}">learn more</a>
            </div>
            <div class="block-bg">
              <img src="{{ asset('build/images/shape/service-block-shape.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

	<!-- End Services Section -->

    <!-- Choose area start here -->
      <!--
  <section class="choose-section pt-120 pb-120">
  <div class="container">
    <div class="row g-4">
      <div class="col-xl-6 content-column">
        <div class="inner-column">
          <div class="sec-title mb-30">
            <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Who We Are</h6>
            <h2 class="title wow splt-txt" data-splitting>We engineer fire safety with precision and passion.</h2>
          </div>

          <div class="choose-tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> About Us</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> Our Mission</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> Our Vision</button>
              </li>
            </ul>
          </div>

          <div class="tab-content mt-30" id="myTabContent">

            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="content-box">
                <p class="text">
                  Aman Fire Engineering Consultants is a specialized engineering consultancy committed to protecting lives and assets through expert fire safety solutions. Our team brings international experience, in-depth knowledge of local regulations, and a dedication to delivering tailored services from design to commissioning.
                </p>
                <div class="list mt-30 mb-50">
                  <ul>
                    <li><i class="fa-solid fa-check"></i> NFPA & GCC Code Compliance</li>
                    <li><i class="fa-solid fa-check"></i> Licensed in Oman & Saudi Arabia</li>
                  </ul>
                  <ul>
                    <li><i class="fa-solid fa-check"></i> Expertise in All Project Stages</li>
                    <li><i class="fa-solid fa-check"></i> Certified by Civil Defense Authorities</li>
                  </ul>
                </div>
                <a href="{{ route('AboutUs') }}" class="btn-two">Discover More</a>
              </div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="content-box">
                <p class="text">
                  To provide world-class fire protection engineering and consultancy services that uphold safety, compliance, and innovation—supporting our clients through every stage of their project lifecycle.
                </p>
                <div class="list mt-30 mb-50">
                  <ul>
                    <li><i class="fa-solid fa-check"></i> Delivering Value Through Expertise</li>
                    <li><i class="fa-solid fa-check"></i> Prioritizing Client Needs</li>
                  </ul>
                  <ul>
                    <li><i class="fa-solid fa-check"></i> Promoting Safety-First Engineering</li>
                    <li><i class="fa-solid fa-check"></i> Adhering to International Standards</li>
                  </ul>
                </div>
                <a href="{{ route('AboutUs') }}" class="btn-two">Discover More</a>
              </div>
            </div>


            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="content-box">
                <p class="text">
                  To be the leading fire safety engineering consultancy in the region, recognized for technical excellence, innovation, and unwavering commitment to protecting people and property.
                </p>
                <div class="list mt-30 mb-50">
                  <ul>
                    <li><i class="fa-solid fa-check"></i> Regional Leadership in Fire Safety</li>
                    <li><i class="fa-solid fa-check"></i> Trusted Partner for Sustainable Development</li>
                  </ul>
                  <ul>
                    <li><i class="fa-solid fa-check"></i> Advancing Code-Compliant Solutions</li>
                    <li><i class="fa-solid fa-check"></i> Enabling Safer Communities</li>
                  </ul>
                </div>
                <a href="{{ route('AboutUs') }}" class="btn-two">Discover More</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-6 image-column">
        <div class="inner-column">
          <figure class="image">
            <img class="wow imageUpToDown" src="{{ asset('build/images/choose/choose-image1.jpg')}}" alt="Aman Fire Engineering Team">
            <div class="outer-box">
              <div class="choose-block">
                <div class="pie-graph">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#000" data-bgColor="#FFFFFF33" data-width="70" data-height="70" value="95">
                  </div>
                  <i class="fa-solid icon fa-arrow-up-right"></i>
                </div>
                <div class="content-box">
                  <div class="inner-text count-box"><span class="count-text" data-stop="95" data-speed="2000">95</span>%</div>
                  <h5 class="title">Projects Completed</h5>
                </div>
              </div>
              <div class="choose-block">
                <div class="pie-graph">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#000" data-bgColor="#FFFFFF33" data-width="70" data-height="70" value="70">
                  </div>
                  <i class="fa-solid icon fa-arrow-up-right"></i>
                </div>
                <div class="content-box">
                  <div class="inner-text count-box"><span class="count-text" data-stop="70" data-speed="2000">70</span>%</div>
                  <h5 class="title">Repeat Clients</h5>
                </div>
              </div>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
-->
    <!-- Choose area end here -->

</x-app.app-layout>