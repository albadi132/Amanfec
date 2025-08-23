<x-app.app-layout>

    <!-- Banner area start here -->
    <section class="banner-section">
      <div class="sec-shape">
        <img src="{{ asset('build/images/shape/banner-shape.png')}}" alt="Image">
      </div>
      <button class="goBottom-btn">
        <svg class="animation__arryUpDown" width="16" height="36" viewBox="0 0 16 36" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M13.8328 6.33334C13.8328 5.17961 13.4907 4.0518 12.8497 3.09251C12.2088 2.13322 11.2977 1.38555 10.2318 0.944039C9.16591 0.502527 7.99302 0.387008 6.86146 0.612088C5.72991 0.837169 4.69051 1.39274 3.8747 2.20855C3.0589 3.02435 2.50332 4.06375 2.27824 5.19531C2.05316 6.32686 2.16868 7.49975 2.61019 8.56566C3.05171 9.63156 3.79938 10.5426 4.75867 11.1836C5.71795 11.8245 6.84577 12.1667 7.99949 12.1667C9.54602 12.1648 11.0287 11.5496 12.1222 10.4561C13.2158 9.3625 13.831 7.87986 13.8328 6.33334ZM3.83283 6.33334C3.83283 5.50925 4.0772 4.70366 4.53504 4.01846C4.99287 3.33325 5.64362 2.7992 6.40498 2.48384C7.16634 2.16847 8.00412 2.08596 8.81237 2.24673C9.62062 2.4075 10.3631 2.80434 10.9458 3.38706C11.5285 3.96978 11.9253 4.71221 12.0861 5.52046C12.2469 6.32871 12.1644 7.16649 11.849 7.92785C11.5336 8.68921 10.9996 9.33995 10.3144 9.79779C9.62916 10.2556 8.82358 10.5 7.99949 10.5C6.89474 10.499 5.83552 10.0597 5.05434 9.27849C4.27316 8.49731 3.83385 7.43809 3.83283 6.33334ZM15.2554 27.4108C15.3327 27.4882 15.3941 27.58 15.436 27.6811C15.4779 27.7822 15.4995 27.8905 15.4995 28C15.4995 28.1094 15.4779 28.2177 15.436 28.3188C15.3941 28.4199 15.3327 28.5118 15.2554 28.5891L8.58869 35.2558C8.51133 35.3332 8.41948 35.3946 8.31839 35.4365C8.2173 35.4783 8.10895 35.4999 7.99953 35.4999C7.8901 35.4999 7.78175 35.4783 7.68066 35.4365C7.57957 35.3946 7.48772 35.3332 7.41036 35.2558L0.743692 28.5891C0.591894 28.432 0.507898 28.2215 0.509797 28.003C0.511696 27.7845 0.599336 27.5755 0.753843 27.421C0.90835 27.2664 1.11736 27.1788 1.33586 27.1769C1.55436 27.175 1.76486 27.259 1.92203 27.4108L7.16616 32.655V18C7.16616 17.779 7.25396 17.567 7.41024 17.4107C7.56652 17.2545 7.77848 17.1667 7.99949 17.1667C8.22051 17.1667 8.43247 17.2545 8.58875 17.4107C8.74503 17.567 8.83283 17.779 8.83283 18V32.655L14.077 27.4109C14.1543 27.3334 14.2462 27.272 14.3473 27.2302C14.4484 27.1883 14.5567 27.1667 14.6661 27.1667C14.7756 27.1667 14.8839 27.1882 14.985 27.2301C15.0861 27.272 15.178 27.3334 15.2554 27.4108Z"
            fill="white" />
        </svg>
      </button>

   <div class="swiper banner-slider">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="slide-bg" data-background="{{ asset('build/images/banner/b1.jpg')}}"></div>
      <div class="container">
        <div class="outer-box">
          <div class="row g-0 align-items-end">
            <div class="col-lg-8 content-column">
              <div class="inner-column">
              <!--  <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s" >Aman Fire Engineering & Safety Consultancy</h6> -->
          <h1 class="title" data-animation="fadeInUp" data-delay=".5s">
  Your Reliable
  <span class="no-break-inline">
    <span>Fire</span>
    <span style="color:#d62828;">&</span>
    <span>Life Safety Partner</span>
  </span>
  Across the GCC
