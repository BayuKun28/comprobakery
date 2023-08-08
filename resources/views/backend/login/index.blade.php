<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Apr 2023 13:02:50 GMT -->

<head>
    <!--  Title -->
    <title>{{ $component['title'] }}</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/') }}/images/logos/favicon.png" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('backend/') }}/css/style.min.css" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('backend/') }}/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('backend/') }}/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-lg-6 col-xl-8 col-xxl-8">
                        <div class="d-none d-lg-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg"
                                alt="" class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 col-xxl-4">
                        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                            <div class="d-flex align-items-center w-100 h-100">
                                <div class="card-body px-xxl-5">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            {{ $message }}
                                        </div>
                                    @elseif ($message = Session::get('errors'))
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @endif
                                    <h2 class="mb-3 fs-7 fw-bolder text-center">Welcome to Bakery Admin</h2>
                                    <form method="POST" action="{{ route('authenticate') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text"
                                                class="form-control rounded @error('username') is-invalid @enderror"
                                                name="username" id="exampleInputEmail1" placeholder="Username">
                                        </div>
                                        @if ($errors->has('username'))
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        @endif
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password"
                                                class="form-control rounded @error('password') is-invalid @enderror"
                                                name="password" id="exampleInputPassword1" placeholder="Password">
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign
                                            In</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--  Import Js Files -->
    <script src="{{ asset('backend/') }}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('backend/') }}/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ asset('backend/') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="{{ asset('backend/') }}/js/app.min.js"></script>
    <script src="{{ asset('backend/') }}/js/app.init.js"></script>
    <script src="{{ asset('backend/') }}/js/app-style-switcher.js"></script>
    <script src="{{ asset('backend/') }}/js/sidebarmenu.js"></script>

    <script src="{{ asset('backend/') }}/js/custom.js"></script>
</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Apr 2023 13:02:50 GMT -->

</html>
