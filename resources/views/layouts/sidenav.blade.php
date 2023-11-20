<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SCERT | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}">

    {{-- custom css and js theme for the dashboard --}}
    <link href="{{ asset('assets/css/startbootstrap_styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/startbootstrap_custom_style.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/startbootstrap_scripts.js') }}"></script>
    {{-- custom css and js theme for the dashboard --}}

    {{-- font awesome 6.4.2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- bootstrap css(no css as it clashes with custom css) and js --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- bootstrap css and js --}}

    {{-- toastify css and js --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    {{-- toastify css and js --}}

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ms-3 fw-bold ps-3" href="{{ url('/admin/dashboard') }}">SCERT</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }} SCERT</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Change Password</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">Logout
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                            href="{{ url('/admin/dashboard') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-gauge-high"></i>
                            </div>
                            Dashboard
                        </a>

                        <a class="nav-link {{ request()->is('admin/master_districts') ? 'active' : '' }}"
                            href="{{ url('/admin/master_districts') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-location-pin"></i></div>
                            Master Districts
                        </a>

                        <a class="nav-link {{ request()->is('admin/institutes') ? 'active' : '' }}"
                            href="{{ url('/admin/institutes') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-building-columns"></i></div>
                            Master Institutes
                        </a>

                        <div class="sb-sidenav-menu-heading">Website Functions</div>

                        <a class="nav-link {{ request()->is('admin/sliders') ? 'active' : '' }}"
                            href="{{ url('/admin/sliders') }}">
                            <div class="sb-nav-link-icon"><i class="fa-brands fa-slideshare"></i></div>
                            Home Sliders
                        </a>

                        <a class="nav-link {{ request()->is('admin/manage_about') ? 'active' : '' }}"
                            href="{{ url('/admin/manage_about') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                            About Us
                        </a>

                        <a class="nav-link {{ request()->is('admin/manage_contact') ? 'active' : '' }}"
                            href="{{ url('/admin/manage_contact') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                            Contact Us
                        </a>

                        <a class="nav-link {{ request()->is('admin/manage_notifications') ? 'active' : '' }}"
                            href="{{ url('/admin/manage_notifications') }}">
                            <div class="sb-nav-link-icon"><i class="fa-regular fa-bell"></i></div>
                            Notifications
                        </a>

                        <div class="sb-sidenav-menu-heading">
                            Teacher Education Institutes (TEIs)
                        </div>
                        <a class="nav-link {{ request()->is('admin/manage_teis') ? 'active' : '' }}"
                            href="{{ url('/admin/manage_teis') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            TEIS
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main class="py-4">
                @yield('sidenav')
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; TEIMS 2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    {{-- datatable css and js --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" type="text/css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    {{-- datatable css and js --}}


    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>
