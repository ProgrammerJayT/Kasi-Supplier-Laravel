@extends('components.' . $user . '-layout')
@section('title', 'Payment success')
@section('username', $name)
@section('image-path', $image)

@section('body')
    <section style="background-color: #f3f2ee;">
        <div class="container h-50">

            <div class="row d-flex d-md-flex flex-row justify-content-md-center">
                <div class="col-8 col-md-6">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 0px;">
                            <div style="background: #039a00;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                <h4 style="color: var(--bs-card-bg);text-align: center;padding: 5px;">Payment successful</h4>
                            </div>
                            <div style="padding: 16px;">

                                <div class="card-body p-1">

                                    <div class="card-body">
                                        <h4 class="text-muted mb-5">Your payment was successful</h4>

                                        @if($isDelivery)
                                            <h6>Your order will be delivered to you shortly</h6>
                                        @else
                                            <h6>You may come collect your order anytime during these working hours</h6>
                                            <ul>
                                                <li>Monday - Friday: 8am - 5pm</li>
                                                <li>Saturday: 8am - 1pm</li>
                                                <li>Sunday: Closed</li>
                                            </ul>
                                        @endif

                                        <div class="post_button" style="margin-top: 20px;">
                                            <a href="{{ route('orders') }}"
                                                style="width:100%;color:white;text-align:center;" class="site-btn">My Orders</a>
                                        </div>
                                        <div class="post_button" style="margin-top: 20px;">
                                            <a href="{{ route('shopping') }}"
                                                style="width:100%;color:white;text-align:center;" class="site-btn">Continue Shopping</a>
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