</h1>

                <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('Services') }}" style="color: #fff; font-weight: bold;">Explore Our Services</a>
              </div>
            </div>
            <div class="col-lg-4">
              <p class="text" data-animation="fadeInUp" data-delay=".9s" >We don’t just follow codes. We help write them.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="slide-bg" data-background="{{ asset('build/images/banner/b2.jpg')}}"></div>
      <div class="container">
        <div class="outer-box">
          <div class="row g-0 align-items-end">
            <div class="col-lg-8 content-column">
              <div class="inner-column">
               <!--  <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s">Your Safety, Our Priority</h6> -->
                <h1 class="title" data-animation="fadeInUp" data-delay=".5s">Protecting

                  <span class="no-break-inline">
    <span>Lives</span>
    <span style="color:#d62828;">&</span>
    <span>Property</span>
  </span>
                  with Proven Solutions
                </h1>
                <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('ContactUs') }}" style="color: #fff; font-weight: bold;">Get In Touch</a>
              </div>
            </div>
            <div class="col-lg-4">
              <p class="text" data-animation="fadeInUp" data-delay=".9s">We design and audit systems that comply with NFPA, PACDA, and global safety codes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="slide-bg" data-background="{{ asset('build/images/banner/b3.jpg')}}"></div>
      <div class="container">
        <div class="outer-box">
          <div class="row g-0 align-items-end">
            <div class="col-lg-8 content-column">
              <div class="inner-column">
              <!--   <h6 class="sub-title" data-animation="fadeInUp" data-delay=".3s">Over a Decade of Experience</h6> -->
                <h1 class="title" data-animation="fadeInUp" data-delay=".5s">Leading
                  <span>Fire Safety Consulting</span>
                  Across the Region
                </h1>
                <a class="btn-one" data-animation="fadeInUp" data-delay=".8s" href="{{ route('ContactUs') }}" style="color: #fff; font-weight: bold;">Schedule a Call</a>
              </div>
            </div>
            <div class="col-lg-4">
              <p class="text" data-animation="fadeInUp" data-delay=".9s">Serving clients in Oman, KSA, and UAE with certified fire protection professionals.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    </section>


    @if($partners && $partners->count() > 0)
        <!-- Brand area start here -->
    <section class="brand-section pt-120">
      <div class="container">
        <div class="outer-box">
          <div class="sec-title mb-50">
            <h6 class="title">CLIENT TRUST US</h6>
          </div>
          <div class="swiper brand-slider">
            <div class="swiper-wrapper">
              @foreach($partners as $partner)
              <div class="swiper-slide">
                <div class="brand-block">
                  <a href="#"><img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }}"  style="width: 80px;height: 85px;"></a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif


            <!-- Brand area start here -->
    <section class="brand-section pt-120">
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
    <!-- About area end here -->

     <!-- About area start here -->
    <section class="about-section-two paralax__animation pt-120 pb-120">
      <div class="container">
        <div class="row g-5 g-xl-4">
          <div class="col-xl-6 image-column">
            <div class="inner-column">
              <figure class="image">
                <img data-tilt data-tilt-max="3" src="{{ asset('build/images/about/about-two-image.png')}}" alt="Image">

                <div class="info2 wow bounceInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                  <h2 class="title" style="color:white;"><span style="color:white;">10</span>+</h2>
                  <p class="sub-title" style="color:white;">Years Of Experience <img src="{{ asset('build/images/about/about-two-info-line.png')}}" alt="Image">
                  </p>
                </div>
              </figure>
            </div>
          </div>

          <div class="col-xl-6 content-column">
            <div class="inner-column">
              <div class="content-box">
                <div class="sec-title mb-40">

                  <h2 class="title wow splt-txt" data-splitting>2,900+ projects successfully delivered</h2>
                  <p class="text wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">We specialize in fire protection engineering, life safety consulting, and risk-based solutions tailored for complex projects across the Middle East.</p>
                </div>

   </div>
   <div class="info mt-50 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                           <div class="user">

                  <h6 class="title">Approved Service Providers & Recognised by Experts<img src="{{ asset('build/images/about/about-two-line.png')}}" alt="Image"></h6>
                  </div>
                </div>

   <div class="info mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="item">
                  <div class="icon">
                    <img  src="{{ asset('build/images/brand/aramco.png')}}" alt="Icon">
                  </div>
                </div>
                <div class="item">
                  <div class="icon">
                    <img  src="{{ asset('build/images/brand/diriyah.png')}}" alt="Icon">
                  </div>
                </div>
                <div class="item">
                  <div class="icon">
                    <img  src="{{ asset('build/images/brand/qiddya.png')}}" alt="Icon">
                  </div>
                </div>
                 <div class="item">
                  <div class="icon">
                    <img  src="{{ asset('build/images/brand/NEOM.png')}}" alt="Icon">
                  </div>
                </div>
 <div class="item">
                  <div class="icon">
                    <img  src="{{ asset('build/images/brand/sabic.png')}}" alt="Icon">
                  </div>
                </div>

                 <div class="item">
                  <div class="icon">
                    <img  src="{{ asset('build/images/brand/_salogos.org-شعار-الكهرباء (1).png')}}" alt="Icon">
                  </div>
                </div>

                <div class="item">
                  <div class="icon">
                    <img  src="{{ asset('build/images/brand/modon.png')}}" alt="Icon">
                  </div>
                </div>

                <div class="item">
                  <div class="icon">
                    <img  src="{{ asset('build/images/brand/sce.png')}}" alt="Icon">
                  </div>
                </div>

                <div class="item">
                  <div class="icon">
                    <img  src="{{ asset('build/images/brand/sais.png')}}" alt="Icon">
                  </div>
                </div>
                </div>

                <div class="info mt-50 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                  <a class="btn-two-rounded" href="{{ route('AboutUs') }}">more about <i class="fa-regular fa-angle-right"></i></a>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- About area start here
    <section class="about-section pt-120 pb-120 paralax__animation">
      <div class="container">
        <div class="row g-5">


          <div class="col-lg-6 content-column">
            <div class="inner-column">
              <div class="content-box">
                <div class="sec-title">
  <h2 class="title wow splt-txt" data-splitting>About Aman</h2>
  <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
