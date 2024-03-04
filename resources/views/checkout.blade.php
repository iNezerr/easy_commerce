@extends('layouts.support')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
@endsection

@section('main-content')
    <!--suppress ALL -->
    <div class="product-container">

        <div class="container">
            <div class="product-box custom-product-box">
                <form class="checkout" onsubmit="return false">
                    <div class="checkout-header">
                        <h1 class="checkout-title">
                            Checkout
                            <span class="checkout-price">$10</span>
                        </h1>
                    </div>
                    <p>
                        <input type="text" class="checkout-input checkout-name" placeholder="Your name" autofocus>
                        <input type="text" class="checkout-input checkout-exp" placeholder="MM">
                        <input type="text" class="checkout-input checkout-exp" placeholder="YY">
                    </p>
                    <p>
                        <input type="text" class="checkout-input checkout-card" placeholder="4111 1111 1111 1111">
                        <input type="text" class="checkout-input checkout-cvc" placeholder="CVC">
                    </p>
                    <p>
                        <input type="submit" value="Purchase" class="checkout-btn">
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
