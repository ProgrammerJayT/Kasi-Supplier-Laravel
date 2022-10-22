<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <link rel="apple-touch-icon" sizes="76x76" href="dashboard-assets/img/apple-icon.png">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="dashboard-assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="dashboard-assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="dashboard-assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

    @livewireStyles
</head>

<body style="background-color: #f3f2ee;">

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->
    <header class="header" style="background-color: #f3f2ee;">
        <div class="header__top">
        </div>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('wishlist') }}">My
                            wishlist</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shopping') }}">Shop</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="link-secondary me-3" href="{{ route('cart') }}">
                    <i class="fas fa-shopping-cart"></i>
                </a>

                <a class="link-secondary me-3">
                    <p style="margin-bottom:0px;">@yield('username')</p>
                </a>

                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">

                        <img src="@yield('image-path')" class="rounded-circle" height="25" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="customer-profile">My profile</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('/logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h3>Kasi Suppliers</h3>
                        <div class="breadcrumb__links">
                            <a>Dashboard</a>
                            <span>@yield('title')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    @yield('body')

    @livewireScripts

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script><!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyColBQqGsiDgBrMtcp3GSVbVQWOW9TNe_0&libraries=places">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var autocomplete;
            var id = 'location';

            autocomplete = new google.maps.places.Autocomplete((document.getElementById(id)), {
                types: [
                    'geocode',
                ],
                componentRestrictions: {
                    country: "ZA"
                },
                fields: [
                    'place_id',
                    'geometry',
                    'name',
                ]
            });

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();

                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    document.getElementById(id).value = '';
                    return;
                } else {

                    console.log(JSON.stringify(place.address_components));

                    var lat = place.geometry.location.lat();
                    var lng = place.geometry.location.lng();
                    var location = {
                        lat: lat,
                        lng: lng,
                    };

                    console.log(JSON.stringify(location));
                    document.getElementById('set-address').value = JSON.stringify(location);
                }
            });
        });
    </script>
    <script>
        $('#acc').change(function() {
            $('#location').attr('disabled', !this.checked)
        });
    </script>

</body>

</html>
