@extends('components.layout')

@section('title', 'Create new product')

@section('body')

    <body style="background: var(--bs-gray-dark);">
        <div id="sidemenu">

            <div id="nav-bar" class="l-navbar">
                <nav class="nav">
                    <div>
                        <div class="nav_list"><a class="nav_link" href="" title="Dashboard"><i
                                    class="fa fa-star bx bx-grid-alt nav_icon" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-placement="right" title="Dashboard"></i><span class="nav_name">Main
                                    Menu</span></a><a class="nav_link" href=""
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
                                </svg><span class="nav_name">Stats</span></a><a class="nav_link" href=""><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-bank2 bx bx-bar-chart-alt nav_icon"
                                    data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right"
                                    title="Banking Details">
                                    <path
                                        d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z">
                                    </path>

                                </svg><span class="nav_name">Stats</span></a><a class="nav_link" href=""><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                    fill="currentColor" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-placement="right" class="bx bx-bar-chart-alt nav_icon" title="Edit Profile">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                    </path>
                                </svg><span class="nav_name">Stats</span></a></div><a class="nav_link signout"
                            href="" title="Signout"><i class="fa fa-star bx bx-log-out nav_icon"
                                data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right"
                                title="Signout"></i><span class="nav_name">Signout</span></a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h2 class="text-light mb-0"
                    style="color: var(--white-color);font-size: 32px;font-family: 'Alegreya Sans', sans-serif;"></h2>
            </div>
        </div>
        <section class="position-relative py-4 py-xl-1">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h1 class="display-2 text-muted">Post On Market</h1>
                        <p class="w-lg-50">Sell your product(s) here.</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow mb-5" style="margin: 0px -100px 48px;background: var(--bs-gray-dark);">
                            <div class="card-body d-flex flex-column align-items-center">

                                <form class="text-center" method="POST" action="{{ route('create-product-request') }}"
                                    enctype="multipart/form-data">

                                    @if (Session::has('fail'))
                                        <div class="d-flex justify-content-center align-items-center align-content-center"
                                            style="padding-top: 10px;">
                                            <div class="alert alert-danger border rounded alert-dismissible"
                                                role="alert" style="padding-right: 50px;padding-left: 51px;"><button
                                                    type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button><span>{{ Session::get('fail') }}<br></span>
                                            </div>
                                        </div>
                                    @endif

                                    @if (Session::has('success'))
                                        <div class="d-flex justify-content-center align-items-center align-content-center"
                                            style="padding-top: 10px;">
                                            <div class="alert alert-success border rounded alert-dismissible"
                                                role="alert" style="padding-right: 50px;padding-left: 51px;"><button
                                                    type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button><span>{{ Session::get('success') }}<br></span>
                                            </div>
                                        </div>
                                    @endif

                                    @csrf

                                    <div style="margin: 0px;width: 360px;padding-bottom: 20px;padding-top: 40px;">
                                        <input class="form-control form-control-lg" type="text" name="product_name"
                                            placeholder="Name Of Product" value="{{ old('product_name') }}">
                                    </div>

                                    @error('product_name')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                Product Name Is Required</p>
                                        </div>
                                    @enderror

                                    <div style="padding-bottom: 20px;width: 360px;margin: 0px;padding-top: 10px;">
                                        <textarea class="form-control form-control-lg" name="product_description" placeholder="Brief Description of Product"
                                            value="{{ old('product_description') }}" maxlength="100"></textarea>
                                    </div>

                                    @error('product_description')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                Product Description Is Required</p>
                                        </div>
                                    @enderror

                                    <div style="margin: 0px;padding-bottom: 20px;width: 360px;padding-top: 10px;"><input
                                            class="form-control form-control-lg" type="text" name="product_price"
                                            placeholder="R00.00" value="{{ old('product_price') }}" inputmode="numeric">
                                    </div>

                                    @error('product_price')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                Product Price Is Required</p>
                                        </div>
                                    @enderror

                                    <div class="mb-3" style="width: 360px;margin: 0px;padding-top: 10px;">
                                        <div class="input-group" style="margin: 0px 0px 16px;"><span
                                                class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="1em" height="1em" fill="currentColor"
                                                    viewBox="0 0 16 16" class="bi bi-exclamation-square">
                                                    <path
                                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z">
                                                    </path>
                                                    <path
                                                        d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z">
                                                    </path>
                                                </svg></span><select class="form-select form-select-lg"
                                                name="department_Type" value="{{ old('department_Type') }}">

                                                <option value="" selected="">All Departments</option>

                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->value }}">{{ $category->name }}</option>
                                                @endforeach

                                            </select></div>
                                    </div>

                                    @error('department_Type')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                {{ $message }}</p>
                                        </div>
                                    @enderror


                                    <div
                                        style="margin: 0px;padding-bottom: 0px;width: 360px;padding-top: 10px;margin-bottom:20px">
                                        <input class="form-control form-control-lg" name="product_image" type="file"
                                            value="{{ old('product_image') }}" accept="image/*">
                                    </div>

                                    @error('product_image')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                Product Image Is Required</p>
                                        </div>
                                    @enderror

                                    <div class="mb-3" style="margin: 0px 0px ;"><button
                                            class="btn btn-outline-primary fs-5 border rounded-pill border-primary shadow-sm d-block w-100"
                                            type="submit" style="margin: 60px 0px 16px;margin-bottom: 0px;">Post</button>
                                    </div>

                                </form>

                                <div class="mb-3" style="margin: 0px 0px 50px;"><a
                                        class="btn btn-outline-secondary fs-5 border rounded-pill border-secondary shadow-sm d-block w-100"
                                        role="button" href=""
                                        style="margin: 60px 0px 16px;margin-bottom: 0px;margin-top: 10px;padding-right: 140px;padding-left: 140px;">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