At Aman, we deliver advanced fire protection and life safety solutions for complex, high-risk environments across the Middle East. With certified experts and deep regional insight, we provide end-to-end services from code consulting and performance-based design to system modeling, inspection, and commissioning.
We don’t just follow safety codes, we help shape them. Our purpose is clear: protecting people, property, and progress.
  </p>
</div>
                <div class="about-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
  <div class="inner-box">
    <div class="icon">

                      <img style="width: 100px;height: 55px;" src="{{ asset('build/images/icons/email.png')}}" alt="" title="Consultez">
                    </div>
    <div class="content">
      <h4 class="title">Our Message</h4>
      <p class="text">
   With deep collaboration across the industry, Aman takes a proactive approach to fire and life safety engineering safety into every decision, design, and service. </p>
    </div>
  </div>
</div>

                <div class="about-block wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
  <div class="inner-box">
    <div class="icon">
                         <img style="width: 120px;height: 40px;" src="{{ asset('build/images/icons/shield.png')}}" alt="" title="Consultez">

                     </div>
    <div class="content">
      <h4 class="title">Shaping Safety Standards</h4>
      <p class="text">
     We don’t just follow codes. We help write them. Our hands-on involvement with regional authorities and regulatory bodies gives our clients a strategic edge in navigating the evolving landscape of safety standards and approvals. </p>
    </div>
  </div>
</div>
 <div class="info mt-30">
                <a href="{{ route('AboutUs') }}" class="btn-two">More About Aman</a>

              </div>

<div class="progress mt-30">
  <div class="progress-single">
    <div class="bar">
      <div class="bar-inner count-bar" data-percent="100%">
        <div class="count-text">100%</div>
      </div>
    </div>
  </div>
</div>


            </div>
          </div>
        </div>
        <div class="col-lg-6 image-column wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="inner-column">
              <div data-depth="0.01" class="image1 overlay-anim">
                <img src="{{ asset('build/images/about/about-image1.jpg')}}" alt="Image">
              </div>

              <div class="image2 overlay-anim" data-depth="0.05">
                <img src="{{ asset('build/images/about/ACCZ.png')}}" alt="Image">
              </div>
            </div>
          </div>
      </div>
    </section>
     About area end here -->

    <!-- Service area start here -->
  <section class="service-section pt-120 pb-120">
  <figure class="sec-shape">
    <img src="{{ asset('build/images/shape/service-shape.png')}}" alt="Image">
  </figure>
  <div class="sec-line">
    <img class="animation__arryUpDown" src="{{ asset('build/images/shape/service-line.png')}}" alt="Image">
  </div>
  <div class="container">
    <div class="sec-title mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms" style="color: #fff; font-weight: bold;">Our Services</h6>
      <div class="flex-content">
        <h2 class="title wow splt-txt" data-splitting>End-to-End Fire Safety Engineering<br>Solutions, Proven Results. </h2>
        <a class="btn-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" href="{{ route('Services') }}" style="color: #fff; font-weight: bold;">Explore All Services</a>

      </div>
    </div>

    <div class="swiper service-slider">
      <div class="swiper-wrapper">
<!-- Service 1 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Strategic-Management-and-Emergency-Planning') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">01</span>
        <h4 class="title"><a href="{{ route('Strategic-Management-and-Emergency-Planning') }}">Strategic Management & Emergency Planning</a></h4>
        <p class="text">Customized safety & security strategies aligned with your risk profile and emergency response needs.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/SurveysRiskAssessments.png')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>

<!-- Service 2 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Code-Compliance-and-Consulting') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">02</span>
        <h4 class="title"><a href="{{ route('Code-Compliance-and-Consulting') }}">Code Compliance & Consulting</a></h4>
        <p class="text">Clear guidance to interpret and apply fire & life safety codes with practical, actionable solutions.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/CodeConsulting.png')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>

<!-- Service 3 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Master-Plan-Review') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">03</span>
        <h4 class="title"><a href="{{ route('Master-Plan-Review') }}">Master Plan Review</a></h4>
        <p class="text">In-depth peer reviews for fire & life safety elements in master plan submissions.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/ConstructionSiteServices.png')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>

<!-- Service 4 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Code-Based-Fire-Protection-Design') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">04</span>
        <h4 class="title"><a href="{{ route('Code-Based-Fire-Protection-Design') }}">Code-Based Fire Protection Design</a></h4>
        <p class="text">Complete design & review of alarm/detection, sprinklers, suppression, and smoke control systems.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/cpd-synergen-oil-importance-risk-assessment.jpg')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>

<!-- Service 5 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Performance-Based-Design') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">05</span>
        <h4 class="title"><a href="{{ route('Performance-Based-Design') }}">Performance-Based Design</a></h4>
        <p class="text">Advanced fire engineering for complex buildings that exceed prescriptive code limits.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/energy-regulations.jpeg')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>

<!-- Service 6 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Modeling-Services') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">06</span>
        <h4 class="title"><a href="{{ route('Modeling-Services') }}">Modelling</a></h4>
        <p class="text">FDS/CFD simulations for smoke movement, temperature profiles, and tenability analysis.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/FireProtectionDesign.png')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>

<!-- Service 7 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Commissioning') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">07</span>
        <h4 class="title"><a href="{{ route('Commissioning') }}">Commissioning</a></h4>
        <p class="text">End-to-end commissioning plans, functional testing, and integrated system verification.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/istockphoto-2006177264-612x612.jpg')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>

