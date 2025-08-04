<x-app.app-layout>
  <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
      <div class="auto-container">
        <div class="title-outer">
          <ul class="page-breadcrumb">
            <li><a href="/">Home</a></li>
            <li>Contact Us</li>
          </ul>
          <h1 class="title">Contact Us</h1>
        </div>
      </div>
    </section>
    <!-- end main-content -->





 <!-- Contact area start here -->
    <section class="contact-section-four">
      <div class="container">
        <div class="outer-box">
          <div class="sec-title center mb-50">
            <h6 class="sub-title wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Contact With Us Now</h6>
            <h2 class="title wow splt-txt" data-splitting>Feel Free to Write Our <br> Alen Hispro</h2>
          </div>
                    @if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
          <div class="contact-block-four">
            <form id="contact_form" name="contact_form" action="{{ route('contact.submit') }}" method="POST">
                @csrf
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="input-feild">
                    <input name="form_name" type="text" placeholder="Your Name">
                    <div class="icon">
                      <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M0.554688 19.25C0.554688 15.384 4.00514 12.25 8.26148 12.25C12.5179 12.25 15.9683 15.384 15.9683 19.25H14.0416C14.0416 16.3505 11.4537 14 8.26148 14C5.06922 14 2.48139 16.3505 2.48139 19.25H0.554688ZM8.26148 11.375C5.06798 11.375 2.48139 9.02563 2.48139 6.125C2.48139 3.22438 5.06798 0.875 8.26148 0.875C11.455 0.875 14.0416 3.22438 14.0416 6.125C14.0416 9.02563 11.455 11.375 8.26148 11.375ZM8.26148 9.625C10.3905 9.625 12.1149 8.05875 12.1149 6.125C12.1149 4.19125 10.3905 2.625 8.26148 2.625C6.13248 2.625 4.40809 4.19125 4.40809 6.125C4.40809 8.05875 6.13248 9.625 8.26148 9.625ZM16.2416 12.865C18.9204 13.9616 20.785 16.408 20.785 19.25H18.8583C18.8583 17.1185 17.4598 15.2837 15.4508 14.4612L16.2416 12.865ZM15.5793 2.98656C17.5042 3.7074 18.8583 5.42816 18.8583 7.4375C18.8583 9.94893 16.743 12.0096 14.0416 12.2304V10.469C15.6761 10.2569 16.9316 8.981 16.9316 7.4375C16.9316 6.22943 16.1625 5.18528 15.0444 4.68681L15.5793 2.98656Z"
                          fill="#092D3C" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-feild">
                    <input name="form_email" type="text" placeholder="Email Address">
                    <div class="icon">
                      <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M22.4031 0.875C22.9859 0.875 23.4582 1.30406 23.4582 1.83333V17.173C23.4582 17.6987 22.9778 18.125 22.4118 18.125H3.40273C2.8248 18.125 2.35629 17.6986 2.35629 17.173V16.2083H21.348V4.99583L12.9073 11.8958L2.35629 3.27083V1.83333C2.35629 1.30406 2.82868 0.875 3.41139 0.875H22.4031ZM8.68687 12.375V14.2917H0.246094V12.375H8.68687ZM5.52158 7.58333V9.5H0.246094V7.58333H5.52158ZM20.89 2.79167H4.92454L12.9073 9.31725L20.89 2.79167Z"
                          fill="#092D3C" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-feild">
                    <input name="form_phone"  type="text" placeholder="Enter Phone">
                    <div class="icon">
                      <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.98874 0.832031V2.4987H12.4936V0.832031H14.3285V2.4987H17.9984C18.5052 2.4987 18.9159 2.8718 18.9159 3.33203V16.6654C18.9159 17.1256 18.5052 17.4987 17.9984 17.4987H1.48388C0.977179 17.4987 0.566406 17.1256 0.566406 16.6654V3.33203C0.566406 2.8718 0.977179 2.4987 1.48388 2.4987H5.15379V0.832031H6.98874ZM17.081 9.16536H2.40136V15.832H17.081V9.16536ZM5.15379 4.16536H2.40136V7.4987H17.081V4.16536H14.3285V5.83203H12.4936V4.16536H6.98874V5.83203H5.15379V4.16536Z"
                          fill="#092D3C" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-feild">
                    <input placeholder="Enter Subject"  type="text" name="form_subject">
                    <div class="icon">
                      <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.98874 0.832031V2.4987H12.4936V0.832031H14.3285V2.4987H17.9984C18.5052 2.4987 18.9159 2.8718 18.9159 3.33203V16.6654C18.9159 17.1256 18.5052 17.4987 17.9984 17.4987H1.48388C0.977179 17.4987 0.566406 17.1256 0.566406 16.6654V3.33203C0.566406 2.8718 0.977179 2.4987 1.48388 2.4987H5.15379V0.832031H6.98874ZM17.081 9.16536H2.40136V15.832H17.081V9.16536ZM5.15379 4.16536H2.40136V7.4987H17.081V4.16536H14.3285V5.83203H12.4936V4.16536H6.98874V5.83203H5.15379V4.16536Z"
                          fill="#092D3C" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="input-feild textarea-feild">
                    <textarea name="form_message" placeholder="Write Message"></textarea>
                    <div class="icon">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M4.20621 14.8885L15.3724 4.7464L13.8154 3.33218L2.64921 13.4743V14.8885H4.20621ZM5.11829 16.8885H0.447266V12.6458L13.0369 1.21086C13.4669 0.820339 14.1639 0.820339 14.5939 1.21086L17.708 4.03929C18.1379 4.42981 18.1379 5.06298 17.708 5.4535L5.11829 16.8885ZM0.447266 18.8885H20.2647V20.8885H0.447266V18.8885Z"
                          fill="#092D3C" />
                      </svg>
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn-one mt-4 mx-auto" data-animation="fadeInUp" data-delay=".8s"> Submit <i class="fa-solid fa-angle-right ms-2"></i></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="google-map">
    <iframe
  width="100%"
  height="600"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps?q=Al+Muzn+Mall,+3rd+Floor+-+Office+301,+Al+Mawaleh,+North+A%E2%80%99Seeb,+Muscat+101,+Sultanate+of+Oman&output=embed">
