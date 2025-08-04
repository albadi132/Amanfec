<x-app.app-layout>

  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('Services') }}">Services</a></li>
          <li>Modeling Services</li>
        </ul>
        <h1 class="title">Modeling Services</h1>
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
              <img src="{{ asset('build/images/Services/modeling-services.png')}}" alt="Modeling Services">
            </div>
            <div class="blog-details__content">

              <h3 class="blog-details__title">Precision-Based Fire and Safety Modeling</h3>

              <p class="blog-details__text-2">
                Aman Fire Engineering Consultancy provides state-of-the-art fire and life safety modeling services to support performance-based design, risk assessment, and regulatory compliance. By simulating real-world fire and evacuation scenarios, we empower designers, developers, and code officials to make informed, data-driven decisions.
              </p>

              <p class="blog-details__text-2">
                <strong>CFD (Computational Fluid Dynamics):</strong> Our CFD simulations deliver advanced insights into the movement of heat, smoke, and air within buildings under fire conditions. This enables optimization of ventilation systems and smoke control strategies for occupant safety.
              </p>

              <p class="blog-details__text-2">
                <strong>FDS (Fire Dynamics Simulator):</strong> Using industry-standard tools like FDS, we model fire growth, smoke spread, and temperature distribution with high accuracy. These simulations support performance-based alternative designs and AHJ approvals.
              </p>

              <p class="blog-details__text-2">
                <strong>Evacuation and Smoke Modeling:</strong> We perform egress simulations under different fire and smoke scenarios, helping evaluate occupant flow, bottlenecks, and evacuation times. This is critical for buildings with high occupancy or complex geometries.
              </p>

              <p class="blog-details__text-2">
                <strong>Fire Dynamics and Performance Simulations:</strong> Our modeling team conducts comprehensive simulations to assess how fire behaves within unique architectural environments. These models help validate protection systems and justify design decisions based on performance criteria.
              </p>

              <p class="blog-details__text-2">
                With deep technical expertise and access to globally recognized modeling platforms, Aman FEC transforms complex fire dynamics into actionable insights — ensuring safety and compliance without compromising design ambition.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Details End-->

</x-app.app-layout>
