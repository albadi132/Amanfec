<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- 🔍 SEO Title -->
  <title>AMAN Fire Protection Consultancy | Trusted Safety & Risk Experts</title>


  <meta name="description" content="AMAN Fire Protection Consultancy provides expert solutions in fire safety, risk assessment, system design, and compliance. We help protect lives and assets.">

  <meta name="keywords" content="fire safety, risk assessment, fire protection, safety consultancy, AMAN Oman, fire system design, NFPA, firefighting, consultancy">

  <meta name="author" content="Salim Albadi - salim.albadi@spacetechno.om">

  <meta property="og:title" content="AMAN Fire Protection Consultancy" />
  <meta property="og:description" content="Expert consultancy in fire safety and protection systems in Oman and GCC." />
  <meta property="og:image" content="{{ asset('build/images/about/about-two-image.png')}}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="website" />

  <!-- Stylesheets -->
  <link href="{{ asset('build/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('build/css/flatpickr.min.css')}}" rel="stylesheet">
  <link href="{{ asset('build/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('build/css/slick-theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('build/css/slick.css')}}">

  <link rel="shortcut icon" href="{{ asset('build/images/favicon.png')}}" type="image/png">
  <link rel="icon" href="{{ asset('build/images/favicon.png')}}" type="image/png">

<style>
.fixed-social-icons {
    position: fixed;
    bottom: 20px; /* المسافة من أسفل الصفحة */
    left: 20px; /* المسافة من يسار الصفحة */
    z-index: 9999;
    display: flex;
    flex-direction: column;
    gap: 10px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.fixed-social-icons li a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: #d62828; /* لون الخلفية */
    color: #fff; /* لون الأيقونة */
    border-radius: 50%;
    text-decoration: none;
    font-size: 18px;
    transition: all 0.3s ease;
}

.fixed-social-icons li a:hover {
    background: #111; /* لون مختلف عند المرور */
    transform: translateY(-3px);
}
</style>
   @stack('styles')
  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if lt IE 9]><script src="{{ asset('build/js/html5shiv.js')}}"></script><![endif]-->
  <!--[if lt IE 9]><script src="{{ asset('build/js/respond.js')}}"></script><![endif]-->
</head>

<body>
  <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-one">

      <!-- Header Top -->
        <!--
      <div class="header-top">
        <div class="auto-container">

          <div class="top-left">

            <ul class="info-list">
              <li>
  <i class="fa-solid fa-envelope"></i>
  <a href="mailto:info@amanfec.com"><span>info@amanfec.com</span></a>
              </li>
            <li><i class="fa-solid fa-location-dot"></i>KSA, Oman, UAE, Qatar, Bahrain, Kuwait, Iraq</li>
            </ul>
          </div>

          <div class="top-right">
            <ul class="useful-links">
              <li><a href="{{ route('AboutUs') }}">About</a></li>
              <li><a href="{{ route('ContactUs') }}">Contact</a></li>
            </ul>
            <ul class="top-social-icon">

              <li><a href="https://www.facebook.com/people/Aman-Fire-Protection-Consultants/100068903859472/#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="https://x.com/AmanFEC?lang=en"><i class="fa-brands fa-x-twitter"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCnYnpcC_Jih83SLvQQ20VAQ"><i class="fa-brands fa-square-youtube"></i></a></li>

              <li><a href="https://www.instagram.com/aman.fec/?hl=en"><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a href="https://www.linkedin.com/company/aman-intl/"><i class="fa-brands fa-linkedin-in"></i></a></li>

            </ul>
          </div>

        </div>
      </div>
      -->
      <!-- Header Top -->
<!-- أيقونات السوشيال ميديا الثابتة -->
<ul class="fixed-social-icons">
    <li><a href="https://www.instagram.com/aman.fec/?hl=en" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
    <li><a href="https://www.linkedin.com/company/aman-intl/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
