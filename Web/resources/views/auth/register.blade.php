@extends('components.layout')

@section('title', 'Register your new account here')

@section('body')

    <body style="background: var(--bs-gray-dark);">
        <section class="position-relative py-1 py-xl-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h1 class="display-2 text-muted">Create Account</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow mb-5" style="margin: 0px -100px 48px;background: var(--bs-gray-dark);">
                            <div class="card-body d-flex flex-column align-items-center">

                                <form class="text-center" style="margin-top: 20px;" action="registration-request"
                                    method="POST">
                                    @csrf

                                    @if (Session::get('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif

                                    {{-- Prompt for user's name --}}
                                    <div class="mb-3">
                                        <div class="input-group" style="margin: 0px 0px 16px;">
                                            <span class="input-group-text">
                                                <i class="far fa-envelope"></i>
                                            </span>
                                            <input class="form-control form-control-lg" type="text" name="name"
                                                placeholder="Name" value="{{ old('name') }}">
                                        </div>
                                    </div>

                                    {{-- Error section --}}
                                    @error('name')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                {{ $message }}</p>
                                        </div>
                                    @enderror


                                    {{-- Prompt for user's surname --}}
                                    <div class="mb-3">
                                        <div class="input-group" style="margin: 0px 0px 16px;">
                                            <span class="input-group-text">
                                                <i class="far fa-envelope"></i>
                                            </span>
                                            <input class="form-control form-control-lg" type="text" name="surname"
                                                placeholder="Surname" value="{{ old('surname') }}">
                                        </div>
                                    </div>

                                    {{-- Error section --}}
                                    @error('surname')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                {{ $message }}</p>
                                        </div>
                                    @enderror



                                    {{-- Prompt for user's email --}}
                                    <div class="mb-3">
                                        <div class="input-group" style="margin: 0px 0px 16px;">
                                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                placeholder="Email address">
                                        </div>
                                    </div>

                                    {{-- Error section --}}
                                    @error('email')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                {{ $message }}</p>
                                        </div>
                                    @enderror


                                    <div class="mb-3">
                                        <div class="input-group" style="margin: 0px 0px 16px;">
                                            <select class="form-select form-select-lg" name="type">
                                                <option value="" selected>--Account Type--</option>
                                                <option value="customer">Customer</option>
                                                <option value="vendor">Vendor</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Error section --}}
                                    @error('type')
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

                                    {{-- Error section --}}
                                    @error('password')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                {{ $message }}</p>
                                        </div>
                                    @enderror


                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512"
                                                    width="1em" height="1em" fill="currentColor">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <input class="form-control form-control-lg" type="password"
                                                name="password_confirmation" placeholder="Retype Password">
                                        </div>
                                    </div>

                                    {{-- Error section --}}
                                    @error('password_confirmation')
                                        <div>
                                            <p
                                                class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">
                                                {{ $message }}</p>
                                        </div>
                                    @enderror


                                    <div class="mb-3" style="margin: 0px 0px 50px;">
                                        <button
                                            class="btn btn-outline-primary fs-5 border rounded-pill border-primary shadow-sm d-block w-100"
                                            type="submit" style="margin: 60px 0px 16px;">Register Account&nbsp;
                                        </button>
                                    </div>
                                    <p class="text-muted">Already have an account?&nbsp;
                                        <a href="/login">Sign In</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
