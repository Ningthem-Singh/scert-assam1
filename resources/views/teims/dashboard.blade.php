<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SCERT | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/startbootstrap_styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/startbootstrap_custom_style.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ms-3 fw-bold ps-3" href="index.html">SCERT</a>
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
                        <div class="sb-sidenav-menu-heading">Website Functions</div>

                        <a class="nav-link" href="{{ url('/admin/sliders') }}">
                            <div class="sb-nav-link-icon"><i class="fa-brands fa-slideshare"></i></div>
                            Home Sliders
                        </a>

                        <a class="nav-link" href="{{ url('/admin/institutes') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-building-columns"></i></div>
                            Institutes
                        </a>

                        <a class="nav-link" href="{{ url('/admin/manage_about') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                            About Us
                        </a>

                        <div class="sb-sidenav-menu-heading">
                            Teacher Education Institutes (TEIs)
                        </div>
                        <a class="nav-link active" href="#">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            DIET
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            BTC
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            Normal School
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            CTE
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            IASE
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            PPTTC
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            HTTC
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            HTC
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('dashboard')
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/startbootstrap_scripts.js') }}"></script>


</body>

</html>
