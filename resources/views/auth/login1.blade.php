<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TEIMS Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/loginlayout_style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />
</head>

<body style="background-image: url('{{ asset('assets/img/login__bg.png') }}');">
    <div class="login__wrapper">
        <div class="container">
            <div class="login__forms">
                <div class="login__header">
                    <h4>Login as</h4>
                </div>
               
                <div class="login__navTabs">
                    <ul class="nav nav-pills mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="pill" href="#home">Website
                                Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="pill" href="#profile">Dashboard
                                Admin</a>
                        </li>
                    </ul>
                    <!-- Content Section  -->

                    <div class="tab-content mt-2">
                        <div class="tab-pane fade show active" id="home">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username
                                        <span class="text-danger fw-bold"> *</span></label>
                                    <input id="name" type="text" name="name" class="form-control shadow-none"
                                        placeholder="Enter your Username" aria-describedby="usernameHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password
                                        <span class="text-danger fw-bold"> *</span></label>
                                    <input id="password" type="password" name="password"
                                        class="form-control shadow-none" placeholder="Enter your Password" />
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2">
                                    Login
                                </button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username
                                        <span class="text-danger fw-bold"> *</span></label>
                                    <input id="name" type="text" name="name" class="form-control shadow-none"
                                        placeholder="Enter your Username" aria-describedby="usernameHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password
                                        <span class="text-danger fw-bold"> *</span></label>
                                    <input id="password" type="password" name="password"
                                        class="form-control shadow-none" placeholder="Enter your Password" />
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>
