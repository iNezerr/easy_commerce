@extends('layouts.support')

@section('main-content')
    <!--suppress ALL -->
    <div class="product-container">

        <div class="container">
            <div class="product-box custom-product-box">

                <div class="product-featured">

                    <div class="showcase-wrapper">

                        <div class="showcase-container">

                            <div class="showcase">

                                <div class="custom-banner showcase-banner has-scrollbar">
                                    <img src="{{asset('images/products/shampoo.jpg')}}"
                                         alt="shampoo, conditioner & facewash packs" class="showcase-img">
                                    <img src="{{asset('images/products/shampoo.jpg')}}"
                                         alt="shampoo, conditioner & facewash packs" class="showcase-img">
                                    <img src="{{asset('images/products/shampoo.jpg')}}"
                                         alt="shampoo, conditioner & facewash packs" class="showcase-img">
                                </div>

                                <div class="showcase-content">
                                    <a href="#">
                                        <h2 class="showcase-title">shampoo, conditioner & facewash packs</h2>
                                    </a>
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>



                                    <p class="showcase-desc">
                                        Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                        dolor dolor sit amet consectetur Lorem ipsum dolor
                                    </p>

                                    <div class="price-box">
                                        <p class="price">$150.00</p>

                                        <del>$200.00</del>
                                    </div>

                                    <button class="add-cart-btn">add to cart</button>

                                    <div class="showcase-status">
                                        <div class="wrapper">
                                            <p>
                                                already sold: <b>20</b>
                                            </p>

                                            <p>
                                                available: <b>40</b>
                                            </p>
                                        </div>

                                        <div class="showcase-status-bar"></div>
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
