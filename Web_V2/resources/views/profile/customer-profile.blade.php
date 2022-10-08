@extends('components.customer-layout')

@section('title', 'Customer Profile')
@section('image-path', $image)

@section('body')
    <section class="vh-100" style="background-color: #efeeee;">
        <div class="container h-50">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">

                            @if (Session::has('image-update-success'))
                                <div class="alert alert-success" role="alert">
                                    <p style="color: white; margin-bottom:0px;">{{ Session::get('image-update-success') }}</p>
                                </div>
                            @endif

                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="{{ $image }}" alt="Avatar" class="img-fluid my-5"
                                    style="width:100px;height:100px;border-radius:1000px;object-fit:contain;" />
                                <h5 style="color: gray">{{ $name }}</h5>
                                <p style="color: gray">{{ $surname }}</p>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Personal Information</h6>
                                    <hr>
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ $email }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Join date</h6>
                                            <p class="text-muted">{{ $date }}</p>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <form method="post"
                                            action="{{ route('update-profile-picture', [
                                                'user' => 'customer',
                                                'email' => $email,
                                            ]) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <hr style="background-color: grey">
                                            <p class="text-muted" style="text-align: right;">Update profile picture
                                            </p>

                                            <div class="image"
                                                style="background-color: #e7e7e7;padding-left:5px;padding-right:5px;">
                                                <input style="border: #ffffff;" type="file" class="form-control" required
                                                    name="image">
                                            </div>

                                            <div class="post_button" style="margin-top: 20px;">
                                                <button style="width:100%;" type="submit" class="site-btn">Update
                                                    Image</button>
                                            </div>
                                        </form>

                                        <div class="post_button" style="margin-top: 20px;width:100%;">
                                            <a style="color: red;text-align:right;width:100%;"
                                                href="{{ route('remove-profile-picture', [
                                                    'user' => 'customer',
                                                    'email' => $email,
                                                ]) }}">Remove
                                                profile picture</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
