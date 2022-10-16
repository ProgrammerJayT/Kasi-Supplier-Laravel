<div>


    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout__input">
                        <div class="row">
                            <div class="col-lg-9">
                                <input wire:model="search" type="text" placeholder="Search for items here. E.g Tomatoes"
                                    name="search">
                            </div>

                            <div class="col-lg-3">
                                <select name="filter" id="type" value="">
                                    <option value="">All orders</option>
                                    <option value="vendor">My orders</option>
                                    <option value="customer">Customer orders</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    @if (Session::has('item-remove') && count($cartItems) > 0)
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('item-remove') }}
                        </div>
                    @endif

                    @unless(count($cartItems) == 0)
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
                                        <th>NO. of items</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Receipient</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="quantity__item">
                                            <div class="product__cart__item__pic">
                                                <h6>#59</h6>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="product__cart__item__pic">
                                                <h6>16/12/2022</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__pic">
                                                <h6>13</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__pic">
                                                <h6>R9210</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__pic">
                                                <h6 style="color: green;">Complete</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__text">
                                                <h6>Irvin Ngobeni</h6>
                                                <p style="margin-bottom:0px;">irvin@kasi.com</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="quantity__item">
                                            <div class="product__cart__item__pic">
                                                <h6>#68</h6>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="product__cart__item__pic">
                                                <h6>16/12/2022</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__pic">
                                                <h6>11</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__pic">
                                                <h6>R2210</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__pic">
                                                <h6 style="color: red;">Canceled</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__text">
                                                <h6>Irvin Ngobeni</h6>
                                                <p style="margin-bottom:0px;">irvin@kasi.com</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="quantity__item">
                                            <div class="product__cart__item__pic">
                                                <h6>#98</h6>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="product__cart__item__pic">
                                                <h6>16/12/2022</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__pic">
                                                <h6>6</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__pic">
                                                <h6>R5210</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__pic">
                                                <h6 style="color: yellow;">Pending</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <div class="product__cart__item__text">
                                                <h6>Irvin Ngobeni</h6>
                                                <p style="margin-bottom:0px;">irvin@kasi.com</p>
                                            </div>
                                        </td>
                                    </tr>
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
                <div class="col-lg-4">
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