<!-- Service 8 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Fire-Detection-and-Alarm-Systems') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">08</span>
        <h4 class="title"><a href="{{ route('Fire-Detection-and-Alarm-Systems') }}">Fire Detection & Alarm Systems</a></h4>
        <p class="text">Design, review, and verification of fire alarm systems across all occupancies.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/ModelingServices.png')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>

<!-- Service 9 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Fire-Suppression-Systems') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">09</span>
        <h4 class="title"><a href="{{ route('Fire-Suppression-Systems') }}">Fire Suppression Systems</a></h4>
        <p class="text">Hydraulic calculations, layout design, and performance reviews for suppression systems.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/Oil-and-Gas-Management.jpg')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>

<!-- Service 10 -->
<div class="swiper-slide">
  <div class="service-block">
    <a class="arry-btn" href="{{ route('Smoke-Control-Systems') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
    <div class="content-box">
      <div class="icon"></div>
      <figure class="shape">
        <img src="{{ asset('build/images/shape/service-item-shape.png')}}" alt="Image">
      </figure>
      <div class="content">
        <span class="number">10</span>
        <h4 class="title"><a href="{{ route('Smoke-Control-Systems') }}">Smoke Control Systems</a></h4>
        <p class="text">Design of smoke control strategies to protect egress routes and critical areas.</p>
      </div>
    </div>
    <div class="image-box">
      <figure class="image">
        <img src="{{ asset('build/images/new/service-image1.jpg')}}" alt="Service Image">
      </figure>
    </div>
  </div>
</div>


      </div>
    </div>
  </div>
</section>


    <section class="case-section have-combine pt-120 pb-120">
      <div class="outer-box">
        <div class="sec-title center mb-50">
          <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="color: #fff; font-weight: bold;">Case study</h6>
          <h2 class="title wow splt-txt" data-splitting>Showcasing Project & Solutions <br> for Clients case study.</h2>
        </div>
       <div class="swiper case-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="case-block">
              <div class="inner-box">
                <figure class="image">
                  <img src="{{ asset('build/images/projects/case1.jpg')}}" alt="Image">
                </figure>
                <div class="content-box">
                  <span class="sub-title">Riyadh</span>
                  <h4 class="title"><a href="{{ route('Fire-Protection-Life-Safety-Riyadh') }}">Fire Protection & Life Safety Management</a></h4>
                </div>
                <a class="arry-btn" href="{{ route('Fire-Protection-Life-Safety-Riyadh') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
                <div class="hover-content">
                  <span class="sub-title">Riyadh</span>
                  <h4 class="title"><a href="{{ route('Fire-Protection-Life-Safety-Riyadh') }}">Fire Protection & Life Safety Management</a></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="case-block">
              <div class="inner-box">
                <figure class="image">
                  <img src="{{ asset('build/images/projects/case2.jpg')}}" alt="Image">
                </figure>
                <div class="content-box">
                  <span class="sub-title">Riyadh</span>
                  <h4 class="title"><a href="{{ route('Life-Safety-System-Review-Riyadh') }}">Life Safety System Review & Construction Support</a></h4>
                </div>
                <a class="arry-btn" href="{{ route('Life-Safety-System-Review-Riyadh') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
                <div class="hover-content">
                  <span class="sub-title">Riyadh</span>
                  <h4 class="title"><a href="{{ route('Life-Safety-System-Review-Riyadh') }}">Life Safety System Review & Construction Support</a></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="case-block">
              <div class="inner-box">
                <figure class="image">
                  <img src="{{ asset('build/images/projects/case3.jpg')}}" alt="Image">
                </figure>
                <div class="content-box">
                  <span class="sub-title">Jeddah</span>
                  <h4 class="title"><a href="{{ route('Fire-Safety-Design-Review-Jeddah') }}">Fire Safety Design Review</a>
                  </h4>
                </div>
                <a class="arry-btn" href="{{ route('Fire-Safety-Design-Review-Jeddah') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
                <div class="hover-content">
                  <span class="sub-title">Jeddah</span>
                  <h4 class="title"><a href="{{ route('Fire-Safety-Design-Review-Jeddah') }}">Fire Safety Design Review</a></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="case-block">
              <div class="inner-box">
                <figure class="image">
                  <img src="{{ asset('build/images/projects/case4.jpg')}}" alt="Image">
                </figure>
                <div class="content-box">
                  <span class="sub-title">Riyadh</span>
                  <h4 class="title"><a href="{{ route('Multi-Stage-Fire-Safety-Riyadh') }}">Multi-Stage Fire Safety Design Review</a></h4>
                </div>
                <a class="arry-btn" href="{{ route('Multi-Stage-Fire-Safety-Riyadh') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
                <div class="hover-content">
                  <span class="sub-title">Riyadh</span>
                  <h4 class="title"><a href="{{ route('Multi-Stage-Fire-Safety-Riyadh') }}">Multi-Stage Fire Safety Design Review</a></h4>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="case-block">
              <div class="inner-box">
                <figure class="image">
                  <img src="{{ asset('build/images/projects/case5.jpg')}}" alt="Image">
                </figure>
                <div class="content-box">
                  <span class="sub-title">AlUla</span>
                  <h4 class="title"><a href="{{ route('Fire-Safety-Smoke-Modeling-AlUla') }}">Fire Safety & Smoke Modeling</a></h4>
                </div>
                <a class="arry-btn" href="{{ route('Fire-Safety-Smoke-Modeling-AlUla') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
                <div class="hover-content">
                  <span class="sub-title">AlUla</span>
                  <h4 class="title"><a href="{{ route('Fire-Safety-Smoke-Modeling-AlUla') }}">Fire Safety & Smoke Modeling</a></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="case-block">
              <div class="inner-box">
                <figure class="image">
                  <img src="{{ asset('build/images/projects/case6.jpg')}}" alt="Image">
                </figure>
                <div class="content-box">
                  <span class="sub-title">Makkah</span>
                  <h4 class="title"><a href="{{ route('Fire-Life-Safety-Management-Makkah') }}">End-to-End Fire & Life Safety Management</a></h4>
                </div>
                <a class="arry-btn" href="{{ route('Fire-Life-Safety-Management-Makkah') }}"><i class="fa-regular fa-arrow-up-right"></i></a>
                <div class="hover-content">
                  <span class="sub-title">Makkah</span>
                  <h4 class="title"><a href="{{ route('Fire-Life-Safety-Management-Makkah') }}">End-to-End Fire & Life Safety Management</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
      </div>
    </section>
    <!-- Service area end here -->

   <!-- Testimonial area start here -->
    <section class="testimonial-section-two" data-background="{{ asset('build/images/bg/testimonial-two-bg.png')}}">
      <div class="sec-shape">
        <img class="animation__rotateY" src="{{ asset('build/images/shape/dual-circle420.png')}}" alt="Image">
      </div>
      <div class="container">
        <div class="row g-5 g-xxl-0 align-items-center">
          <div class="col-lg-4 image-column">
            <div class="inner-column">
              <figure class="image">
                <img class="wow imageDownToUP" src="{{ asset('build/images/testimonial/Picture1.png')}}" alt="Image">

              </figure>
            </div>
          </div>
          <div class="col-lg-8 content-column">
            <div class="inner-column">
              <div class="swiper testimonial-slider-two">
                <div class="btn-wrp">
                </div>
                <div >
                  <div class="swiper-slide">
                    <div class="testimonial-block-two">
                     <h2 style="color: aliceblue;" class="title" data-animation="fadeInUp" data-delay=".5s">Sectors We Serve
                </h1>
                     <img class="wow imageDownToUP" src="{{ asset('build/images/bg/d1.png')}}" alt="Image">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial area end here -->

    <!-- Team area start here
 <section class="team-section pt-120 pb-120">
  <div class="team-shape wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
    <img class="sway__animation" src="{{ asset('build/images/shape/team-shape.png')}}" alt="Image">
  </div>
  <div class="container">
    <div class="sec-title center mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Meet the Team</h6>
      <h2 class="title wow splt-txt" data-splitting>Engineers, Leaders & Fire Safety Experts</h2>

    </div>



    <div class="row g-4">
        @foreach($teamMembers as $member)
      <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="team-block">
          <div class="inner-box">
            <figure class="image">
              <img src="{{ asset('storage/' . $member->photo) }}" alt="CEO Image">
            </figure>

            <div class="content-box">
              <h4 class="title"><a href="{{ route('team.details', $member->id) }}">{{ $member->name }}</a></h4>
              <p class="sub-title">{{ $member->title }}</p>
            </div>
          </div>
        </div>
      </div>

    @endforeach
 <div class="text-center">
    <a class="btn-one-light wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" href="{{ route('Team') }}">
        Show All
    </a>
