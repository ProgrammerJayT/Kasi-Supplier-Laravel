<div>


    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    @if (Session::has('item-remove') && count($cartItems) > 0)
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('item-remove') }}
                        </div>
                    @endif

                    @unless(count($cartItems) > 0)
                        <div>
                            <h4 class="alert-heading">No orders</h4>
                            <p>Looks like you haven't placed any orders yet. Click <a href="{{ route('shopping') }}">here</a>
                                to go back to the shop.</p>
                        </div>
                    @else
                        @php
                            print_r($quantity);
                        @endphp
                        @foreach ($items as $key => $item)
                            @for ($i = 0; $i < count($cartItems); $i++)
                                @if ($item->id == $cartItems[$i])
                                    <div class="shopping__cart__table">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
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
                                                                type="number" name="{{ $item->id }}"
                                                                wire:model="quantity.{{ $item->id }}" id="quantity"
                                                                min=1 </div>
                                                    </td>

                                                    <td class="cart__price">R{{ $quantity[$item->id] * $item->price }}</td>
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
                                <a href="{{ route('shopping') }}">
                                    Go to Shop
                                </a>
                            </div>
                        </div>

                        @if (count($cartItems) > 0)
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="continue__btn update__btn">
                                    <button
                                        style="background-color:rgb(255, 255, 255);border-radius:10px;padding:5px;border-color:red;"
                                        wire:click="clear()">
                                        <i style="color:rgb(255, 0, 0);" class="fa fa-trash"></i> Clear cart
                                    </button>
                                </div>
                            </div>
                        @endif

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
                        <h2>Orders</h2>
                        <h4>Your orders - 32 in total</h4>
                        <ul>
                            <li>Successful <span>13</span></li>
                            <li>Pending <span>9</span></li>
                            <li>Canceled <span>10</span></li>
                        </ul>
                        <h4>Customer orders - 15 in total</h4>
                        <ul>
                            <li>Successful <span>9</span></li>
                            <li>Pending <span>1</span></li>
                            <li>Canceled <span>5</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
</div>