</ul>
      <!-- Main box -->
      <div class="main-box">
        <div class="logo-box">
          <div class="logo"><a href="/"><img  src="{{ asset('build/images/logo/logo.png')}}" alt="" title="Consultez"></a></div>
        </div>
        <!--Nav Box-->
        <div class="nav-outer">
          <nav class="nav main-menu">
            <ul class="navigation">
              <li><a href="{{ route('AboutUs') }}">About Us</a></li>
              <li><a href="{{ route('Services') }}">Services</a></li>
              <li><a href="{{ route('Projects') }}">Our Projects</a></li>
              <li><a href="{{ route('Team') }}">Team Members</a></li>
              <li><a href="{{ route('News') }}">News</a></li>
               <li><a href="{{ route('Careers') }}">Careers</a></li>
            </ul>
          </nav>
          <!-- Main Menu End-->
        </div>
        <div class="outer-box">
          <div class="info-box">
            <!--
            <div class="call-info">
              <i class="fa-solid fa-phone ring__animation"></i>
              <div>
                <h6 class="title">Phone:</h6>
                <a>+968 2407 4744</a>
              </div>
            </div>
            -->
            <a class="btn-two" href="{{ route('ContactUs') }}">Contact Us</a>
          </div>
          <div class="mobile-nav-toggler d-block d-lg-none"><i class="icon lnr-icon-bars"></i></div>
          <!-- Mobile Nav toggler -->
        </div>
      </div>
      <div class="auto-container">
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>
          <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
          <nav class="menu-box">
            <div class="upper-box">
              <div class="nav-logo"><a href="/"><img  style="width: 120px;height: 30px;"  src="{{ asset('build/images/logo/logo.png')}}" alt=""></a></div>
              <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
          <ul class="navigation clearfix d-block d-lg-none">
            <!--Keep This Empty / Menu will come through Javascript-->
          </ul>


            <ul class="social-links">
               <li><a href="https://www.instagram.com/aman.fec/?hl=en"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="https://www.linkedin.com/company/aman-intl/"><i class="fa-brands fa-linkedin-in"></i></a></li>
              <!--
             <li><a href="https://www.facebook.com/people/Aman-Fire-Protection-Consultants/100068903859472/#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCnYnpcC_Jih83SLvQQ20VAQ"><i class="fa-brands fa-square-youtube"></i></a></li>
              <li><a href="https://x.com/AmanFEC?lang=en"><i class="fa-brands fa-x-twitter"></i></a></li>
              -->


            </ul>
          </nav>
        </div>
        <!-- End Mobile Menu -->


        <!-- Sticky Header  -->
        <div class="sticky-header">
          <div class="auto-container">
            <div class="inner-container">
              <!--Logo-->
              <div class="logo">
                <a href="/"><img src="{{ asset('build/images/logo/logo.png')}}" alt=""></a>
              </div>
              <!--Right Col-->
              <div class="nav-outer">
                <!-- Main Menu -->
                <nav class="main-menu">
                  <div class="navbar-collapse show collapse clearfix">
                    <ul class="navigation clearfix">
                      <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                  </div>
                </nav><!-- Main Menu End-->
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
              </div>
            </div>
          </div>
        </div><!-- End Sticky Menu -->
      </div>
    </header>
    <!--End Main Header -->


   {{ $slot }}

    <!-- Footer area start here -->
 <footer class="main-footer footer-style-one">
  <div class="outer-box">

    <div class="footer-left">
      <div class="logo">

      </div>

    </div>

    <div class="row g-0 w-100">
      <div class="col-xl-8 left-column order-2 order-xl-1">

        <!-- Footer Links -->
        <div class="widgets-section">
          <div class="row g-4">
            <div class="col-lg-4 footer-column">
              <div class="footer-widget links-widget">
                <h4 class="widget-title">Our Services</h4>
                <div class="widget-content">
                  <ul class="user-links">
                    <li><a href="{{ route('Code-Consulting') }}">Code Consulting</a></li>
                    <li><a href="{{ route('Fire-Protection-Design') }}">Fire Protection Design</a></li>
                    <li><a href="{{ route('Modeling-Services') }}">Modeling Services</a></li>
                    <li><a href="{{ route('Construction-and-Site-Services') }}">Construction & Site Services</a></li>
                    <li><a href="{{ route('Testing-and-Commissioning') }}">Testing & Commissioning</a></li>
                    <li><a href="{{ route('Surveys-and-Risk-Assessments') }}">Surveys & Risk Assessments</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-4 footer-column">
              <div class="footer-widget links-widget">
                <h4 class="widget-title">Quick Links</h4>
                <div class="widget-content">
                  <ul class="user-links">
                    <li><a href="{{ route('AboutUs') }}">About Us</a></li>
                    <li><a href="{{ route('Projects') }}">Projects</a></li>
                    <li><a href="{{ route('Services') }}">Services</a></li>
                    <li><a href="{{ route('Team') }}">Our Team</a></li>
                  </ul>
                </div>
              </div>
            </div>

 <div class="col-lg-4 footer-column">
  <div class="footer-widget links-widget">
    <h4 class="widget-title">Our Offices</h4>
    <p class="mb-3 text-white-50">
      Find the nearest Aman office across Riyadh, Jeddah, Al Khobar, Muscat, and Abu Dhabi.
      View addresses and directions.
    </p>
    <div class="input-feild">
      <a class="btn-one-rounded" href="{{ route('offices') }}" style="color: #fff; font-weight: bold;">
        Find an office <i class="fa-regular fa-angle-right"></i>
      </a>
    </div>
  </div>
