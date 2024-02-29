 @extends('layouts.support')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/number.css')}}">
@endsection


@section('main-content')
<div class="container cart-container">
    <div class="product-container">
        <div class="container">
            <div class="shopping-cart-container gen-text">
                <h2 class="sidebar-title">Shopping Cart</h2>
                <table>
                    <thead>
                    <th></th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    </thead>
                    <tr>
                        <td>X</td>
                        <td><img src="{{asset('images/products/1.jpg')}}" alt="product name" class="cart-image"></td>
                        <td>Baby Shoes</td>
                        <td>$45.90</td>
                        <td class="product-quantity-container">@include('partials.number')</td>
                        <td>$45.90</td>
                    </tr>
                </table>
            </div>
            <div class="sidebar">
                <div class="sidebar-category">
                    <div class="sidebar-top">
                        <h2 class="sidebar-title">Cart items</h2>
                    </div>
                    <div class="container menu-title">
                        <table>
                            <tr>
                                <td>Subtotal</td>
                                <td>$423.90</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>
                                    @include('partials.checkbox')
                                    <i class="showcase-desc">Shipping will be calculated during checkout</i>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="showcase-desc"></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
@section('extra-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/number.js')}}"></script>
@endsection
