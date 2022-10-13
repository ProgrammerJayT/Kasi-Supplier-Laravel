<div>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                {{-- <form action="{{ route('checkout-request') }}" role="form" method="POST"> --}}
                <form wire:submit.prevent="submit">
                    @csrf
                    <div class="row">

                        <div class="col-lg-8 col-md-6">
                            <h4 class="checkout__title">Billing Details</h4>
                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Cardholder Name</p>
                                        <p><span><b>{{ $userInfo->name . ' ' . $userInfo->surname }}</b></span></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Email<span></span></p>
                                        <p><span><b>{{ $userInfo->email }}</b></span></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Account type<span>*</span></p>
                                        <p><span><b>{{ ucfirst($user) }}</b></span></p>
                                    </div>
                                </div>
                            </div>

                            <h4 class="checkout__title"></h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Card number<span>*</span></p>
                                        <input type="numeric" wire:model="cardNumber">

                                        @error('cardNumber')
                                            <p><span>{{ $message }}</span></p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Expiry ({{ now()->year . '-' . now()->month }})<span>*</span></p>
                                        <input type="month" wire:model="cardExpiry">

                                        @error('cardExpiry')
                                            <p><span>{{ $message }}</span></p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <div class="checkout__input">
                                        <p>CVV<span>*</span></p>
                                        <input type="number" min=0 wire:model="cardCvv">

                                        @error('cardCvv')
                                            <p><span>{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Would you like your order to be delivered?
                                    <input type="checkbox" id="acc" wire:model="deliveryChoice">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <h4 class="checkout__title"></h4>

                            @if ($deliveryChoice)
                                <p>Please provide your shipping address</p>
                                <div class="checkout__input">
                                    <p>Address<span>*</span></p>
                                    <input type="text" placeholder="Shipping address" class="checkout__input__add"
                                        id="location" wire:model="deliveryAddress">

                                    @error('deliveryAddress')
                                        <p><span>{{ $message }}</span></p>
                                    @enderror
                                </div>
                            @else
                                <div class="checkout__input">
                                    <p>Address<span>*</span></p>
                                    <input type="text" placeholder="Shipping address" class="checkout__input__add"
                                        id="location" wire:model="deliveryAddress" disabled value="">

                                    @error('deliveryAddress')
                                        <p><span>{{ $message }}</span></p>
                                    @enderror
                                </div>
                            @endif

                            <div class="checkout__input">
                                <input type="text" name="latitude" id="lat" wire:model="latitude">
                            </div>

                            <div class="checkout__input">
                                <input type="text" name="longitude" id="lng" wire:model="longitude">
                            </div>

                            <div class="checkout__input">
                                <p>Order notes</p>
                                <input type="text"
                                    placeholder="Notes about your order, e.g. special notes for delivery (Optional)."
                                    name="notes">
                            </div>

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
