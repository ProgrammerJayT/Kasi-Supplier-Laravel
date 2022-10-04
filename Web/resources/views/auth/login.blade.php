@extends('components.auth-layout')

@section('title', 'Hey, please login')

@section('body')

    <body style="background: var(--bs-gray-dark);">
        <section class="position-relative py-4 py-xl-2">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-4 text-center mx-auto">
                        <h1 class="display-1 text-muted">Sign In</h1>
                        <p class="fs-1 fw-lighter text-muted" style="color: var(--bs-pink);">Welcome Back</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow-sm mb-5" style="margin: 0px 0px 50px;background: var(--bs-gray-dark);">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="background: var(--bs-gray-dark);border-style: none;">

                                <form class="text-center" action="login-request" method="POST">
                                    @csrf

                                    @if (Session::get('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif

                                    <div class="mb-3">
                                        <div class="input-group" style="margin: 50px 0px 15px;margin-bottom: 0px;">
                                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                placeholder="Email Address">
                                        </div>
                                    </div>

                                    @error('email')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                {{ $message }}</p>
                                        </div>
                                    @enderror



                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                placeholder="Password">
                                        </div>
                                    </div>

                                    @error('password')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                {{ $message }}</p>
                                        </div>
                                    @enderror

                                    <div class="mb-3" style="margin: 0px 0px 50px;">
                                        <button
                                            class="btn btn-outline-primary fs-5 border rounded-pill border-primary d-block w-100"
                                            type="submit" style="margin: 60px 0px 16px;">Sign In</button>
                                    </div>
                                    <p class="text-muted">Don't have an account?&nbsp;<a href="register">Register Now</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
