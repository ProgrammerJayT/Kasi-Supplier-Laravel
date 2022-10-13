<div>
    <section class="shop spad">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout__input">

                        <h1 style="color:red;">Debugging mode</h1>

                        <input wire:model="search" type="text" placeholder="Search for items here. E.g Tomatoes"
                            name="surname" value="{{ old('surname') }}">

                        @error('surname')
                            <p style="color: red;">{{ $results['message'] }}</p>
                        @enderror

                    </div>
                    <div class="row">

                        @unless(count($items) > 0)
                            <div class="col-lg-12">
                                <div class="shop__cart__item">
                                    <h1>No items found...Try again</h1>
                                </div>
                            </div>
                        @else
                            @foreach ($items as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <img class="product__item__pic set-bg" src="{{ $item->image }}">
                                        <ul class="product__hover">
                                            <li>
                                                <a href="add-to-wishlist">
                                                    <img src="assets/img/icon/heart.png" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                        </img>
                                        <div class="product__item__text" style="border-width: 5px;border-color:black;">
                                            <h6 style="color: blue;"><b>{{ $item->name }}</b></h6>
                                            <h5>R{{ $item->price }}</h5>

                                            <button type="button"
                                                style="background-color: rgb(255, 255, 255);border-radius:15px;margin-top:5px;margin-bottom:10px;"
                                                wire:click="addToCart({{ $item->id }})">+ Add item
                                                to
                                                cart</button>
                                            <h6 style="color: rgb(89, 89, 89);">{{ $item->desc }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endunless


                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="card mb-3" style="border-radius:10px;border-color:rgb(186, 186, 186);border-width:1px;">

                        @if (array_key_exists('message', $results))
                            <div class="alert alert-{{ $results['type'] }}" role="alert">
                                <p style="color: white; margin-bottom:0px;">
                                    {{ $results['message'] }}
                                </p>
                            </div>
                        @endif

                        <div>
                            <div class="card-body p-4">
                                <div class="card-body">

                                    <h5 class="card-title">You have
                                        @if (Session::has('cartItems'))
                                            {{ count(Session::get('cartItems')) }}
                                        @else
                                            0
                                        @endif
                                    </h5>
                                    <p style="margin-bottom: 0px;" class="card-text">items added in your cart.
                                    </p>

                                    <div class="post_button" style="margin-top: 20px;">
                                        <a href="view-cart?user={{ $user }}"
                                            style="width:100%;color:white;text-align:center;" class="site-btn">View
                                            cart</a>

                                    </div>
                                    <div class="post_button" style="margin-top: 20px;">
                                        <button wire:click="clearCart" style="width:100%;color:red;" type="button"
                                            class="site-btn">Clear cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
