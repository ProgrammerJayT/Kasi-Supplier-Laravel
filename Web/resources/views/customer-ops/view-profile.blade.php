@extends('components.customer-layout')

@section('body')
    <div class="container">
        <div class="d-sm-flex justify-content-between align-items-center mb-4" style="padding: 20px;">
            <h2 class="text-light mb-0"
                style="color: var(--white-color);font-size: 32px;font-family: 'Alegreya Sans', sans-serif;">User Profile</h2>
        </div>
    </div>
    <div id="wrapper" style="height: 712px;width: 1247px;margin-top: -50px;margin-bottom: -509px;">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                                last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                                last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3" style="margin-right: -20px;">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">
                                                            <strong>Email Address</strong>
                                                        </label>
                                                        <input class="form-control" type="email" id="email"
                                                            placeholder="{{ $user->email }}" name="email" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="first_name">
                                                            <strong>First Name</strong>
                                                        </label>
                                                        <input class="form-control" type="text" id="first_name"
                                                            placeholder="{{ $user->name }}" name="name" disabled>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="last_name">
                                                            <strong>Last Name</strong>
                                                        </label>
                                                        <input class="form-control" type="text" id="last_name"
                                                            placeholder="{{ $user->surname }}" name="surname" disabled>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="country">
                                                            <strong>User Type</strong>
                                                        </label>
                                                        <input class="form-control" type="text" id="country"
                                                            placeholder="Customer" name="type" disabled="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
