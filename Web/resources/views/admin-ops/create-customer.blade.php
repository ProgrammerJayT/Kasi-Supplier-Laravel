@extends('components.admin-layout')
@section('title', 'Create customer')
@section('page', 'Create customer')

@section('body')

    <div class="d-flex d-xl-flex justify-content-center justify-content-xl-center" style="width: 100%;">
        <section class="position-relative py-4 py-xl-5" style="width: 100%;">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-5" style="border-style: none;border-radius: 20px;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="border-style: none;border-radius: 20px;">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"
                                    style="background: var(--bs-red);"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                                        class="bi bi-person">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                        </path>
                                    </svg>
                                </div>
                                <form class="text-center" method="post" style="width: 100%;"
                                    action="{{ route('add-user', ['type' => 'customer']) }}">

                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif

                                    @if (Session::has('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif

                                    @csrf
                                    <div class="mb-3"><label class="form-label"
                                            style="width: 100%;text-align: left;">Name</label><input class="form-control"
                                            type="text" name="name" required="" value="{{ old('name') }}">

                                        {{-- Display error message --}}

                                        @error('name')
                                            <div class="d-flex flex-column align-items-start">
                                                <span
                                                    style="width: 100%;text-align: right;color: var(--bs-red);font-weight: bold;font-size: 15px;">
                                                    {{ $message }}
                                                </span>
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="mb-3"><label class="form-label"
                                            style="width: 100%;text-align: left;">Surname</label><input class="form-control"
                                            type="text" name="surname" required="" value="{{ old('surname') }}">

                                        {{-- Display error message --}}

                                        @error('surname')
                                            <div class="d-flex flex-column align-items-start">
                                                <span
                                                    style="width: 100%;text-align: right;color: var(--bs-red);font-weight: bold;font-size: 15px;">
                                                    {{ $message }}
                                                </span>
                                            </div>
                                        @enderror

                                    </div>




                                    <div class="mb-3">
                                        <label class="form-label" style="width: 100%;text-align: left;">Email</label>
                                        <input class="form-control" type="email" name="email" required=""
                                            value="{{ old('email') }}">
                                        <div class="d-flex flex-column align-items-start">

                                            {{-- Display error message --}}

                                            @error('email')
                                                <div class="d-flex flex-column align-items-start">
                                                    <span
                                                        style="width: 100%;text-align: right;color: var(--bs-red);font-weight: bold;font-size: 15px;">
                                                        {{ $message }}
                                                    </span>
                                                </div>
                                            @enderror
                                        </div>



                                        <div class="mb-3"><label class="form-label"
                                                style="width: 100%;text-align: left;">Password</label><input
                                                class="form-control" type="password" name="password" required="">

                                            {{-- Display error message --}}

                                            @error('password')
                                                <div class="d-flex flex-column align-items-start">
                                                    <span
                                                        style="width: 100%;text-align: right;color: var(--bs-red);font-weight: bold;font-size: 15px;">
                                                        {{ $message }}
                                                    </span>
                                                </div>
                                            @enderror

                                        </div>


                                        <div class="mb-3"><label class="form-label"
                                                style="width: 100%;text-align: left;">Confirm password</label><input
                                                class="form-control" type="password" name="password_confirmation"
                                                required="">

                                            {{-- Display error message --}}

                                            @error('password_confirmation')
                                                <div class="d-flex flex-column align-items-start">
                                                    <span
                                                        style="width: 100%;text-align: right;color: var(--bs-red);font-weight: bold;font-size: 15px;">
                                                        {{ $message }}
                                                    </span>
                                                </div>
                                            @enderror

                                        </div>

                                        <div class="mb-3" style="margin-top: 20px;"><button
                                                class="btn btn-primary d-block w-100" type="submit"
                                                style="color: var(--km-bg);background: var(--km-black);border-radius: 10px;border-style: none;">
                                                Register
                                                Customer</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
