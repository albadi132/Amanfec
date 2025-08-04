<!DOCTYPE html>

<html
  lang="en"
  class="dark-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="build/assets/assets/"
  data-template="vertical-menu-template-no-customizer-starter">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ config('app.name', 'Dashboard') }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
   <link rel="shortcut icon" href="{{ asset('build/images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{ asset('build/images/favicon.ico')}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('build/assets/assets/vendor/fonts/boxicons.css')}}" />
    <!-- <link rel="stylesheet" href="{{ asset('build/assets/assets/vendor/fonts/fontawesome.css')}}" /> -->
    <!-- <link rel="stylesheet" href="{{ asset('build/assets/assets/vendor/fonts/flag-icons.css')}}" /> -->

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/assets/vendor/css/rtl/core-dark.css')}}" />
    <link rel="stylesheet" href="{{ asset('build/assets/assets/vendor/css/rtl/theme-default-dark.css')}}" />
    <link rel="stylesheet" href="{{ asset('build/assets/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
 @stack('styles')
    <!-- Helpers -->
    <script src="{{ asset('build/assets/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('build/assets/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/" class="app-brand-link">
             <img style="width: 140px;height: 30px;"  src="{{ asset('build/images/logo/logo.png')}}" alt="">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
              <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-divider mt-0"></div>

          <div class="menu-inner-shadow"></div>

          <x-dashboard.menu />

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-xxl">
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="bx bx-menu bx-sm"></i>
                </a>
              </div>

              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="{{ asset('build/assets/assets/img/avatars/user-vector.jpg')}}" alt class="rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="{{ asset('build/assets/assets/img/avatars/user-vector.jpg')}}" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-medium d-block lh-1">{{ Auth::user()->name }}</span>
                              <small>Admin</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                          <i class="bx bx-user me-2"></i>
                          <span class="align-middle">My Profile</span>
                        </a>
                      </li>

                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                      <!-- Logout Link -->
<a class="dropdown-item" href="#"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
  <i class="bx bx-power-off me-2"></i>
  <span class="align-middle">Log Out</span>
</a>

<!-- Hidden Logout Form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
                </ul>
              </div>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                {{ $slot }}
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  © {{ date('Y') }}, developed by <a href="https://spacetechno.om/" class="footer-link fw-medium">Space Technology and Services</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('build/assets/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('build/assets/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('build/assets/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('build/assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('build/assets/assets/vendor/libs/hammer/hammer.js')}}"></script>

    <script src="{{ asset('build/assets/assets/vendor/js/menu.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session("success") }}',
        confirmButtonText: 'OK'
    });
</script>
@endif

@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '{{ session("error") }}',
        confirmButtonText: 'OK'
    });
</script>
@endif

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('build/assets/assets/js/main.js')}}"></script>

    <!-- Page JS -->
      @stack('scripts')
  </body>
</html>
