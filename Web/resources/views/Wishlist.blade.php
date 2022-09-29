@extends('components.admin-layout')

@section('title', 'Dashboard')

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
            <h2 class="text-light mb-0" style="color: var(--white-color);font-size: 32px;font-family: 'Alegreya Sans', sans-serif;">My Wishlist</h2>
        </div>
    </div>
    <div class="container-fluid" style="height: 967.906px;margin-top: 50px;">
        <div class="card shadow-lg" style="height: 650px;">
            <div class="card-header justify-content-center align-items-center align-content-center py-3"><span class="fs-5 fw-lighter text-start text-primary">Wishlist Info</span></div>
            <div class="card-body" style="background: #ffffff;">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                    <option value="3" selected="">3</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                </select>&nbsp;</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th style="width: 306.109px;height: 39px;margin-top: 0px;padding-top: 21px;">Item Name</th>
                                <th style="width: 380.875px;">Vendor Name</th>
                                <th style="width: 362.578px;">Address</th>
                                <th style="width: 228.375px;">Amount</th>
                                <th style="width: 151.797px;">Wish Date</th>
                                <th style="width: 97.5469px;">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-light justify-content-center" style="height: 100px;">
                                <td><img class="rounded" src="../assets/img/223-2238298_4k-wallpaper-for-ps4.jpg" width="200" height="125"></td>
                                <td style="padding-top: 60px;width: 146.5px;">Airi Satou</td>
                                <td style="padding-top: 60px;">Accountant</td>
                                <td style="padding-top: 60px;">Tokyo</td>
                                <td style="padding-top: 60px;">R00.00</td>
                                <td style="padding-top: 60px;">2008/11/28</td>
                                <td style="padding-top: 35px;"><button class="btn btn-outline-success btn-sm border rounded-pill border-success" type="button" style="padding-bottom: 4px;margin-bottom: 10px;padding-top: 4px;padding-right: 12px;padding-left: 13px;">Add to Cart</button><button class="btn btn-outline-danger btn-sm border rounded-pill border-danger" type="button" style="margin-right: 10px;padding-right: 20px;padding-left: 20px;">Remove&nbsp;</button></td>
                            </tr>
                            <tr class="shadow-lg justify-content-center" style="height: 100px;">
                                <td><img class="rounded" src="../assets/img/223-2238298_4k-wallpaper-for-ps4.jpg" width="200" height="125" loading="auto"></td>
                                <td style="padding-top: 60px;width: 146.5px;">Airi Satou</td>
                                <td style="padding-top: 60px;">Accountant</td>
                                <td style="padding-top: 60px;">Tokyo</td>
                                <td style="padding-top: 60px;">R00.00</td>
                                <td style="padding-top: 60px;">2008/11/28</td>
                                <td style="padding-top: 35px;"><button class="btn btn-outline-success btn-sm border rounded-pill border-success" type="button" style="padding-bottom: 4px;margin-bottom: 10px;padding-top: 4px;padding-right: 12px;padding-left: 13px;">Add to Cart</button><button class="btn btn-outline-danger btn-sm border rounded-pill border-danger" type="button" style="margin-right: 10px;padding-right: 20px;padding-left: 20px;">Remove&nbsp;</button></td>
                            </tr>
                            <tr class="table-light justify-content-center" style="height: 100px;">
                                <td><img class="rounded" src="../assets/img/223-2238298_4k-wallpaper-for-ps4.jpg" width="200" height="125"></td>
                                <td style="padding-top: 60px;width: 146.5px;">Airi Satou</td>
                                <td style="padding-top: 60px;">Accountant</td>
                                <td style="padding-top: 60px;">Tokyo</td>
                                <td style="padding-top: 60px;">R00.00</td>
                                <td style="padding-top: 60px;">2008/11/28</td>
                                <td style="padding-top: 35px;"><button class="btn btn-outline-success btn-sm border rounded-pill border-success" type="button" style="padding-bottom: 4px;margin-bottom: 10px;padding-top: 4px;padding-right: 12px;padding-left: 13px;">Add to Cart</button><button class="btn btn-outline-danger btn-sm border rounded-pill border-danger" type="button" style="margin-right: 10px;padding-right: 20px;padding-left: 20px;">Remove&nbsp;</button></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Item&nbsp;</strong></td>
                                <td><strong>Item Name</strong></td>
                                <td><strong>Vendor Name</strong></td>
                                <td><strong>Address</strong></td>
                                <td><strong>Amount</strong></td>
                                <td><strong>Wish Date</strong></td>
                                <td><strong>Option</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 3 of $total_Sum</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="card-header"></div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/zectStudio---Sidebar-Menu-by-bbbootstrap.js"></script>
</body>
@endsection
