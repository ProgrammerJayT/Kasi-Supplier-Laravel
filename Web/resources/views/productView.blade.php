@extends('components.layout')

@section('title', 'Product View')

@section('body')
<body style="background: var(--bs-gray-dark);">
    <div id="sidemenu">
        <div id="nav-bar" class="l-navbar">
            <nav class="nav">
                <div>
                    <div class="nav_list"><a class="nav_link active" href="dashboard.html" title="Dashboard"><i class="fa fa-star bx bx-grid-alt nav_icon" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Dashboard"></i><span class="nav_name">Main Menu</span></a><a class="nav_link" href="markets.html" style="border-style: none;border-bottom-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-shop bx bx-folder nav_icon" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Markets">
                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"></path>
                            </svg><span class="nav_name">Folders</span></a><a class="nav_link" href="Wishlist.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-heart bx bx-folder nav_icon" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Wishlist">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                            </svg><span class="nav_name">Folders</span></a><a class="nav_link" href="cart.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" class="bx bx-bar-chart-alt nav_icon" title="Cart">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79166 2H1V4H4.2184L6.9872 16.6776H7V17H20V16.7519L22.1932 7.09095L22.5308 6H6.6552L6.08485 3.38852L5.79166 2ZM19.9869 8H7.092L8.62081 15H18.3978L19.9869 8Z" fill="currentColor"></path>
                                <path d="M10 22C11.1046 22 12 21.1046 12 20C12 18.8954 11.1046 18 10 18C8.89543 18 8 18.8954 8 20C8 21.1046 8.89543 22 10 22Z" fill="currentColor"></path>
                                <path d="M19 20C19 21.1046 18.1046 22 17 22C15.8954 22 15 21.1046 15 20C15 18.8954 15.8954 18 17 18C18.1046 18 19 18.8954 19 20Z" fill="currentColor"></path>
                            </svg><span class="nav_name">Stats</span></a><a class="nav_link" href="Profile.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" class="bx bx-bar-chart-alt nav_icon" title="Edit Profile">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                            </svg><span class="nav_name">Stats</span></a></div><a class="nav_link signout" title="Signout"><i class="fa fa-star bx bx-log-out nav_icon" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Signout"></i><span class="nav_name">Signout</span></a>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="d-sm-flex justify-content-between align-items-center mb-4" style="padding: 20px;">
            <h2 class="text-light mb-0" style="color: var(--white-color);font-size: 32px;font-family: 'Alegreya Sans', sans-serif;"></h2>
        </div>
    </div>
    <div class="container" style="padding-top: 99px;">
        <div>
            <div class="row text-center justify-content-center align-items-center align-content-center">
                <div class="col text-center"><img class="img-fluid shadow" src="../assets/img/223-2238298_4k-wallpaper-for-ps4.jpg"></div>
                <div class="col text-center align-self-center">
                    <div class="shadow">
                        <h1 class="display-1">{{$prod_data->name}}</h1>
                        <h1 class="display-6 fw-lighter text-muted">{{$prod_data->description}}</h1>
                    </div>
                    <form class="justify-content-center align-items-center align-content-center">
                        <div class="shadow d-grid justify-content-center align-items-center align-content-center mb-3">
                            <h1 class="display-5 text-center text-primary" style="height: 10px;">R {{$prod_data->amount}}</h1>
                            <div class="input-group input-group-lg" style="margin: 50px 0px 16px;width: 300px;"><span class="input-group-text" style="padding-left: 20px;padding-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M0 24C0 10.75 10.75 0 24 0H96C107.5 0 117.4 8.19 119.6 19.51L121.1 32H312V134.1L288.1 111C279.6 101.7 264.4 101.7 255 111C245.7 120.4 245.7 135.6 255 144.1L319 208.1C328.4 218.3 343.6 218.3 352.1 208.1L416.1 144.1C426.3 135.6 426.3 120.4 416.1 111C407.6 101.7 392.4 101.7 383 111L360 134.1V32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24V24zM224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464zM416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464z"></path>
                                    </svg></span><input class="form-control" type="number" name="quantity" value="1" min="1" style="padding-left: 20px;padding-right: -1px;"><button class="btn btn-outline-success btn-sm border-success" type="button" style="margin-left: 10px;padding-left: 10px;">Add To Cart</button></div>
                        </div>
                    </form>
                </div>
                <a class="fs-6 text-center link-primary" href="#" style="width: 1054px;margin-top: 30px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" style="margin-top: -2px;">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                    </svg>&nbsp; Back To Markets</a>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/zectStudio---Sidebar-Menu-by-bbbootstrap.js"></script>
</body>
@endsection
