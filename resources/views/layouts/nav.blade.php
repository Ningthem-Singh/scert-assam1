<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home | State Council of Educational Research and Training</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-lg-between justify-content-center">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i>
                <a href="mailto:info@scertassam.com">info@scertassam.com</a>
                <i class="bi bi-telephone"></i>
                <a href="tel:+919876543210">+91 98765 43210</a>
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="{{ route('login') }}" class="login__topbar__button">Login</a>

            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/scert-assam" class="logo"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"
                    class="img-fluid" />
            </a>
            <div class="me-auto ms-2">
                <a href="/scert-assam" class="goa__topbar">Government of Assam</a> <br />
                <a href="/scert-assam" class="ed__topbar">Elemetary Education</a> <br />
                <a href="/scert-assam" class="scert__topbar">Teacher Education Institute Management System (TEIMS)</a>
            </div>
            <div class="navbar__mailBox d-lg-block d-none">
                <i class="bi bi-envelope me-1"></i>
                <a href="mailto:info@scertassam.com">info@scertassam.com</a>
            </div>
        </div>

        <div class="main__navbar">
            <nav id="navbar" class="navbar container mt-3">
                <ul>
                    <li><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/scert-assam">Home</a></li>
                    <li><a class="nav-link {{ request()->is('institutes') ? 'active' : '' }}"
                            href="/scert-assam/institutes">Institutes</a></li>
                    <li><a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="/scert-assam/about">About Us</a>
                    </li>
                    <li><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="/scert-assam/contact">Contact Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    @yield('content')



    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Information & Services</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a href="#">Award
                                and
                                Achievements</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a href="#">Intake
                                Capacity</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a
                                href="#">ePrastuti</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a href="#">Teacher
                                Education
                                Institutes</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a href="#">NAS
                                School
                                Details</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a
                                href="#">Frequently
                                Asked
                                Questions (FAQs)</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Policies</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a
                                href="#">Copyright
                                Policy</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a
                                href="#">Hyperlinking
                                Policy</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a
                                href="#">Privacy
                                Policy</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a
                                href="#">Accessibility
                                Statement</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a href="#">Terms
                                of
                                Use</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a
                                href="#">Screen
                                Reader</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a
                                href="#">Content
                                Management</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>About the Government</h4>
                    <ul>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a href="#">Assam
                                State
                                Portal</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/square.png') }}" alt="" /><a href="#">CM
                                Portal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottomContents">
        {{-- <p class="mt-3">
            Last Reviewed & Updated : <span style="color:#006FBB;">07 Oct 2023</span> | Visitors :<span
                style="color:#006FBB;">
                952456</span>
        </p> --}}
        <p class="mt-3">
            Content Ownership
            <span class="fw-bold">State Council of Educational Research and Training (SCERT) , Govt.
                of Assam</span>
        </p>
        <div class="credits">
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <p>Designed & Developed by</p>

                        <p style="margin-top:-10px!important;font-weight:600">
                            <a href="https://codepilot.in" class="footer__credits">Codepilot
                                Technologies Private Limited</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>Nodal Department</p>
                        <h6>Secretariat Administration Department,Govt. of Assam</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<script>
    // // Disble Right click on Page 
    // document.addEventListener('contextmenu', function(e) {
    //     e.preventDefault();
    // });

    // // Disable inspect Element 
    // document.onkeydown = function(e) {
    //     if (e.keyCode == 123) {
    //         return false;
    //     }
    //     if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
    //         return false;
    //     }
    //     if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
    //         return false;
    //     }
    //     if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
    //         return false;
    //     }
    // }
</script>

</html>
