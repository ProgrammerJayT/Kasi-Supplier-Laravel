@extends('components.' . $user . '-layout')

@section('title', 'Vendor Profile')
@section('image-path', $image)
@section('username', $name)

@section('body')
    <section style="background-color: #efeeee;">
        <div class="container h-50">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">

                            @if (Session::has('image-update-success'))
                                <div class="alert alert-success" role="alert">
                                    <p style="color: white; margin-bottom:0px;">{{ Session::get('image-update-success') }}
                                    </p>
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
                                        <form method="post" action="{{ route('update-profile-picture') }}"
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
                                                href="{{ route('remove-profile-picture') }}">Remove
                                                profile picture</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                {{-- Show user's banking details --}}
                <div class="col-lg-6">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">

                            @if (Session::has('banking-update-success'))
                                <div class="alert alert-success" role="alert">
                                    <p style="color: white; margin-bottom:0px;">{{ Session::get('banking-update-success') }}
                                    </p>
                                </div>
                            @endif

                            @if (Session::has('banking-update-fail'))
                                <div class="alert alert-danger" role="alert">
                                    <p style="color: white; margin-bottom:0px;">{{ Session::get('banking-update-fail') }}
                                    </p>
                                </div>
                            @endif

                            @unless($accountInfo->exists == true)
                                <div class="col-md-4 gradient-custom text-center text-white"
                                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="{{ $image }}" alt="Avatar" class="img-fluid my-5"
                                        style="width:100px;height:100px;border-radius:1000px;object-fit:contain;" />
                                    <h5 style="color: gray">{{ $name }}</h5>
                                    <p style="color: gray">{{ $surname }}</p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6>Banking Details</h6>
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
                                            <form method="post" action="{{ route('update-banking-details') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <hr style="background-color: grey">
                                                <p class="text-muted" style="text-align: right;">Update profile picture
                                                </p>

                                                <div class="post_button" style="margin-top: 20px;">
                                                    <button style="width:100%;" type="submit" class="site-btn">Update
                                                        Image</button>
                                                </div>
                                            </form>

                                            <div class="post_button" style="margin-top: 20px;width:100%;">
                                                <a style="color: grey;text-align:right;width:100%;"
                                                    href="{{ route('remove-banking-details') }}">Remove banking details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-12">
                                    <div class="card-body p-4">
                                        <h5>Banking details not provided!</h5>
                                        <div class="container">
                                            <form method="post" action="{{ route('update-banking-details') }}">
                                                @csrf
                                                <hr style="background-color: grey">
                                                <p class="text-muted" style="text-align: right;">
                                                    Provide your banking details
                                                </p>

                                                <div class="checkout__input">
                                                    <div style="width:100%;margin-bottom:100px;">
                                                        <p>Bank<span>*</span></p>

                                                        @error('bank')
                                                            <p style="color: red;">{{ $message }}</p>
                                                        @enderror

                                                        <select name="bank" value="{{ old('bank') }}">

                                                            @unless(count($banks) > 0)
                                                                <option value="0">No banks available</option>
                                                            @else
                                                                <option value="">Choose bank</option>
                                                                @foreach ($banks as $bank)
                                                                    <option value="{{ $bank->value }}">{{ $bank->name }}
                                                                    </option>
                                                                @endforeach
                                                            @endunless

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="checkout__input">
                                                    <div style="width:100%;margin-bottom:100px;">
                                                        <p>Account type<span>*</span></p>

                                                        @error('bank_account_type')
                                                            <p style="color: red;">{{ $message }}</p>
                                                        @enderror

                                                        <select name="bank_account_type"
                                                            value="{{ old('bank_account_type') }}">

                                                            @unless(count($bankAccountTypes) > 0)
                                                                <option value="0">No account types available</option>
                                                            @else
                                                                <option value="">Choose account type</option>
                                                                @foreach ($bankAccountTypes as $bankAccountType)
                                                                    <option value="{{ $bankAccountType->value }}">
                                                                        {{ $bankAccountType->name }}
                                                                    </option>
                                                                @endforeach
                                                            @endunless

                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Get user's account number --}}
                                                <div class="checkout__input">
                                                    <p>Account Number<span>*</span></p>

                                                    @error('bank_account_number')
                                                        <p style="color: red;">{{ $message }}</p>
                                                    @enderror

                                                    <input type="number" name="bank_account_number"
                                                        value="{{ old('bank_account_number') }}">
                                                </div>

                                                {{-- Get user's card number --}}
                                                <div class="checkout__input">
                                                    <p>Card Number<span>*</span></p>

                                                    @error('bank_card_number')
                                                        <p style="color: red;">{{ $message }}</p>
                                                    @enderror

                                                    <input type="number" name="bank_card_number"
                                                        value="{{ old('bank_card_number') }}">
                                                </div>

                                                {{-- Get user's card expiry --}}
                                                <div class="checkout__input">
                                                    <p>Card Expiry<span>*</span></p>

                                                    @error('bank_card_expiry')
                                                        <p style="color: red;">{{ $message }}</p>
                                                    @enderror

                                                    <input type="month" name="bank_card_expiry"
                                                        value="{{ old('bank_card_expiry') }}">
                                                </div>

                                                {{-- Get user's card cvv --}}
                                                <div class="checkout__input">
                                                    <p>Card CVV<span>*</span></p>

                                                    @error('bank_card_cvv')
                                                        <p style="color: red;">{{ $message }}</p>
                                                    @enderror

                                                    <input type="number" name="bank_card_cvv"
                                                        value="{{ old('bank_card_cvv') }}">
                                                </div>

                                                <div class="post_button" style="margin-top: 20px;">
                                                    <button style="width:100%;" type="submit" class="site-btn">
                                                        Update banking details
                                                    </button>
                                                </div>
                                            </form>

                                            <div class="post_button" style="margin-top: 20px;width:100%;">
                                                <a style="color: grey;text-align:right;width:100%;"
                                                    href="{{ route('remove-banking-details') }}">Remove banking details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endunless

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