</div>

    </div>

  </div>

</section>

 -->

    <!-- Growth area start here
  <section class="growth-section pt-120 pb-120" data-background="{{ asset('build/images/bg/growth-bg.jpg')}}">
  <div class="sec-shape">
    <img class="sway_Y__animation" src="{{ asset('build/images/shape/growth-shape.png')}}" alt="Image">
  </div>
  <div class="container">
    <div class="sec-title pb-50 mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Growth Indicators</h6>
      <div class="flex-content">
        <h2 class="title text-white wow splt-txt" data-splitting>Engineering Trust & Compliance <br> Driving Safety Forward</h2>
        <a class="btn-one-light border-0 rounded-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" href="{{ route('AboutUs') }}">Discover More</a>
      </div>
    </div>
    <div class="row g-5">


      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="growth-block">
          <div class="pie-graph">
            <div class="graph-outer">
              <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120" data-height="120" data-linecap="normal" value="90">
              <div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="2000"></span>%</div>
            </div>
          </div>
          <div class="content-box">
            <h4 class="title">Client Retention</h4>
            <p class="text">90% of our clients choose to work with us again due to quality, compliance & commitment.</p>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="growth-block">
          <div class="pie-graph">
            <div class="graph-outer">
              <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120" data-height="120" data-linecap="normal" value="95">
              <div class="inner-text count-box"><span class="count-text" data-stop="95" data-speed="2000"></span>%</div>
            </div>
          </div>
          <div class="content-box">
            <h4 class="title">Code Compliance</h4>
            <p class="text">Our design solutions achieve a 95% first-time approval rate with PACDA and Civil Defense.</p>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
        <div class="growth-block">
          <div class="pie-graph">
            <div class="graph-outer">
              <input type="text" class="dial" data-fgColor="#C6D936" data-bgColor="#fff" data-width="120" data-height="120" data-linecap="normal" value="75">
              <div class="inner-text count-box"><span class="count-text" data-stop="75" data-speed="2000"></span>%</div>
            </div>
          </div>
          <div class="content-box">
            <h4 class="title">Regional Coverage</h4>
            <p class="text">75% of our projects are delivered across Oman, UAE, and Saudi Arabia with consistent success.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

