<div>

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    @unless(count($cartItems) > 0)
                        <div class="alert alert-warning">
                            <h4 class="alert-heading">No items in cart!</h4>
                            <p>Looks like you haven't added any items to your cart yet. Click <a
                                    href="{{ route('shopping', [
                                        'user' => $user,
                                    ]) }}">here</a>
                                to go back to the shop.</p>
                        </div>
                    @else
                        @foreach ($items as $key => $item)
                            @for ($i = 0; $i < count($cartItems); $i++)
                                @if ($item->id == $cartItems[$i])
                                    @php
                                        print_r($cartItems);
                                        echo '<br>';
                                        // print_r($totals);
                                    @endphp

                                    <div class="shopping__cart__table">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    {{-- <th>Total</th> --}}
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="product__cart__item">
                                                        <div class="product__cart__item__pic">
                                                            <img src="{{ $item->image }}" alt=""
                                                                style="width:100px;">
                                                        </div>
                                                        <div class="product__cart__item__text">
                                                            <h6>{{ $item->name }} with ID {{ $item->id }}</h6>
                                                            <h5>R{{ $item->price }}</h5>
                                                        </div>
                                                    </td>
                                                    <td class="quantity__item">
                                                        <div class="quantity" style="width:50%;">
                                                            <input
                                                                style="width:50%;border-radius:10px;border-color:darkgray;"
                                                                type="numeric"
                                                                wire:change="setQuantity({{ $key }})"
                                                                value="1">
                                                        </div>
                                                    </td>
                                                    {{-- <td class="cart__price">R{{ $item->price * $totals[$key] }} --}}
                                                    </td>
                                                    <td class="cart__close"><i wire:click="removeItem({{ $item->id }})"
                                                            class="fa fa-close"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            @endfor
                        @endforeach
                    @endunless

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Clear cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    {{-- <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div> --}}
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            {{-- <li>Subtotal <span>$ 169.50</span></li> --}}
                            {{-- <li>Total <span>R{{ $sum }}</span></li> --}}
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
</div>
