@extends('components.layout')

@section('title', 'Dashboard')

@section('body')

    <body>
        <div class="container">
            <h1>Account Approval<span style="margin-left: 25px;"></span></h1>
        </div>
        <div class="container" style="margin-top: 50px;width: 1500px;">
            <div class="card shadow-lg" style="height: 650px;">
                <div class="card-header justify-content-center align-items-center align-content-center py-3"><span
                        class="fs-5 fw-lighter text-start text-primary">Wishlist Info</span></div>
                <div class="card-body" style="background: #ffffff;">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label
                                    class="form-label">Show&nbsp;
                                    <select class="d-inline-block form-select form-select-sm">
                                        <option value="3" selected="">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select>&nbsp;</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label
                                    class="form-label"><input type="search" class="form-control form-control-sm"
                                        aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid"
                        aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th style="width: 350px;">Account Type</th>
                                    <th style="width: 250px;height: 39px;margin-top: 0px;padding-top: 21px;">First Name
                                    </th>
                                    <th style="width: 250px;">Last Name</th>
                                    <th style="width: 250px;">Address</th>
                                    <th style="width: 151.797px;">Date</th>
                                    <th style="width: 97.5469px;">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-light justify-content-center" style="height: 1px;">
                                    <td style="padding-top: 35px;">Vendor</td>
                                    <td style="padding-top: 35px;width: 146.5px;">Terry</td>
                                    <td style="padding-top: 35px;">Myers</td>
                                    <td style="padding-top: 35px;">Pretoria 125str</td>
                                    <td style="padding-top: 35px;">2008/11/28</td>
                                    <td style="padding-top: 10px;padding-right: 10px;padding-left: 0px;"><button
                                            class="btn btn-outline-success btn-sm border rounded-pill border-success"
                                            type="button"
                                            style="padding-bottom: 4px;margin-bottom: 10px;padding-top: 4px;padding-right: 20px;padding-left: 20px;">Approve</button><button
                                            class="btn btn-outline-danger btn-sm border rounded-pill border-danger"
                                            type="button"
                                            style="margin-right: 10px;padding-right: 20px;padding-left: 20px;">Remove&nbsp;</button>
                                    </td>
                                </tr>
                                <tr class="table-light justify-content-center" style="height: 1px;">
                                    <td style="padding-top: 35px;">Customer</td>
                                    <td style="padding-top: 35px;width: 146.5px;">Terry</td>
                                    <td style="padding-top: 35px;">Myers</td>
                                    <td style="padding-top: 35px;">Pretoria 125str</td>
                                    <td style="padding-top: 35px;">2008/11/28</td>
                                    <td style="padding-top: 10px;padding-right: 10px;padding-left: 0px;"><button
                                            class="btn btn-outline-success btn-sm border rounded-pill border-success"
                                            type="button"
                                            style="padding-bottom: 4px;margin-bottom: 10px;padding-top: 4px;padding-right: 20px;padding-left: 20px;">Approve</button><button
                                            class="btn btn-outline-danger btn-sm border rounded-pill border-danger"
                                            type="button"
                                            style="margin-right: 10px;padding-right: 20px;padding-left: 20px;">Remove&nbsp;</button>
                                    </td>
                                </tr>
                                <tr class="table-light justify-content-center" style="height: 1px;">
                                    <td style="padding-top: 35px;">Vendor</td>
                                    <td style="padding-top: 35px;width: 146.5px;">Terry</td>
                                    <td style="padding-top: 35px;">Myers</td>
                                    <td style="padding-top: 35px;">Pretoria 125str</td>
                                    <td style="padding-top: 35px;">2008/11/28</td>
                                    <td style="padding-top: 10px;padding-right: 10px;padding-left: 0px;"><button
                                            class="btn btn-outline-success btn-sm border rounded-pill border-success"
                                            type="button"
                                            style="padding-bottom: 4px;margin-bottom: 10px;padding-top: 4px;padding-right: 20px;padding-left: 20px;">Approve</button><button
                                            class="btn btn-outline-danger btn-sm border rounded-pill border-danger"
                                            type="button"
                                            style="margin-right: 10px;padding-right: 20px;padding-left: 20px;">Remove&nbsp;</button>
                                    </td>
                                </tr>
                                <tr class="table-light justify-content-center" style="height: 1px;">
                                    <td style="padding-top: 35px;">Customer</td>
                                    <td style="padding-top: 35px;width: 146.5px;">Terry</td>
                                    <td style="padding-top: 35px;">Myers</td>
                                    <td style="padding-top: 35px;">Pretoria 125str</td>
                                    <td style="padding-top: 35px;">2008/11/28</td>
                                    <td style="padding-top: 10px;padding-right: 10px;padding-left: 0px;"><button
                                            class="btn btn-outline-success btn-sm border rounded-pill border-success"
                                            type="button"
                                            style="padding-bottom: 4px;margin-bottom: 10px;padding-top: 4px;padding-right: 20px;padding-left: 20px;">Approve</button><button
                                            class="btn btn-outline-danger btn-sm border rounded-pill border-danger"
                                            type="button"
                                            style="margin-right: 10px;padding-right: 20px;padding-left: 20px;">Remove&nbsp;</button>
                                    </td>
                                </tr>
                                <tr class="table-light justify-content-center" style="height: 1px;">
                                    <td style="padding-top: 35px;">Vendor</td>
                                    <td style="padding-top: 35px;width: 146.5px;">Terry</td>
                                    <td style="padding-top: 35px;">Myers</td>
                                    <td style="padding-top: 35px;">Pretoria 125str</td>
                                    <td style="padding-top: 35px;">2008/11/28</td>
                                    <td style="padding-top: 10px;padding-right: 10px;padding-left: 0px;"><button
                                            class="btn btn-outline-success btn-sm border rounded-pill border-success"
                                            type="button"
                                            style="padding-bottom: 4px;margin-bottom: 10px;padding-top: 4px;padding-right: 20px;padding-left: 20px;">Approve</button><button
                                            class="btn btn-outline-danger btn-sm border rounded-pill border-danger"
                                            type="button"
                                            style="margin-right: 10px;padding-right: 20px;padding-left: 20px;">Remove&nbsp;</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><strong><br><strong>Account Type</strong><br><br></strong></td>
                                    <td><strong><br><strong>First Name</strong><br><br></strong></td>
                                    <td><strong><br><strong>Last Name</strong><br><br></strong></td>
                                    <td><strong>Address</strong></td>
                                    <td><strong><br><strong>Date</strong><br><br></strong></td>
                                    <td><strong>Option</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-header"></div>
            </div>
        </div>
    @endsection
