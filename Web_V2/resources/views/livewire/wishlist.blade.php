<div>

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    @if (Session::has('item-remove-success') && count($wishlist) > 0)
                        <div class="alert alert-success" role="alert">
                            <p style="color:white;margin-bottom:0px">{{ Session::get('item-remove-success') }}</p>
                        </div>
                    @endif
                    @if (Session::has('item-remove-fail') && count($wishlist) > 0)
                        <div class="alert alert-danger" role="alert">
                            <p style="color:white;margin-bottom:0px">{{ Session::get('item-remove-fail') }}</p>
                        </div>
                    @endif

                    @unless(count($wishlist) > 0)
                        <div class="alert alert-warning">
                            <h4 style="color:white;" class="alert-heading">No items in your wishlist!</h4>
                            <p style="color:white;">Looks like you haven't added any items to your cart yet. Click <a
                                    href="{{ route('shopping') }}">here</a>
                                to go shop.</p>
                        </div>
                    @else
                        <div class="shopping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlist as $wishItem)
                                        @foreach ($items as $item)
                                            @if ($item->id == $wishItem->item_id)
                                                <tr>
                                                    <td class="product__cart__item">
                                                        <div class="product__cart__item__pic">
                                                            <img src="{{ $item->image }}" alt=""
                                                                style="width:100px;">
                                                        </div>
                                                        <div class="product__cart__item__text">
                                                            <h6>{{ $item->name }}</h6>
                                                        </div>
                                                    </td>

                                                    <td class="cart__price">R{{ $item->price }}</td>
                                                    </td>
                                                    <td class="cart__close">
                                                        <i wire:click="removeItem({{ $wishItem->id }})"
                                                            class="fa fa-close">
                                                        </i>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endunless

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{ route('shopping') }}">Go Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

                @unless(count($wishlist) == 0)
                    <div class="col-lg-4">
                        <div class="cart__total">
                            <h6>My wishlist</h6>
                            <ul>
                                <li>Number of items <span>{{ $wishlist->count() }}</span></li>
                            </ul>
                            <a class="primary-btn">
                                <p style="margin-bottom: 0px; color:white;">Clear wishlist</p>
                            </a>
                        </div>
                    </div>
                @endunless
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

</div>
