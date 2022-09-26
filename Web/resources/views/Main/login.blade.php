<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kasi Vendors</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/Roboto.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/Filter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../assets/css/shopping-ecommerce-products.css">
    <link rel="stylesheet" href="../assets/css/sidebar-style4.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/zectStudio---Sidebar-Menu-by-bbbootstrap.css">
</head>

<body style="background: var(--bs-gray-dark);">
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1 class="display-1 text-muted">Sign In</h1>
                    <p class="fs-4 fw-lighter text-muted" style="color: var(--bs-pink);">Welcome Back</p>
                </div>

                @if (Session::has('fail'))
                    <div class="d-flex justify-content-center align-items-center align-content-center" style="padding-top: 10px;">
                        <div class="alert alert-danger border rounded alert-dismissible" role="alert" style="padding-right: 50px;padding-left: 51px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>{{Session::get('fail')}}<br></span></div>
                    </div>
                @endif

                @if (Session::has('success_logout'))
                    <div class="d-flex justify-content-center align-items-center align-content-center" style="padding-top: 10px;">
                        <div class="alert alert-danger border rounded alert-dismissible" role="alert" style="padding-right: 50px;padding-left: 51px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>{{Session::get('fail')}}<br></span></div>
                    </div>
                @endif

            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow-sm mb-5" style="margin: 0px -100px 48px;background: var(--bs-gray-dark);">
                        <div class="card-body d-flex flex-column align-items-center" style="background: var(--bs-gray-dark);border-style: none;">

                            <form class="text-center" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <div class="input-group " style="margin: 50px 0px 15px;margin-bottom: 15px;"><span class="input-group-text"><i class="far fa-envelope"></i></span><input class="form-control form-control-lg " type="email" name="emal" placeholder="User@example.com" value="{{ old('emal') }}"></div>

                                    @error('emal')
                                        <div>
                                            <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">Email Is Required</p>
                                        </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <div class="input-group" style="margin: 0 0px 15px;margin-bottom: 15px;"><span class="input-group-text"><i class="fas fa-lock"></i></span><input class="form-control form-control-lg" type="password" name="password" placeholder="Password" value="{{ old('password') }}"><span class="input-group-text" style="background: rgb(255,255,255);"><i class="far fa-eye"></i></span></div>

                                    @error('password')
                                        <div>
                                            <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">Password Is Required</p>
                                        </div>
                                    @enderror

                                </div>

                                <div class="mb-3" style="margin: 0px 0px 50px;"><button class="btn btn-outline-primary fs-5 border rounded-pill border-primary d-block w-100" type="submit" style="margin: 60px 0px 16px;">Sign In</button></div>
                                <p class="text-muted">Don't have an account?&nbsp;<a href="{{route('Register')}}">Register Now</a></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/zectStudio---Sidebar-Menu-by-bbbootstrap.js"></script>
</body>

</html>