</iframe>  </div>
    </section>
    <!-- Contact area end here -->


    <!-- Testimonil area start here -->
    <section class="testimonial-section-four paralax__animation">
      <div class="map">
        <img src="http://127.0.0.1:8000/build/images/shape/testimonial-four-map.png" alt="Image">
      </div>
      <div class="hero-image">
        <img data-depth="0.01" src="http://127.0.0.1:8000/build/images/testimonial/testimonial-four-hero.png" alt="Image">
      </div>
      <div class="container">
        <div class="outer-box">
          <div class="testimonial-block-four">
            <div class="swiper testimonial-slider-four">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <figure class="icon">
                         <h4 class="text">Muscat</h4>
                    <p class="text">Sultanate of Oman</p>
                  </figure>
                      <p class="text">
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
                        <h4 class="text">Riyadh</h4>
                    <p class="text">Saudi Arabia</p>
                  </figure>
                      <p class="text">
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
                     <h4 class="text">Jeddah</h4>
                    <p class="text">Saudi Arabia</p>
                  </figure>
                      <p class="text">
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
                    <p class="text">Saudi Arabia</p>
                  </figure>
                      <p class="text">
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
                    <p class="text">United Arab Emirates</p>
                  </figure>
                      <p class="text">
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
                    <h4 class="title">Muscat</h4>
                    <p class="sub-title">Sultanate of Oman</p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="info">
                    <h4 class="title">Riyadh</h4>
                    <p class="sub-title">Saudi Arabia</p>
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
    <!-- Testimonil area end here -->

</x-app.app-layout>