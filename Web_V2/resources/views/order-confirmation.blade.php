@extends('components.' . $user . '-layout')
@section('title', 'Order confirmation')

@section('body')

    <section style="background-color: #f3f2ee;">
        <div class="container h-50">

            <div class="row d-flex d-md-flex flex-row justify-content-md-center">
                <div class="col-8 col-md-6">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 0px;">
                            <div style="background: #039a00;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                <h4 style="color: var(--bs-card-bg);text-align: center;padding: 5px;">Order created
                                    successfully</h4>
                            </div>
                            <div style="padding: 16px;">

                                <div class="card-body p-1">

                                    <div class="card-body">
                                        <h5 class="text-muted mb-5">Your order ID is #{{ $orderId }}</h5>
                                        <h6>Please continue to payment so that your order can be prepared for dispatch, if
                                            desired
                                        </h6>
                                        <div class="post_button" style="margin-top: 20px;">
                                            <a href="{{ route('checkout') }}"
                                                style="width:100%;color:white;text-align:center;" class="site-btn">Pay Now
                                                ({{ $total }})</a>
                                        </div>
                                        <div class="post_button" style="margin-top: 20px;">
                                            <button wire:click="clearCart" style="width:100%;color:white;" type="button"
                                                class="site-btn">Pay Later</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    @endsection