-->

    <!-- Team area end here -->


<!-- Testimonial area start here -->


<section class="testimonial-section">
  <div class="outer-box">
    <figure class="shape">
      <img src="{{ asset('build/images/shape/testimonial-shape.png')}}" alt="Image">
    </figure>
    <div class="swiper testimonial-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-block">
            <div class="inner-box">
              <div class="image-box">
                <div class="quate">
                    <svg width="33" height="26" viewBox="0 0 33 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M29.1965 2.87439C30.9987 4.85084 32.0801 7.00696 32.0801 10.6005C32.0801 16.8892 27.5745 22.4592 21.2666 25.334L19.6446 22.9982C25.592 19.764 26.8536 15.6314 27.214 12.9363C26.3129 13.4753 25.0513 13.655 23.7897 13.4753C20.5457 13.116 18.0225 10.6005 18.0225 7.18663C18.0225 5.56954 18.7434 3.95245 19.8248 2.69472C21.0864 1.43698 22.5282 0.897949 24.3304 0.897949C26.3129 0.897949 28.1151 1.79633 29.1965 2.87439ZM11.174 2.87439C12.9763 4.85084 14.0576 7.00696 14.0576 10.6005C14.0576 16.8892 9.55198 22.4592 3.24412 25.334L1.6221 22.9982C7.56951 19.764 8.83109 15.6314 9.19153 12.9363C8.29041 13.4753 7.02884 13.655 5.76727 13.4753C2.52322 13.116 7.62939e-05 10.6005 7.62939e-05 7.18663C7.62939e-05 5.56954 0.720974 3.95245 1.80232 2.69472C2.88367 1.43698 4.50569 0.897949 6.30794 0.897949C8.29041 0.897949 10.0927 1.79633 11.174 2.87439Z"
                          fill="#163839" />
                      </svg>
                </div>
                <figure class="image">
                  <img src="{{ asset('build/images/testimonial/Bahaa_big.jpg')}}" alt="Client">
                </figure>
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
              <div class="content-box">
                <h3 class="text">
                  "Our in-house subject matter experts include NFPA certified trainers who lead ongoing technical development and knowledge-sharing. We run a structured training and development program for graduate engineers, designed to build practical skills, code expertise, and long-term professional growth."
                </h3>
                <h4 class="title">Yogeesha V Ningaiah / <span>Senior Fire Protection Engineer</span></h4>
              </div>
            </div>
          </div>
        </div>


      </div>

      <div class="swiper-arry">
        <button class="testimonial-prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="testimonial-next"><i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>
  </div>
</section>

<!-- Testimonial area end here -->


    <!-- Testimonil area start here
    <section class="testimonial-section-four paralax__animation">
      <div class="map">
        <img src="{{ asset('build/images/shape/testimonial-four-map.png')}}" alt="Image">
      </div>
      <div class="hero-image">
        <img data-depth="0.01" src="{{ asset('build/images/testimonial/testimonial-four-hero.png')}}" alt="Image">
      </div>
      <div class="container">
        <div class="outer-box">
          <div class="testimonial-block-four">
            <div class="swiper testimonial-slider-four">
              <div class="swiper-wrapper">
                                <div class="swiper-slide">
                  <figure class="icon">
                        <h4 class="text">Riyadh</h4>
                    <p class="text" style="font-style: italic; opacity: 0.9;">Saudi Arabia</p>
                  </figure>
                      <p class="text" style="font-size: 24px; opacity: 0.8;">
                        Abraj Tawyniya, North Tower,
Ground Floor - Office 4
Al Olaya Dist,
King Fahad Road,
Riyadh 12211
Kingdom of Saudi Arabia
Email: info@amanfec.com
Phone: +966 126 555 488

                      </p>
                </div>
                <div class="swiper-slide">
                  <figure class="icon">
                         <h4 class="text">Muscat</h4>
                    <p class="text" style="font-style: italic; opacity: 0.9;">Sultanate of Oman</p>
                  </figure>
                      <p class="text" style="font-size: 24px; opacity: 0.8;">
                        Al Muzn Mall,
3rd Floor - Office 301
Al Mawaleh, North A’Seeb
Muscat 101
Sultanate of Oman
Email: info@amanfec.com
Phone: +968 2407 4744

                      </p>
                </div>

                <div class="swiper-slide">
                  <figure class="icon">
                     <h4 class="text">Jeddah</h4>
                    <p class="text" style="font-style: italic; opacity: 0.9;">Saudi Arabia</p>
                  </figure>
                      <p class="text" style="font-size: 24px; opacity: 0.8;">
                        King Road Tower,
