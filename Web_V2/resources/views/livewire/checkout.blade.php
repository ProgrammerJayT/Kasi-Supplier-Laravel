<div>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{ route('checkout-request') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-lg-8 col-md-6">
                            <h4 class="checkout__title">Billing Details</h4>


                            {{-- Display card validation errors if any --}}
                            @if (Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    <p style="color: white; margin-bottom:0px;">
                                        {{ Session::get('error') }}
                                    </p>
                                </div>
                            @endif



                            {{-- Display logged in user information --}}
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Cardholder Name</p>
                                        <p><b>{{ $userInfo->name . ' ' . $userInfo->surname }}</b></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Email<span></span></p>
                                        <p><b>{{ $userInfo->email }}</b></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>User Account<span>*</span></p>
                                        <p><b>{{ ucfirst($user) }}</b></p>
                                    </div>
                                </div>
                            </div>
                            <h4 class="checkout__title"></h4>


                            @if ($hasBankDetails == true)
                                {{-- Display logged in user banking information --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Bank Name</p>
                                            <p><b>{{ $bankingInformation['id'] . ' ' . $userInfo->surname }}</b></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Card Number<span></span></p>
                                            <p><b>{{ $userInfo->name . ' ' . $userInfo->surname }}</b></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout__input">
                                            <p>Account type<span>*</span></p>
                                            <p><b>{{ $userInfo->name . ' ' . $userInfo->surname }}</b></p>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="checkout__title"></h4>
                                {{-- Prompt user for alternative payment card --}}
                                <div class="checkout__input__checkbox">
                                    <label for="alternativePayment">
                                        Would you like to use a different bank card?
                                        <input type="checkbox" id="alternativePayment" name="alternativePayment"
                                            wire:model="alternativePayment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                @if ($alternativePayment)
                                    {{-- Get user's card details --}}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Card number<span>*</span></p>
                                                <input type="numeric" wire:model="cardNumber" name="cardNumber"
                                                    value="{{ old('cardNumber') }}">

                                                @error('cardNumber')
                                                    <p><span>{{ $message }}</span></p>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="checkout__input">
                                                <p>Expiry ({{ now()->year . '-' . now()->month }})<span>*</span></p>
                                                <input type="month" name="cardExpiry" wire:model="cardExpiry"
                                                    value="{{ old('cardExpiry') }}">

                                                @error('cardExpiry')
                                                    <p><span>{{ $message }}</span></p>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-lg-3">
                                            <div class="checkout__input">
                                                <p>CVV<span>*</span></p>
                                                <input type="numeric" name="cardCvv" wire:model="cardCvv"
                                                    value="{{ old('cardCvv') }}">

                                                @error('cardCvv')
                                                    <p><span>{{ $message }}</span></p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    {{-- Get user's card details --}}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Card number<span>*</span></p>
                                                <input type="numeric" disabled>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="checkout__input">
                                                <p>Expiry ({{ now()->year . '-' . now()->month }})<span>*</span></p>
                                                <input type="month" disabled>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="checkout__input">
                                                <p>CVV<span>*</span></p>
                                                <input type="numeric" disabled>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                {{-- Get user's card details --}}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Card number<span>*</span></p>
                                            <input type="numeric" wire:model="cardNumber" name="cardNumber"
                                                value="{{ old('cardNumber') }}">

                                            @error('cardNumber')
                                                <p><span>{{ $message }}</span></p>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkout__input">
                                            <p>Expiry ({{ now()->year . '-' . now()->month }})<span>*</span></p>
                                            <input type="month" name="cardExpiry" wire:model="cardExpiry"
                                                value="{{ old('cardExpiry') }}">

                                            @error('cardExpiry')
                                                <p><span>{{ $message }}</span></p>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkout__input">
                                            <p>CVC<span>*</span></p>
                                            <input type="numeric" name="cardCvc" wire:model="cardCvc"
                                                value="{{ old('cardCvc') }}">

                                            @error('cardCvc')
                                                <p><span>{{ $message }}</span></p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <h4 class="checkout__title"></h4>
                            {{-- Prompt user for delivery address --}}
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Would you like your order to be delivered?
                                    <input type="checkbox" id="acc" name="deliveryChoice"
                                        wire:model="deliveryChoice">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            @if ($deliveryChoice)
                                <p>Please provide your shipping address</p>
                                <div class="checkout__input">
                                    <p>Address<span>*</span></p>
                                    <input type="text" placeholder="Shipping address" class="checkout__input__add"
                                        id="location" name="location">

                                    @error('deliveryAddress')
                                        <p><span>{{ $message }}</span></p>
                                    @enderror
                                </div>

                                <div class="checkout__input">
                                    <input type="text" placeholder="Shipping address" class="checkout__input__add"
                                        id="set-address" hidden name="set-address">
                                </div>
                            @else
                                <div class="checkout__input">
                                    <p>Address<span>*</span></p>
                                    <input type="text" placeholder="Shipping address" class="checkout__input__add"
                                        id="location" name="deliveryAddress" disabled>
                                </div>
                            @endif

                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products"><b>Order item(s)</b></div>
                                <ul class="checkout__total__products">

                                    @if (count($cart) > 0)
                                        @for ($i = 0; $i < count($cart); $i++)
                                            @foreach ($items as $key => $item)
                                                @if ($item->id == $cart[$i])
                                                    <li>{{ $item->name }}</li>
                                                @endif
                                            @endforeach
                                        @endfor
                                    @else
                                        <li>Cart is empty</li>
                                    @endif

                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Total <span><b>R{{ $total }}</b></span></li>
                                </ul>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
</div>