</div>
          </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
          <p class="copyright-text">
            © 2025 Aman Fire Protection Consultants. All rights reserved.
          </p>
        </div>

      </div>

      <!-- Right Column CTA -->
      <div class="col-xl-4 right-column order-1 order-xl-2">
        <div class="inner-column">
          <h3 class="title">Request a Consultation</h3>
          <a class="circle-btn" href="{{ route('ContactUs') }}">Contact Us <i class="fa-regular fa-arrow-up-right"></i></a>
          <div class="mt-10">
            <h5 class="time">08:00 AM - 05:00 PM</h5>
            <h5 class="date">Sunday - Thursday</h5>
          </div>
        </div>
        <div class="shape">
          <img src="{{ asset('build/images/shape/footer-one-shape.png')}}" alt="Footer Shape">
        </div>
      </div>
    </div>

  </div>
</footer>

    <!-- Footer area end here -->

  </div><!-- End Page Wrapper -->
 <script src="{{ asset('build/js/jquery.js')}}"></script>
  <script src="{{ asset('build/js/popper.min.js')}}"></script>
  <script src="{{ asset('build/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('build/js/slick.min.js')}}"></script>
  <script src="{{ asset('build/js/slick-animation.min.js')}}"></script>
  <script src="{{ asset('build/js/jquery.fancybox.js')}}"></script>
  <script src="{{ asset('build/js/wow.js')}}"></script>
  <script src="{{ asset('build/js/appear.js')}}"></script>
  <script src="{{ asset('build/js/mixitup.js')}}"></script>
  <script src="{{ asset('build/js/flatpickr.js')}}"></script>
  <script src="{{ asset('build/js/swiper.min.js')}}"></script>
  <script src="{{ asset('build/js/gsap.min.js')}}"></script>
  <script src="{{ asset('build/js/ScrollTrigger.min.js')}}"></script>
  <script src="{{ asset('build/js/SplitText.min.js')}}"></script>
  <script src="{{ asset('build/js/nice-select.min.js')}}"></script>
  <script src="{{ asset('build/js/knob.js')}}"></script>
  <script src="{{ asset('build/js/parallax.js')}}"></script>
  <script src="{{ asset('build/js/vanilla-tilt.js')}}"></script>
  <script src="{{ asset('build/js/splitting.js')}}"></script>
  <script src="{{ asset('build/js/splitType.js')}}"></script>
  <script src="{{ asset('build/js/script-gsap.js')}}"></script>
  <script src="{{ asset('build/js/script.js')}}"></script>
    @stack('scripts')
</body>

</html>