18th Floor - Office 1801
Ash Shati Dist,
King Abdul Aziz Road
Jeddah 23412,
Kingdom of Saudi Arabia
Email: info@amanfec.com
Phone: +966 126 555 488

                      </p>
                </div>
                 <div class="swiper-slide">
                  <figure class="icon">
                     <h4 class="text">Al Khobar</h4>
                    <p class="text" style="font-style: italic; opacity: 0.9;">Saudi Arabia</p>
                  </figure>
                      <p class="text" style="font-size: 24px; opacity: 0.8;">
                        Al Jarbou Tower
Ground Floor - Office G01
Al Aqrabiyah Dist,
Custodian of The Two Holy Mosques Rd,
Al Khobar 3580
Kingdom of Saudi Arabia
Email: info@amanfec.com
Phone: +966 13 66 333 06

                      </p>
                </div>
                 <div class="swiper-slide">
                  <figure class="icon">
                       <h4 class="text">Abu Dhabi</h4>
                    <p class="text" style="font-style: italic; opacity: 0.9;">United Arab Emirates</p>
                  </figure>
                      <p class="text" style="font-size: 24px; opacity: 0.8;">
                        Al Wahda City Tower
20th Floor - Office 09
Hazaa Bin Zayed the First Street,
Abu Dhabi 25200
United Arab Emirates
Email: info@amanfec.com
Phone: +971 28 18 6717

                      </p>
                </div>
              </div>
            </div>
            <div class="swiper testimonial-slider-thumb-four">
              <div class="swiper-wrapper">
                                <div class="swiper-slide">
                  <div class="info">
                    <h4 class="title">Riyadh</h4>
                    <p class="sub-title">Saudi Arabia</p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="info">
                    <h4 class="title">Muscat</h4>
                    <p class="sub-title" >Sultanate of Oman</p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="info">
                    <h4 class="title">Jeddah</h4>
                    <p class="sub-title">Saudi Arabia</p>
                  </div>
                </div>
                   <div class="swiper-slide">
                  <div class="info">
                    <h4 class="title">Al Khobar</h4>
                    <p class="sub-title">Saudi Arabia</p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="info">
                    <h4 class="title">Abu Dhabi</h4>
                    <p class="sub-title">United Arab Emirates
</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  Testimonil area end here -->

<!-- Blog area start here -->
<section class="blog-section-two pt-120 pb-120">
  <div class="container">
    <div class="sec-title mb-50">
      <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="color: #fff; font-weight: bold;">Insights & News</h6>
      <div class="flex-content">
        <h2 class="title wow splt-txt" data-splitting>Fire Safety Consulting <br> Updates & Insights</h2>
      </div>
    </div>

    <div class="row g-4">
      @foreach($latestNews as $news)
      <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
        <article class="blog-block-two">
          <div class="image-box">
            <figure class="image">
              <img src="{{ asset('storage/' . $news->cover_image) }}" alt="{{ $news->title }}">
            </figure>
          </div>

          <div class="content-box">
            <h4 class="title">
              <a class="stretched-link" href="{{ route('news.details', $news->slug) }}">{{ $news->title }}</a>
            </h4>
            <a class="btn-one-rounded" href="{{ route('news.details', $news->slug) }}">
              Read More <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </article>
      </div>
      @endforeach

      <div class="text-center">
        <a class="btn-one-light wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" href="{{ route('News') }}">
          Show All
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Blog area end here -->

@push('styles')
<style>
/* ====== البطاقة الطولية بالصورة ====== */
.blog-block-two{
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  background: #000;
  /* نسبة طولية ثابتة 3:4 */
  aspect-ratio: 3 / 4;
  /* Fallback للمتصفحات القديمة: يحاكي النسبة */
  height: 0;
  padding-top: calc(100% * (4 / 3)); /* 4/3 = (الارتفاع/العرض) */
}
@supports (aspect-ratio: 3 / 4){
  .blog-block-two{
    height: auto;
    padding-top: 0;
  }
}

/* ظل وحدود خفيفة */
.blog-block-two{
  border: 1px solid rgba(255,255,255,0.08);
  box-shadow: 0 8px 22px rgba(0,0,0,0.08);
  transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
}
.blog-block-two:hover{
  transform: translateY(-4px);
  border-color: rgba(214,40,40,0.45);
  box-shadow: 0 12px 28px rgba(0,0,0,0.12);
}

/* الصورة تملأ الكرت بالكامل */
.blog-block-two .image-box,
.blog-block-two .image-box .image,
.blog-block-two .image-box img{
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
}
.blog-block-two .image-box img{
  object-fit: cover;     /* يملأ مع القص */
  object-position: center;
  display: block;
  transform: scale(1.01);
  transition: transform .45s ease;
}
.blog-block-two:hover .image-box img{
  transform: scale(1.06); /* تكبير بسيط عند المرور */
}

