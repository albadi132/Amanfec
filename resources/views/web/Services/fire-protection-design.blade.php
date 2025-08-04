<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Services') }}">Services</a></li>
          <li>Fire Protection Design</li>
        </ul>
        <h1 class="title">Fire Protection Design</h1>
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
              <img src="{{ asset('build/images/Services/FIRE-PROTECTION-SYSTEM-DESIGN.png')}}" alt="Fire Protection Design">
            </div>
            <div class="blog-details__content">

              <h3 class="blog-details__title">Advanced Fire Protection System Design</h3>

              <p class="blog-details__text-2">
                At Aman Fire Engineering Consultancy, our Fire Protection Design services are built on deep technical expertise and a commitment to protecting lives and property. We work closely with project teams from concept to construction, ensuring fire protection systems are engineered to comply with local and international codes while meeting the functional needs of the facility.
              </p>

              <p class="blog-details__text-2">
                <strong>Sprinkler and Standpipe Systems:</strong> We design comprehensive sprinkler and standpipe networks tailored to building use and hazard classification. Our systems are optimized for flow rates, pressure demands, and hydraulic efficiency to ensure reliable fire suppression performance.
              </p>

              <p class="blog-details__text-2">
                <strong>Fire Alarm and Detection Systems:</strong> We develop integrated alarm and detection systems using cutting-edge technologies, ensuring early warning capabilities across all occupancy types. Our designs meet the stringent requirements of NFPA and civil defense authorities.
              </p>

              <p class="blog-details__text-2">
                <strong>Fire Suppression Systems (Gas, Foam, Water Mist):</strong> For specialized environments such as data centers, industrial facilities, or high-value asset spaces, we provide clean agent gas systems, high-expansion foam, and water mist solutions — each selected for its suitability and minimal impact on operations.
              </p>

              <p class="blog-details__text-2">
                <strong>Smoke Control and Mass Notification:</strong> Our team designs engineered smoke management systems, including pressurization, exhaust, and compartmentation strategies. Additionally, we incorporate mass notification systems to facilitate occupant communication during emergencies.
              </p>

              <p class="blog-details__text-2">
                By integrating performance, compliance, and innovation, Aman Fire Engineering Consultancy delivers tailored fire protection designs that support safety, sustainability, and operational continuity for a wide range of buildings and industries.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Details End-->

</x-app.app-layout>
