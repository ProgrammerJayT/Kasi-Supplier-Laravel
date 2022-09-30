@extends('components.layout')

@section('title', 'Hello there')

@section('body')

    <body style="background: var(--bs-gray-dark);">
        <div id="sidemenu">
            <div id="nav-bar" class="l-navbar">
                <nav class="nav">
                    <div>
                        <div class="nav_list">
                            <a class="nav_link active" href="" title="Dashboard">
                                <i class="fa fa-star bx bx-grid-alt nav_icon" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-placement="right" title="Dashboard"></i>
                                <span class="nav_name">Main Menu</span></a>
                            <a class="nav_link" href=""
                                style="border-style: none;border-bottom-style: none;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-shop bx bx-folder nav_icon" data-bs-toggle="tooltip"
                                    data-bss-tooltip="" data-bs-placement="right" title="Markets">
                                    <path
                                        d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z">
                                    </path>
                                </svg><span class="nav_name">Folders</span></a><a class="nav_link" href=""><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-heart bx bx-folder nav_icon" data-bs-toggle="tooltip"
                                    data-bss-tooltip="" data-bs-placement="right" title="Wishlist">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                    </path>
                                </svg><span class="nav_name">Folders</span></a><a class="nav_link" href=""><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right"
                                    class="bx bx-bar-chart-alt nav_icon" title="Cart">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.79166 2H1V4H4.2184L6.9872 16.6776H7V17H20V16.7519L22.1932 7.09095L22.5308 6H6.6552L6.08485 3.38852L5.79166 2ZM19.9869 8H7.092L8.62081 15H18.3978L19.9869 8Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M10 22C11.1046 22 12 21.1046 12 20C12 18.8954 11.1046 18 10 18C8.89543 18 8 18.8954 8 20C8 21.1046 8.89543 22 10 22Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M19 20C19 21.1046 18.1046 22 17 22C15.8954 22 15 21.1046 15 20C15 18.8954 15.8954 18 17 18C18.1046 18 19 18.8954 19 20Z"
                                        fill="currentColor"></path>
                                </svg><span class="nav_name">Stats</span></a><a class="nav_link" href="Profile.html"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                    fill="currentColor" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-placement="right" class="bx bx-bar-chart-alt nav_icon" title="Edit Profile">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                    </path>
                                </svg><span class="nav_name">Stats</span></a>
                        </div>
                        <a class="nav_link signout" title="Signout">
                            <i class="fa fa-star bx bx-log-out nav_icon" data-bs-toggle="tooltip" data-bss-tooltip=""
                                data-bs-placement="right" title="Signout"></i>
                            <span class="nav_name">Signout</span></a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="d-sm-flex justify-content-between align-items-center mb-4" style="padding: 20px;">
                <h2 class="text-light mb-0"
                    style="color: var(--white-color);font-size: 32px;font-family: 'Alegreya Sans', sans-serif;">Markets
                </h2>
            </div>
        </div>
        <div class="container">
            <div>
                <div class="align-items-center align-content-center">
                    <div class="input-group input-group-lg shadow"><span class="input-group-text"><svg
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-search">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg></span><input class="form-control form-control-sm" type="text"
                            placeholder="Search For Product" name="product_search"><select class="form-select">
                            <option value="all" selected="">All Departments</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->value }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 40px;">
            <div>
                <div class="row">

                    @unless(count($items) == 0)
                        @foreach ($categories as $category)
                            @foreach ($items as $item)
                                @if ($category->id == $item->cat_id)
                                    <div class="col text-start" style="padding-bottom: 50px;">
                                        <a href="#">
                                            <div class="card" data-bss-hover-animate="pulse" style="width: 300px;">
                                                <div class="card-body">
                                                    <div>
                                                        <img class="rounded img-fluid bg-dark border border-dark shadow"
                                                            data-bs-toggle="tooltip" data-bss-tooltip=""
                                                            style="width: 270px;height: 237px;"
                                                            src="assets/img/223-2238298_4k-wallpaper-for-ps4.jpg"
                                                            title={{ $item->name }}>
                                                    </div>
                                                    <div>
                                                        <h3 class="fw-lighter text-start" style="width: 201px;height: 58px;">
                                                            {{ $item->name }}
                                                        </h3>
                                                        <p class="text-start text-muted">{{ $item->desc }} -
                                                            [ {{ $category->name }} ]
                                                        </p><span class="fw-bolder">R
                                                            {{$item->price}}</span>
                                                        <div><button
                                                                class="btn btn-outline-success border rounded-pill border-success shadow"
                                                                type="button" style="margin-top: 6px;">Add To
                                                                Cart</button><button
                                                                class="btn btn-outline-danger border rounded-pill border-danger shadow"
                                                                type="button"
                                                                style="margin-top: 6px;margin-right: 0px;margin-left: 20px;">Add
                                                                To
                                                                Wishlist</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        <div>
                            <h1>No products were found</h1>
                        </div>
                    @endunless

                </div>
            </div>
        </div>

    @endsection
