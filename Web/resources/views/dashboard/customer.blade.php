@extends('components.customer-layout')

@section('title', 'Hello there')

@section('body')

    <div class="container">
        <div class="d-sm-flex justify-content-between align-items-center mb-4" style="padding: 20px;">
            <h2 class="text-light mb-0"
                style="color: var(--white-color);font-size: 32px;font-family: 'Alegreya Sans', sans-serif;">Dashboard</h2><a
                class="btn btn-outline-primary btn-lg border rounded-pill border-primary d-none d-sm-inline-block"
                role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
        </div>
    </div>
    <div class="container" style="padding-top: 50px;">
        <div>
            <div class="row text-center">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow-lg border-start-primary py-2" data-bss-hover-animate="pulse">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total Orders</span>
                                    </div>
                                    <div class="text-dark fw-bold h5 mb-0"><span>0</span></div>
                                </div>
                                <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576"
                                        width="1em" height="1em" fill="currentColor"
                                        class="text-primary fa-2x text-gray-300">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M0 24C0 10.75 10.75 0 24 0H96C107.5 0 117.4 8.19 119.6 19.51L121.1 32H312V134.1L288.1 111C279.6 101.7 264.4 101.7 255 111C245.7 120.4 245.7 135.6 255 144.1L319 208.1C328.4 218.3 343.6 218.3 352.1 208.1L416.1 144.1C426.3 135.6 426.3 120.4 416.1 111C407.6 101.7 392.4 101.7 383 111L360 134.1V32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24V24zM224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464zM416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow-lg border-start-success py-2" data-bss-hover-animate="pulse">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-success fw-bold text-xs mb-1">
                                        <span>Successful Orders</span>
                                    </div>
                                    <div class="text-dark fw-bold h5 mb-0">
                                        <span>0</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em"
                                        height="1em" fill="currentColor" class="text-success fa-2x text-gray-300">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M334.6 217.4l-30 27.49C264 282.1 217.8 256.8 202.9 240.6C176 211.2 178.1 165.7 207.3 138.9L289.1 64H282.5C224.7 64 169.1 86.95 128.2 127.8L32 128.1c-17.6 0-32 14.39-32 31.98v159.8c0 17.59 14.4 32.04 31.1 32.04l114.3-.0604l90.5 81.82c27.5 22.37 67.75 18.11 90-9.255l18.12 15.25c15.88 12.1 39.38 10.5 52.38-5.369l31.38-38.6l5.374 4.498c13.75 11 33.88 9.002 45-4.748l9.576-11.83c11.08-13.7 8.979-33.75-4.701-44.86L334.6 217.4zM608 128.1l-96-.1257c-40.98-40.96-96.56-63.88-154.5-63.88L348.9 64c-8 0-15.62 3.197-21.62 8.568L229 162.3C228.9 162.5 228.8 162.7 228.8 162.7C212 178.5 212.4 203.3 226.6 218.7c9.625 10.5 35 21.62 56.13 2.75c0-.125 .25-.125 .375-.25l80-73.1c6.5-5.871 16.62-5.496 22.62 1s5.5 16.62-1 22.62l-26.12 23.87l145.6 118.1c12.12 9.992 19.5 23.49 22.12 37.98L608 351.7c17.6 0 32-14.38 32-31.98V160.1C640 142.4 625.7 128.1 608 128.1z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow-lg border-start-info py-2" data-bss-hover-animate="pulse">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-info fw-bold text-xs mb-1">
                                        <span class="text-danger">Cancelled orders
                                        </span>
                                    </div>
                                    <div class="text-dark fw-bold h5 mb-0">
                                        <span>0</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" viewBox="0 0 16 16"
                                        class="bi bi-exclamation-circle-fill text-danger fa-2x text-gray-300">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow-lg border-start-warning py-2" data-bss-hover-animate="pulse">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                                        <span class="text-secondary" style="font-family: 'Nunito Sans', sans-serif;">Pending
                                            Orders
                                        </span>
                                    </div>
                                    <div class="text-dark fw-bold h5 mb-0">
                                        <span>0</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments text-secondary fa-2x text-gray-300"></i>
                                </div>
                            </div>
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
                                <p class="text-start">User name<span style="margin-left: 200px;">{{ $fullName }}</span>
                                </p>
                                <p>Status<span class="border rounded-pill border-success shadow-sm" data-bs-toggle="tooltip"
                                        data-bss-tooltip=""
                                        style="padding-left: 9px;margin-left: 225px;background: rgba(0,255,56,0.36);padding-right: 10px;"
                                        title="Account successfully verified">Verified</span>
                                </p>
                                <p>Member Since<span style="margin-left: 172px;">{{ $dateJoined }}</span>
                                </p>
                                <span style="margin-top: 10px;padding-left: 0px;">
                                    <a class="btn btn-outline-danger border rounded-pill border-danger shadow-sm"
                                        role="button" style="padding-left: 30px;padding-right: 30px;">Deactivate
                                        Account
                                    </a>
                                </span>
                                <span style="margin-top: 10px;padding-left: 50px;">
                                    <a class="btn btn-outline-info border rounded-pill border-info shadow-sm" role="button"
                                        style="padding-left: 30px;padding-right: 30px;">Signout
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div style="text-align: right;">
            <a class="btn btn-outline-info btn-lg border rounded-pill border-info shadow" role="button"
                href="customer-market" style="padding-right: 30px;padding-left: 30px;">Proceed To
                Market
            </a>
        </div>
    </div>

@endsection
