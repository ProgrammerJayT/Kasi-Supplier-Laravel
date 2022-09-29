<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Kanadaka&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges-images.css">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/Card-hover-affect-2.css">
    <link rel="stylesheet" href="assets/css/Card-Store.css">
    <link rel="stylesheet" href="assets/css/Dashboard-Header-Component.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Material-Card-.css">
    <link rel="stylesheet" href="assets/css/Navbar---Logo-Middle---Phone-Logo-Middle.css">
    <link rel="stylesheet" href="assets/css/Navbar-with-menu-and-login-km-Navbar.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form-.css">
    <link rel="stylesheet" href="assets/css/responsive-blog-card-slider.css">
    <link rel="stylesheet" href="assets/css/SAS-Menu.css">
    <link rel="stylesheet" href="assets/css/Search-Input-responsive.css">
    <link rel="stylesheet" href="assets/css/select.css">
    <link rel="stylesheet" href="assets/css/Select2-JS-Plugin.css">
    <link rel="stylesheet" href="assets/css/Soft-ui-Navbar.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product-swiper.min.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product-untitled.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
    <link rel="stylesheet" href="assets/css/VentasPro-Login.css">
</head>

<body style="margin-top: 20px;background: var(--bs-gray-dark);">
    <div class="d-flex flex-row justify-content-center align-items-center align-items-lg-center justify-content-xxl-center"
        style="height: auto;width: 100%;margin-bottom: 50px;">
        <div class="d-flex d-xxl-flex flex-row justify-content-between align-items-center align-items-xxl-center"
            style="width: 90%;">
            <div class="d-flex d-xxl-flex flex-row align-items-center align-items-xxl-center">
                <h3 class="d-flex align-items-center" style="font-weight: bold;margin: 0px;color: var(--bs-gray-400);">
                    Administrator</h3>
            </div>
            <div><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalLogin"
                    style="color: var(--km-black);background: var(--bs-red);border-radius: 10px;border-style: none;border-color: var(--km-black);"><i
                        class="icon ion-android-menu"
                        style="font-size: 16px;color: var(--km-bg);border-style: none;"></i></button>
                <div class="modal fade" role="dialog" tabindex="-1" id="modalLogin">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="padding-top: 10px;padding-bottom: 5px;">
                                <h3 class="text-dark text-primary">Menu</h3><button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex d-lg-flex flex-column align-items-center align-items-lg-start"
                                style="padding: 0px;">
                                <div class="d-flex flex-column justify-content-center" style="width: 90%;"><a
                                        href="/create-administrator"
                                        style="margin-top: 10px;margin-bottom: 5px;font-size: 20px;color: var(--bs-gray-800);text-align: right;background: var(--bs-modal-bg);">Add
                                        new administrator<i class="icon ion-plus-circled"
                                            style="padding-left: 10px;color: var(--bs-danger);"></i></a>
                                    <hr style="margin-top: 5px;margin-bottom: 10px;"><a href="/create-customer"
                                        style="margin-bottom: 5px;font-size: 20px;color: var(--bs-gray-800);text-align: right;background: var(--bs-modal-bg);">Add
                                        new customer<i class="icon ion-plus-circled"
                                            style="padding-left: 10px;color: var(--bs-danger);"></i></a>
                                    <hr style="margin-top: 5px;margin-bottom: 10px;"><a href="/create-vendor"
                                        style="font-size: 20px;color: var(--bs-gray-800);text-align: right;background: var(--bs-modal-bg);">Add
                                        new vendor<i class="icon ion-ios-people"
                                            style="padding-left: 10px;color: var(--bs-danger);font-size: 20px;"></i></a>
                                    <hr style="margin-bottom: 10px;margin-top: 10px;"><a href=""
                                        style="margin-bottom: 5px;font-size: 20px;color: var(--bs-gray-800);text-align: right;background: var(--bs-modal-bg);">View
                                        vendors<i class="icon ion-ios-people-outline"
                                            style="padding-left: 10px;color: var(--bs-danger);font-size: 20px;"></i></a>
                                    <hr style="margin-top: 5px;margin-bottom: 10px;"><a href=""
                                        style="font-size: 20px;color: var(--bs-gray-800);text-align: right;background: var(--bs-modal-bg);">View
                                        customers<i class="icon ion-ios-people"
                                            style="padding-left: 10px;color: var(--bs-danger);font-size: 20px;"></i></a>
                                    <hr style="margin-bottom: 10px;margin-top: 10px;"><a href="voting-results"
                                        style="margin-bottom: 5px;font-size: 20px;color: var(--bs-gray-800);text-align: right;background: var(--bs-modal-bg);">View
                                        administrators<i class="fa fa-list-ul"
                                            style="padding-left: 10px;color: var(--bs-danger);"></i></a>
                                    <hr style="margin-top: 5px;margin-bottom: 10px;"><a href="logout"
                                        style="margin-bottom: 10px;font-size: 20px;color: var(--bs-gray-800);text-align: right;background: var(--bs-modal-bg);">Logout<i
                                            class="icon ion-android-exit"
                                            style="padding-left: 10px;color: var(--bs-danger);"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex d-xxl-flex flex-column align-items-center align-items-xxl-center"
        style="height: 50px;width: 100%;">
        <div class="d-flex d-xxl-flex flex-row align-items-center align-items-xxl-center" style="width: 90%;">
            <h2 style="color: var(--bs-gray-600);font-weight: bold;width: 100%;">Welcome</h2>
            <h6 class="text-end" style="margin-left: 10px;color: var(--km-bg);">@yield('page')</h6>
        </div>
    </div>


    @yield('body')

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="assets/js/Select2-JS-Plugin-1.js"></script>
    <script src="assets/js/Select2-JS-Plugin.js"></script>
    <script src="assets/js/Card-hover-affect-2.js"></script>
    <script src="assets/js/mini-card-items.js"></script>
    <script src="assets/js/responsive-blog-card-slider-1.js"></script>
    <script src="assets/js/responsive-blog-card-slider.js"></script>
    <script src="assets/js/Swiper-Slider-Card-For-Blog-Or-Product.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>
