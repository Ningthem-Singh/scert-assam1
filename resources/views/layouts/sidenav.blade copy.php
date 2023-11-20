<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SCERT Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}">

    <!-- Fonts -->


    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Yajrabox CSS --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<style>
    #sidenav-main::-webkit-scrollbar-thumb {
        background-color: #512f91 !important;
    }

    #sidenav-main::-webkit-scrollbar {
        width: 4px !important;
    }
</style>

<body>
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">

        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="{{ url('/admin/sliders') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-img" alt="...">
                </a>

            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/sliders') }}">
                                <i class="fa-brands fa-slideshare"></i>
                                <span class="nav-link-text">Home Sliders</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/institutes') }}">
                                <i class="fa-solid fa-building-columns"></i>
                                <span class="nav-link-text">Institutes</span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/manage_about') }}">
                                <i class="fa-solid fa-people-group"></i>
                                <span>
                                    About Us
                                </span>
                            </a>
                        </li>

                        <hr class="my-3">

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark collapsed" type="button"
                                data-action="sidenav-pin" data-target="#sidenav-main" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show"
                                data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>


                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{ asset('assets/img/avatar.png') }}">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li style="margin-left: 10px;">
                            <button class="btn btn-warning btn-sm" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('sidenav')
        </main>
    </div>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>



</html>
