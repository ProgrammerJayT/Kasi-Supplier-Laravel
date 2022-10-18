<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>kasi vendor admin site</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar-Navigation-with-Button.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar-Navigation-with-Search.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../assets/css/Navbar-Fixed-Side-navbar-fixed-side.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Menu.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="height:80px;background-color:#37434d;color:#ffffff;">
            <div class="container-fluid">
                <h4 style="padding-right: 0px;padding-left: 20px;margin-bottom: -10px;">Programmer J</h4><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="padding-bottom: 10px;">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="www.signout.com"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"></path>
                                </svg>&nbsp;Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="www.signout.com"><i class="fa fa-sign-in"></i>&nbsp;Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div style="margin-top: 50px;padding-bottom: 0px;margin-bottom: -35px;">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-light text-dark mb-0">Available Accounts</h3>
            </div>
        </div>
        <div style="margin-top: 50px;">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Name</th>
                                            <th>Account Type</th>
                                            <th>Status</th>
                                            <th class="text-center">Join date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center" style="background: rgba(55,67,77,0.05);">
                                            <td>Airi Satou</td>
                                            <td>Vendor</td>
                                            <td>Pending</td>
                                            <td class="text-center">2008/11/28</td>
                                        </tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center">
                                            <td><strong>Name</strong></td>
                                            <td><strong>Account Type</strong></td>
                                            <td><strong>Status</strong></td>
                                            <td class="text-center"><strong>Join date</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
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
                    </div>
                    <footer class="bg-white sticky-footer"></footer>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
</body>

</html>