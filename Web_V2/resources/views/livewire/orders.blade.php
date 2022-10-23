<div>
    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout__input">
                        <div class="row">

                            @unless($orders->count() == 0)
                                <div class="col-lg-9">
                                    <input wire:model="search" type="text" placeholder="Search for order id" name="search">
                                </div>

                                <div class="col-lg-3">
                                    <select wire:model="orderStatus" name="orderStatus" id="orderStatus">
                                        <option value="">All orders</option>
                                        <option value="canceled">Canceled orders</option>
                                        <option value="unpaid">Unpaid orders</option>
                                        <option value="paid">Paid orders</option>
                                    </select>
                                </div>
                            @endunless
                        </div>
                    </div>

                    @unless($orders->count() > 0)
                        <div>
                            <h4 class="alert-heading">No orders</h4>
                            <p>Looks like you haven't placed any orders yet. Click <a
                                    href="{{ route('shopping') }}">here</a>
                                to go back to the shop.</p>
                        </div>
                    @else
                        <div class="shopping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>#Items</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Receipient</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="quantity__item">
                                                <div class="product__cart__item__pic">
                                                    <h6>#{{ $order->id }}</h6>
                                                </div>
                                            </td>
                                            <td class="quantity__item">
                                                <div class="product__cart__item__pic">
                                                    <h6>{{ $order->created_at->toDateString() }}</h6>
                                                </div>
                                            </td>
                                            <td class="cart__price">
                                                <div class="product__cart__item__pic">
                                                    <h6>{{ $order->num_items }}</h6>
                                                </div>
                                            </td>
                                            <td class="cart__price">
                                                <div class="product__cart__item__pic">
                                                    <h6>R{{ $order->amount }}</h6>
                                                </div>
                                            </td>

                                            @if ($order->status == 'pending')
                                                <td class="cart__price">
                                                    <div class="product__cart__item__pic">
                                                        <h6 class="text-warning">Pending</h6>
                                                    </div>
                                                </td>
                                            @elseif($order->status == 'unpaid')
                                                <td class="cart__price">
                                                    <div class="product__cart__item__pic">
                                                        <h6 class="text-danger">Unpaid</h6>
                                                    </div>
                                                </td>
                                            @elseif($order->status == 'paid')
                                                <td class="cart__price">
                                                    <div class="product__cart__item__pic">
                                                        <h6 class="text-success">Paid</h6>
                                                    </div>
                                                </td>
                                            @endif

                                            <td class="cart__price">
                                                <div class="product__cart__item__text">
                                                    <h6>{{ $user->name . ' ' . $user->surname }}</h6>
                                                    <p style="margin-bottom:0px;">{{ $user->email }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endunless

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{ route('shopping') }}">
                                    Go to Shop
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @unless($orders->count() == 0)
                    <div class="col-lg-4">
                        <div class="cart__total">
                            <h2>Orders</h2>
                            <h4>Your orders - {{ $orders->count() }} in total</h4>
                            <ul>
                                <li>Successful <span>13</span></li>
                                <li>Pending <span>9</span></li>
                                <li>Canceled <span>10</span></li>
                            </ul>
                            {{-- <h4>Customer orders - 15 in total</h4>
                            <ul>
                                <li>Successful <span>9</span></li>
                                <li>Pending <span>1</span></li>
                                <li>Canceled <span>5</span></li>
                            </ul> --}}
                        </div>
                    </div>
                @endunless
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
</div>
