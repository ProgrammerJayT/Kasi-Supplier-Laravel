@extends('components.layout')

@section('title', 'Dashboard')

@section('body')
<body style="background: var(--bs-gray-dark);">
<div id="sidemenu">
<header id="header" class="header" style="background: var(--bs-white);">
    <div id="header_toggle-1" class="header_toggle"><i class="fa fa-star bx bx-menu" id="header-toggle"></i></div>
    <div>
        <header style="height: 81.7969px;width: 286.906px;">
            <h1 class="display-4" style="font-family: 'Advent Pro', sans-serif;height: 217.1875px;padding-bottom: 147px;margin-bottom: -145px;margin-top: 4px;">Kasi Vendors</h1>
        </header>
    </div>
    <div class="header_img"><img src="../assets/img/hczKIze.jpg"></div>
</header>
<div id="nav-bar" class="l-navbar">
    <nav class="nav">
        <div><a id="header_toggle-2" class="nav_logo header_toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-1 bx bx-layer nav_logo-icon" style="font-size: 12px;margin: -11px;height: 50px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M388.32,104.1a4.66,4.66,0,0,0-4.4-4c-2,0-37.23-.8-37.23-.8s-21.61-20.82-29.62-28.83V503.2L442.76,472S388.72,106.5,388.32,104.1ZM288.65,70.47a116.67,116.67,0,0,0-7.21-17.61C271,32.85,255.42,22,237,22a15,15,0,0,0-4,.4c-.4-.8-1.2-1.2-1.6-2C223.4,11.63,213,7.63,200.58,8c-24,.8-48,18-67.25,48.83-13.61,21.62-24,48.84-26.82,70.06-27.62,8.4-46.83,14.41-47.23,14.81-14,4.4-14.41,4.8-16,18-1.2,10-38,291.82-38,291.82L307.86,504V65.67a41.66,41.66,0,0,0-4.4.4S297.86,67.67,288.65,70.47ZM233.41,87.69c-16,4.8-33.63,10.4-50.84,15.61,4.8-18.82,14.41-37.63,25.62-50,4.4-4.4,10.41-9.61,17.21-12.81C232.21,54.86,233.81,74.48,233.41,87.69ZM200.58,24.44A27.49,27.49,0,0,1,215,28c-6.4,3.2-12.81,8.41-18.81,14.41-15.21,16.42-26.82,42-31.62,66.45-14.42,4.41-28.83,8.81-42,12.81C131.33,83.28,163.75,25.24,200.58,24.44ZM154.15,244.61c1.6,25.61,69.25,31.22,73.25,91.66,2.8,47.64-25.22,80.06-65.65,82.47-48.83,3.2-75.65-25.62-75.65-25.62l10.4-44s26.82,20.42,48.44,18.82c14-.8,19.22-12.41,18.81-20.42-2-33.62-57.24-31.62-60.84-86.86-3.2-46.44,27.22-93.27,94.47-97.68,26-1.6,39.23,4.81,39.23,4.81L221.4,225.39s-17.21-8-37.63-6.4C154.15,221,153.75,239.8,154.15,244.61ZM249.42,82.88c0-12-1.6-29.22-7.21-43.63,18.42,3.6,27.22,24,31.23,36.43Q262.63,78.68,249.42,82.88Z"></path>
                </svg><span class="nav_logo-name">Sidemenu</span></a>
            <div class="nav_list"><a class="nav_link active" href="{{route('Dashboard')}}" title="Dashboard"><i class="fa fa-star bx bx-grid-alt nav_icon" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Dashboard"></i><span class="nav_name">Main Menu</span></a><a class="nav_link" href="{{route('Market')}}" style="border-style: none;border-bottom-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-shop bx bx-folder nav_icon" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Markets">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"></path>
                    </svg><span class="nav_name">Folders</span></a><a class="nav_link" href="{{route('Wishlist')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-heart bx bx-folder nav_icon" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Wishlist">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                    </svg><span class="nav_name">Folders</span></a><a class="nav_link" href="{{route('Cart') }}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" class="bx bx-bar-chart-alt nav_icon" title="Cart">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79166 2H1V4H4.2184L6.9872 16.6776H7V17H20V16.7519L22.1932 7.09095L22.5308 6H6.6552L6.08485 3.38852L5.79166 2ZM19.9869 8H7.092L8.62081 15H18.3978L19.9869 8Z" fill="currentColor"></path>
                        <path d="M10 22C11.1046 22 12 21.1046 12 20C12 18.8954 11.1046 18 10 18C8.89543 18 8 18.8954 8 20C8 21.1046 8.89543 22 10 22Z" fill="currentColor"></path>
                        <path d="M19 20C19 21.1046 18.1046 22 17 22C15.8954 22 15 21.1046 15 20C15 18.8954 15.8954 18 17 18C18.1046 18 19 18.8954 19 20Z" fill="currentColor"></path>
                    </svg><span class="nav_name">Stats</span></a><a class="nav_link" href="{{route('BankingDetails')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bank2 bx bx-bar-chart-alt nav_icon" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Banking Details">
                        <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"></path>

                    </svg><span class="nav_name">Stats</span></a><a class="nav_link" href="{{route('UserProfile') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" class="bx bx-bar-chart-alt nav_icon" title="Edit Profile">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                    </svg><span class="nav_name">Stats</span></a></div><a class="nav_link signout" href="{{route('logout-request') }}" title="Signout"><i class="fa fa-star bx bx-log-out nav_icon" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Signout"></i><span class="nav_name">Signout</span></a>
        </div>
    </nav>
