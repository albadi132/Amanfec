<x-app.app-layout>
  <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
      <div class="auto-container">
        <div class="title-outer">
          <ul class="page-breadcrumb">
            <li><a href="/">Home</a></li>
            <li>About Us</li>
          </ul>
          <h1 class="title">About Us</h1>
        </div>
      </div>
    </section>
    <!-- end main-content -->

   <!-- About area start here -->
<section class="about-section-three pt-120 pb-120">
  <div class="container">
    <div class="row g-5 g-xxl-0">
      <div class="col-xl-6 image-column">
        <div class="inner-column">
          <figure class="image">
            <img src="{{ asset('build/images/about/about-three-image.jpg')}}" alt="Image">
          </figure>
          <p class="text mt-30 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            With a presence across Oman, Saudi Arabia, and the UAE, Aman Fire Engineering Consultants delivers advanced fire protection and life safety solutions for high-risk environments like high-rises, oil & gas, airports, and hospitals.
          </p>
          <div class="info mt-50 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
            <a class="btn-one-rounded" href="{{ route('ContactUs') }}" style="color: #fff; font-weight: bold;">Contact Us <i class="fa-regular fa-arrow-up-right"></i></a>

          </div>
        </div>
      </div>

      <div class="col-xl-6 content-column">
        <div class="inner-column">
          <div class="sec-title">
            <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="color: #fff; font-weight: bold;">ABOUT AMAN</h6>
            <h2 class="title wow splt-txt" data-splitting>
              Fire safety is not optional — it’s engineered into every decision we make.
            </h2>
          </div>

          <div class="about-block-three mt-50">
            <div class="row g-0">
              <div class="col-sm-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="content-box">
                  <div class="count-box"><span class="count-text" data-stop="15" data-speed="2000">15</span>+</div>
                  <p class="text">Years of regional & global experience</p>
                </div>
              </div>
              <div class="col-sm-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="content-box margin-minus">
                  <div class="count-box"><span class="count-text" data-stop="100" data-speed="2000">100</span>+</div>
                  <p class="text">Major projects delivered successfully</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- About area end here -->

     <!-- Brand area start here -->
    <section class="brand-section">
      <div class="container">
        <div class="outer-box">
<div class="sec-title mb-50">
            <h6 class="title">CERTIFIED BY</h6>
          </div>
          <div class="swiper brand-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('build/images/brand/iso 2.png')}}" alt="iso 2.png" ></a>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('build/images/brand/iso 2022.png')}}" alt="iso 2022.png" ></a>
                </div>
              </div>

               <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('build/images/brand/iso.png')}}" alt="iso.png" ></a>
                </div>
              </div>

               <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('build/images/brand/nafi.png')}}" alt="nafi.png" ></a>
                </div>
              </div>

               <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('build/images/brand/nfpa 2.png')}}" alt="nfpa 2.png" ></a>
                </div>
              </div>

               <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('build/images/brand/nfpa.png')}}" alt="nfpa.png" ></a>
                </div>
              </div>

               <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('build/images/brand/oman.png')}}" alt="oman.png" ></a>
                </div>
              </div>

               <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('build/images/brand/saudi.png')}}" alt="saudi.png" ></a>
                </div>
              </div>

               <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('build/images/brand/uae.png')}}" alt="uae.png" ></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Brand area end here -->


	<!--Project Details Start-->
  <section class="project-details ">
    <div class="container">
      <div class="row">

      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="sec-title mb-40">
            <h2 class="title mb-30 wow splt-txt" data-splitting>Mission & Vision</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="project-details__top mt-lg-5">
            <div class="text mb-40">Our mission is to ensure a safe built environment through advanced fire and life safety solutions. Our vision is to be the trusted partner for developers, consultants, and authorities in building safety, by consistently delivering code-compliant, efficient, and innovative solutions tailored to project-specific needs. </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="project-details__top mt-5">
            <div class="project-details__img"> <img class="rounded-0" src="{{ asset('build/images/resource/project-details-3.jpg')}}" alt=""> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="project-details__top mt-5">
            <div class="project-details__img"> <img class="rounded-0" src="{{ asset('build/images/resource/project-details-4.jpg')}}" alt=""> </div>
          </div>
        </div>
      </div>

      <div class="row align-items-lg-center">
        <div class="col-lg-6">
          <div class="sec-title mb-40">
            <h2 class="title mb-30 wow splt-txt" data-splitting>Our Message</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="project-details__top mt-lg-5">
            <div class="text mb-40">
              Through years of collaboration with developers, insurance bodies, and authorities, Aman emphasizes a proactive, professional approach to fire and life safety. Our message is clear: safety isn’t optional it’s engineered into every decision, design, and service we provide.
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="row align-items-lg-center">
        <div class="col-lg-6">
          <div class="sec-title mb-40">
            <h2 class="title mb-30 wow splt-txt" data-splitting>our Expertise<br class="d-none d-lg-block">  </h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="project-details__top mt-lg-5">
            <ul class="project-list mb-5">
              <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Front-end Engineering Design (FEED)	</li>
              <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Community Risk Assessment	</li>
              <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Emergency Management</li>
              <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Hazardous Materials</li>
                 <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Product Evaluation	</li>
              <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Litigation Support	</li>
              <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> HCIS/SAF Consultancy Services </li>
              <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Strategic Risk Management</li>
                            <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Fire and Building Safety	</li>
              <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Master Plan Review </li>
              <li class="d-flex align-items-center"><i class="icon fa-classic fa-solid fa-check fa-fw"></i> Seminars & Training</li>
            </ul>
          </div>
        </div>
      </div>
  </div>
  </section>
  <!--Project Details End-->

