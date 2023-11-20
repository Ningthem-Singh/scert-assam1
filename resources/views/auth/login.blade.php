<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|SCERT Assam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <style>
        .card {
            -webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -webkit-transition: all 250ms ease-in-out 0s;
            -moz-transition: all 250ms ease-in-out 0s;
            -ms-transition: all 250ms ease-in-out 0s;
            -o-transition: all 250ms ease-in-out 0s;
            transition: all 250ms ease-in-out 0s;
        }

        .btn-primary {
            background-color: #5e72e4 !important;
            border: none !important;
            padding: 14px 0;
        }

        .btn-primary:hover {
            background-color: #f66a4b !important;
        }
    </style>
</head>

<body>

    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6" style="padding-top: 70px; padding-bottom: 100px;">
                    <div class="card p-4" style="border-radius: 0;">
                        <p class="text-center">
                            <img src="{{ asset('assets/img/about/512px-Seal_of_Assam.svg.webp') }}" alt="Logo"
                                style="width: 20%;">
                        </p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card-body">
                                <h5 class="modal-title text-center mb-3" id="loginModalLongTitle">Login as</h5>
                                <ul class="nav nav-pills mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link active" style="background-color: #5e72e4;"
                                            {{-- id="home-tab"
                                        data-bs-toggle="pill"
                                        href="#home" --}}>Website Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://scert-new-dash.vercel.app/" target="_blank">Dashboard
                                            Admin</a>
                                    </li>
                                </ul>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-12 col-12">
                                        <input id="name" type="text"
                                            class="form-control shadow-none @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autocomplete="name"
                                            placeholder="Enter Username" autofocus style="border-radius: 0;">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input id="password" type="password"
                                            class="form-control shadow-none @error('password') is-invalid @enderror"
                                            name="password" placeholder="Enter Password" required
                                            autocomplete="current-password" style="border-radius: 0;">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center"
                                style="border-top: none; background-color: white;">
                                <button type="submit" class="btn btn-primary w-100 shadow-none py-2"
                                    style="border-radius: 0; border-color: #5e72e4;">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom" style="height: 10%; background-color: rgba(233, 233, 233)">
        <p class="text-center pt-3">
            © Copyright 2023. SCERT Assam | All Rights Reserved. Designed & Developed by <a
                href="https://codepilot.in/">Codepilot Technologies
                Private Limited</a>
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
</body>
