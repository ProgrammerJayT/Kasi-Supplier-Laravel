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
                                    <div style="margin: 0px 0px 16px;">
                                        <input class="form-control form-control-lg" type="text" name="surname"
                                            placeholder="Surname" value="{{ old('surname') }}">
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
                                        <div class="input-group" style="margin: 0px 0px 16px;"><span
                                                class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 -32 576 576" width="1em" height="1em"
                                                    fill="currentColor">
                                                    <path
                                                        d="M408 120C408 174.6 334.9 271.9 302.8 311.1C295.1 321.6 280.9 321.6 273.2 311.1C241.1 271.9 168 174.6 168 120C168 53.73 221.7 0 288 0C354.3 0 408 53.73 408 120zM288 152C310.1 152 328 134.1 328 112C328 89.91 310.1 72 288 72C265.9 72 248 89.91 248 112C248 134.1 265.9 152 288 152zM425.6 179.8C426.1 178.6 426.6 177.4 427.1 176.1L543.1 129.7C558.9 123.4 576 135 576 152V422.8C576 432.6 570 441.4 560.9 445.1L416 503V200.4C419.5 193.5 422.7 186.7 425.6 179.8zM150.4 179.8C153.3 186.7 156.5 193.5 160 200.4V451.8L32.91 502.7C17.15 508.1 0 497.4 0 480.4V209.6C0 199.8 5.975 190.1 15.09 187.3L137.6 138.3C140 152.5 144.9 166.6 150.4 179.8H150.4zM327.8 331.1C341.7 314.6 363.5 286.3 384 255V504.3L192 449.4V255C212.5 286.3 234.3 314.6 248.2 331.1C268.7 357.6 307.3 357.6 327.8 331.1L327.8 331.1z">
                                                    </path>
                                                </svg></span><input class="form-control form-control-lg" type="text"
                                                placeholder="Location" name="location">
                                        </div>
                                    </div>

                                    {{-- Error section --}}
                                    @error('location')
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
                                    <p class="text-muted">Already have an account?&nbsp;<a href="">Sign In</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