<!-- Testimonial area start here -->
<section class="testimonial-section-three">
  <div class="sec-wrp pb-50 pt-120 mt-120 mb-120">
    <div class="sec-shape">
      <img class="animation__rotate" src="{{ asset('build/images/shape/dual-circle420.png')}}" alt="Image">
    </div>
    <div class="container">
      <div class="outer-box">
        <div class="row g-5">
          <div class="col-xl-7 order-2 order-xl-1">
            <div class="sec-title mb-30">
              <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="color: #fff; font-weight: bold;">Learning in Action</h6>
              <div class="flex-content">
                <h2 class="title text-white wow splt-txt" data-splitting>Building Expertise <span class="font-weight-300">Shaping the Future</span></h2>
                <div class="btn-wrp">
                  <button class="testimonial-prev-three"><i class="fa-regular fa-angle-left"></i></button>
                  <button class="testimonial-next-three"><i class="fa-regular fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <div class="swiper testimonial-slider-three">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-block-three">
                    <p class="text">
                      “Our in-house subject matter experts include NFPA certified trainers who lead ongoing technical development and knowledge-sharing. We run a structured training and development program for graduate engineers, designed to build practical skills, code expertise, and long-term professional growth.”
                    </p>
                    <div class="info">
                      <h4 class="title">Yogeesha V Ningaiah / <span>Senior Fire Protection Engineer</span></h4>
                    </div>
                  </div>
                </div>



              </div>
            </div>
          </div>
          <div class="col-xl-5 order-1 order-xl-2 image-column d-none d-sm-block">
            <div class="inner-column">
              <figure class="image">
                <img src="{{ asset('build/images/testimonial/Bahaa_big.jpg')}}" alt="Image">
                <div class="icon">
                  <svg width="33" height="25" viewBox="0 0 33 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M29.1965 1.98168C30.9987 3.96415 32.0801 6.12685 32.0801 9.73134C32.0801 16.0392 27.5745 21.6262 21.2666 24.5098L19.6446 22.1668C25.592 18.9228 26.8536 14.7776 27.214 12.0743C26.3129 12.6149 25.0513 12.7952 23.7897 12.6149C20.5457 12.2545 18.0225 9.73134 18.0225 6.30707C18.0225 4.68505 18.7434 3.06303 19.8248 1.80146C21.0864 0.539885 22.5282 -0.000789642 24.3304 -0.000789642C26.3129 -0.000789642 28.1151 0.900331 29.1965 1.98168ZM11.174 1.98168C12.9763 3.96415 14.0576 6.12685 14.0576 9.73134C14.0576 16.0392 9.55198 21.6262 3.24412 24.5098L1.6221 22.1668C7.56951 18.9228 8.83109 14.7776 9.19153 12.0743C8.29041 12.6149 7.02884 12.7952 5.76727 12.6149C2.52322 12.2545 7.62939e-05 9.73134 7.62939e-05 6.30707C7.62939e-05 4.68505 0.720974 3.06303 1.80232 1.80146C2.88367 0.539885 4.50569 -0.000789642 6.30794 -0.000789642C8.29041 -0.000789642 10.0927 0.900331 11.174 1.98168Z"
                      fill="#051B05" />
                  </svg>
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Testimonial area end here -->




</x-app.app-layout>