</div>
</div>
<div class="container">
<div class="d-sm-flex justify-content-between align-items-center mb-4" style="padding: 20px;">
    <h2 class="text-light mb-0" style="color: var(--white-color);font-size: 32px;font-family: 'Alegreya Sans', sans-serif;">Dashboard</h2><a class="btn btn-outline-primary btn-lg border rounded-pill border-primary d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
</div>

@if (Session::has('success_registration'))
    <div class="d-flex justify-content-center align-items-center align-content-center" style="padding-top: 10px;">
        <div class="alert alert-danger border rounded alert-dismissible" role="alert" style="padding-right: 50px;padding-left: 51px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>{{Session::get('success_registration')}}<br></span></div>
    </div>
@endif


@if (Session::has('fail_registration'))
    <div class="d-flex justify-content-center align-items-center align-content-center" style="padding-top: 10px;">
        <div class="alert alert-danger border rounded alert-dismissible" role="alert" style="padding-right: 50px;padding-left: 51px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>{{Session::get('fail_registration')}}<br></span></div>
    </div>
@endif

</div>
<div class="container" style="padding-top: 50px;">
<div>
    <div class="row text-center">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow-lg border-start-primary py-2" data-bss-hover-animate="pulse">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total Orders</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>{{$UserData->Sum_Orders}}</span></div>
                            {{-- Function to calculat all total orders under UserID --}}
                        </div>
                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor" class="text-primary fa-2x text-gray-300">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M0 24C0 10.75 10.75 0 24 0H96C107.5 0 117.4 8.19 119.6 19.51L121.1 32H312V134.1L288.1 111C279.6 101.7 264.4 101.7 255 111C245.7 120.4 245.7 135.6 255 144.1L319 208.1C328.4 218.3 343.6 218.3 352.1 208.1L416.1 144.1C426.3 135.6 426.3 120.4 416.1 111C407.6 101.7 392.4 101.7 383 111L360 134.1V32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24V24zM224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464zM416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464z"></path>
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow-lg border-start-success py-2" data-bss-hover-animate="pulse">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Successful Orders</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>{{$UserData->Successful_Orders}}</span></div>
                            {{-- Function to calculat all total orders under UserID --}}
                        </div>
                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor" class="text-success fa-2x text-gray-300">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M334.6 217.4l-30 27.49C264 282.1 217.8 256.8 202.9 240.6C176 211.2 178.1 165.7 207.3 138.9L289.1 64H282.5C224.7 64 169.1 86.95 128.2 127.8L32 128.1c-17.6 0-32 14.39-32 31.98v159.8c0 17.59 14.4 32.04 31.1 32.04l114.3-.0604l90.5 81.82c27.5 22.37 67.75 18.11 90-9.255l18.12 15.25c15.88 12.1 39.38 10.5 52.38-5.369l31.38-38.6l5.374 4.498c13.75 11 33.88 9.002 45-4.748l9.576-11.83c11.08-13.7 8.979-33.75-4.701-44.86L334.6 217.4zM608 128.1l-96-.1257c-40.98-40.96-96.56-63.88-154.5-63.88L348.9 64c-8 0-15.62 3.197-21.62 8.568L229 162.3C228.9 162.5 228.8 162.7 228.8 162.7C212 178.5 212.4 203.3 226.6 218.7c9.625 10.5 35 21.62 56.13 2.75c0-.125 .25-.125 .375-.25l80-73.1c6.5-5.871 16.62-5.496 22.62 1s5.5 16.62-1 22.62l-26.12 23.87l145.6 118.1c12.12 9.992 19.5 23.49 22.12 37.98L608 351.7c17.6 0 32-14.38 32-31.98V160.1C640 142.4 625.7 128.1 608 128.1z"></path>
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow-lg border-start-info py-2" data-bss-hover-animate="pulse">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span class="text-danger">Cancelled orders</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>{{$UserData->Cancelled_Orders}}</span></div>
                            {{-- Function to calculat all total orders under UserID --}}
                        </div>
                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-exclamation-circle-fill text-danger fa-2x text-gray-300">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow-lg border-start-warning py-2" data-bss-hover-animate="pulse">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span class="text-secondary" style="font-family: 'Nunito Sans', sans-serif;">Pending Orders</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>{{$UserData->Pending_Orders}}</span></div>
                            {{-- Function to calculat all total orders under UserID --}}
                        </div>
                        <div class="col-auto"><i class="fas fa-comments text-secondary fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-xl-8">
            <div class="card shadow mb-4" data-bss-hover-animate="pulse" style="height: 500px;">
                <div class="card-header d-flex justify-content-between align-items-center" style="padding-top: 15px;padding-bottom: 15px;">
                    <h6 class="text-primary fw-bold m-0">Spending Overview</h6>
                </div>
                <div class="card-body">
                    <div><canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;January&quot;,&quot;February&quot;,&quot;March&quot;,&quot;April&quot;,&quot;May&quot;,&quot;June&quot;,&quot;July&quot;,&quot;August&quot;,&quot;September&quot;,&quot;October&quot;,&quot;November&quot;,&quot;December&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Money Spent&quot;,&quot;backgroundColor&quot;:&quot;rgba(78,115,223,0.11)&quot;,&quot;borderColor&quot;:&quot;#4e73df&quot;,&quot;data&quot;:[&quot;500&quot;,&quot;700&quot;,&quot;200&quot;,&quot;500&quot;,&quot;1000&quot;,&quot;100&quot;,&quot;400&quot;,&quot;220&quot;,&quot;0&quot;,&quot;0&quot;,&quot;0&quot;,&quot;0&quot;],&quot;fill&quot;:true,&quot;borderWidth&quot;:&quot;0&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:true,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;bold&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:10}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:10}}]}}}"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xl-4">
            <div class="card shadow mb-4" data-bss-hover-animate="pulse" style="height: 500px;">
                <div class="card-header d-flex justify-content-between align-items-center" style="padding-top: 15px;padding-bottom: 15px;">
                    <h6 class="text-primary fw-bold m-0">Revenue Sources</h6>
                </div>
                <div class="card-body">
                    <div class="text-end small mt-4"><span class="fs-5 me-2" style="font-family: 'Nunito Sans', sans-serif;"><i class="fas fa-circle text-primary"></i>&nbsp;Total Orders</span><span class="fs-5 me-2"><i class="fas fa-circle text-success"></i>&nbsp;Successful Orders</span><span class="fs-5 me-2"><i class="fas fa-circle text-danger text-info"></i>&nbsp;Cancelled Orders</span><span class="fs-5 me-2"><i class="fas fa-circle text-muted text-info"></i>&nbsp;Pending Orders</span></div>
                    <div class="chart-area me-xxl-0 pe-xxl-0" style="padding-top: 50px;"><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Total Orders&quot;,&quot;Successful Orders&quot;,&quot;Cancelled Orders&quot;,&quot;Pending Orders&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#0d6efd&quot;,&quot;#198754&quot;,&quot;#dc3545&quot;,&quot;rgb(108,117,125)&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;{{$UserData->Sum_Orders}}&quot;,&quot;{{$UserData->Successful_Orders}}&quot;,&quot;{{$UserData->Cancelled_Orders}}&quot;,&quot;{{$UserData->Pending_Orders}}&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}"></canvas></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-xl-4" style="width: 563.656px;">
            <div class="card shadow mb-4" data-bss-hover-animate="pulse" style="height: 300px;">
                <div class="card-header d-flex align-items-center" style="padding-top: 15px;padding-bottom: 15px;">
                    <h6 class="text-primary fw-bold m-0">Account Status</h6>
                </div>
                <div class="card-body">
                    <div class="text-start small mt-4">
                        <p class="text-start">Username<span style="margin-left: 200px;">{{$UserData->Username}}</span></p>
                        <p>Status<span class="border rounded-pill border-success shadow-sm" data-bs-toggle="tooltip" data-bss-tooltip="" style="padding-left: 9px;margin-left: 225px;background: rgba(0,255,56,0.36);padding-right: 10px;" title="Account successfully verified">Verified</span></p>
                        <p>Member Since<span style="margin-left: 172px;">{{$UserData->Date}}</span></p><span style="margin-top: 10px;"><a class="btn btn-outline-danger border rounded-pill border-danger shadow-sm" role="button" style="padding-left: 30px;padding-right: 30px;">Deactivate Account</a></span><span style="margin-top: 10px;padding-left: 50px;"><a class="btn btn-outline-info border rounded-pill border-info shadow-sm" role="button" href="{{route('Logout')}}" style="padding-left: 30px;padding-right: 30px;">Signout</a></span>
                        {{-- Date field on datadase --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
<div style="text-align: right;"><a class="btn btn-outline-info btn-lg border rounded-pill border-info shadow" role="button" href="{{route('Market')}}" style="padding-right: 30px;padding-left: 30px;">Proceed To Market<span></span></a></div>
</div>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/chart.min.js"></script>
<script src="../assets/js/bs-init.js"></script>
<script src="../assets/js/zectStudio---Sidebar-Menu-by-bbbootstrap.js"></script>
</body>

@endsection