/* تدرّج أسفل لتوضيح النص */
.blog-block-two .content-box{
  position: absolute;
  inset: auto 0 0 0;
  padding: 16px 16px 14px;
  background: linear-gradient(to top, rgba(0,0,0,0.72), rgba(0,0,0,0.45), transparent 70%);
  color: #fff;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

/* العنوان: احجز 3 أسطر دائمًا */
.blog-block-two .content-box .title{
  --lines: 3;
  line-height: 1.35;
  margin: 0;
  font-size: 1.05rem;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: var(--lines);
  overflow: hidden;
  text-overflow: ellipsis;
  min-height: calc(1.35em * var(--lines)); /* يحجز ارتفاع 3 أسطر */
}
.blog-block-two .content-box .title a{
  color: #fff;
  text-decoration: none;
}

/* الزر */
.blog-block-two .content-box .btn-one-rounded{
  align-self: flex-start;
  margin-top: 6px;
  background: #d62828;
  color: #fff;
  padding: 8px 14px;
  border-radius: 22px;
  font-size: 14px;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: background .3s ease, transform .2s ease;
}
.blog-block-two .content-box .btn-one-rounded:hover{
  background: #b81f1f;
  transform: translateY(-1px);
}

/* اجعل <figure> بلا مسافات افتراضية */
.blog-block-two .image-box figure{
  margin: 0;
}

/* لجعل الكرت بأكمله قابل للنقر عبر .stretched-link (Bootstrap-like سلوك إن أردت) */
.blog-block-two .stretched-link::after{
  content: "";
  position: absolute;
  inset: 0;
}
/* العنوان مع خلفية حمراء شفافة وحدود ناعمة */
.blog-block-two .content-box .title {
  --lines: 3;
  line-height: 1.4;
  margin: 0;
  font-size: 1.3rem; /* تكبير الخط */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: var(--lines);
  overflow: hidden;
  text-overflow: ellipsis;
  min-height: calc(1.4em * var(--lines));
}

/* الزر بنفس النمط */
.blog-block-two .content-box .btn-one-rounded {
  align-self: flex-start;
  margin-top: 6px;
  color: #fff;
  padding: 8px 14px;
  border-radius: 22px;
  font-size: 15px; /* تكبير الخط */
  font-weight: 500;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: background .3s ease, transform .2s ease;
}
.blog-block-two .content-box .btn-one-rounded:hover {
  background: rgba(184, 31, 31, 0.85); /* أغمق عند المرور */
  transform: translateY(-1px);
}
/* الصندوق السفلي مع تدرج غامق */
.blog-block-two .content-box {
  position: absolute;
  inset: auto 0 0 0;
  padding: 16px 16px 14px;
  background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.85) 0%,   /* أسفل غامق جدًا */
    rgba(0, 0, 0, 0.6) 40%,   /* تدرج متوسط */
    rgba(0, 0, 0, 0.3) 70%,   /* شبه شفاف */
    transparent 100%          /* شفاف تمامًا */
  );
  color: #fff;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

/* جعل الأعمدة تتمدّد بالتساوي داخل الصف */
.team-section .row {
  display: flex;
  flex-wrap: wrap;
}
.team-section .col-md-6.col-xl-3 {
  display: flex;
}
.team-section .team-block,
.team-section .team-block .inner-box {
  display: flex;
  flex-direction: column;
  width: 100%;
}

/* تثبيت مساحة الصورة لمنع تغيّر الارتفاع */
.team-section .image {
  aspect-ratio: 4 / 5; /* عدّل النسبة إن لزم لتطابق تصميمك الحالي */
  overflow: hidden;
}
.team-section .image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* توحيد ارتفاع صندوق المحتوى عبر حساب يعتمد على عدد الأسطر */
:root {
  --title-font-size: 1.6rem;   /* نفس حجم .title الحالي */
  --title-line-height: 1.3;      /* إن كان لديك قيمة مختلفة استخدمها */
  --title-lines: 2;              /* أقصى أسطر للاسم */

  --sub-font-size: 0.95rem;      /* نفس حجم .sub-title الحالي (قرّبته) */
  --sub-line-height: 1.4;
  --sub-lines: 3;                /* أقصى أسطر للمسمى */

  --content-padding: 1.25rem;    /* مجموع الحشوات داخل content-box تقريبًا */
}

/* صندوق المحتوى يأخذ حدًا أدنى موحّدًا */
.team-section .content-box {
 display: flex;
  flex-direction: column;
  justify-content: flex-start; /* النصوص تبدأ من الأعلى */
  min-height: calc(
    (var(--title-lines) * var(--title-font-size) * var(--title-line-height)) +
    (var(--sub-lines)   * var(--sub-font-size)   * var(--sub-line-height)) +
    var(--content-padding)
  );
}

/* قصّ النص لعدد أسطر محدّد لمنع تمدّد البطاقة */
.team-section .content-box .title,
.team-section .content-box .sub-title {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.team-section .content-box .title {
  -webkit-line-clamp: var(--title-lines);
  line-height: var(--title-line-height);
  font-size: var(--title-font-size);
  margin-bottom: 0.35rem; /* عدّل حسب تصميمك */
}

.team-section .content-box .sub-title {
  -webkit-line-clamp: var(--sub-lines);
  line-height: var(--sub-line-height);
  font-size: var(--sub-font-size);
}
.team-section .content-box .title a {
  color: inherit; /* يحافظ على اللون الأساسي الحالي */
  text-decoration: none;
  transition: color 0.3s ease;
}

.team-section .team-block:hover .content-box .title a {
  color: #d62828;
}
.no-break-inline {
  display: inline !important;        /* إجبار البلوك يكون inline */
  white-space: nowrap !important;    /* يمنع الكسر */
}

.no-break-inline span {
  display: inline !important;        /* كل سبان داخله يكون inline */
  white-space: nowrap !important;
}

</style>
@endpush


</x-app.app-layout>