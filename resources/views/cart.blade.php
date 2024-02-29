 @extends('layouts.support')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection

@section('main-content')
    <div class="product-container">
        <div class="container">
            <div class="product-featured">
                <div class="showcase-wrapper">
                    <div class="showcase-container">

                        <div class="shopping-cart">
                            <!-- Title -->
                            <div class="title">
                                Shopping Bag
                            </div>

                            <!-- Product #1 -->
                            <div class="item">
                                <div class="buttons">
                                    <span class="delete-btn"></span>
                                    <span class="like-btn"></span>
                                </div>

                                <div class="image">
                                    <img src="item-1.png" alt="" />
                                </div>

                                <div class="description">
                                    <span>Common Projects</span>
                                    <span>Bball High</span>
                                    <span>White</span>
                                </div>

                                <div class="quantity">
                                    <button class="plus-btn" type="button" name="button">
                                        <img src="plus.svg" alt="" />
                                    </button>
                                    <input type="text" name="name" value="1">
                                    <button class="minus-btn" type="button" name="button">
                                        <img src="minus.svg" alt="" />
                                    </button>
                                </div>

                                <div class="total-price">$549</div>
                            </div>

                            <!-- Product #2 -->
                            <div class="item">
                                <div class="buttons">
                                    <span class="delete-btn"></span>
                                    <span class="like-btn"></span>
                                </div>

                                <div class="image">
                                    <img src="item-2.png" alt=""/>
                                </div>

                                <div class="description">
                                    <span>Maison Margiela</span>
                                    <span>Future Sneakers</span>
                                    <span>White</span>
                                </div>

                                <div class="quantity">
                                    <button class="plus-btn" type="button" name="button">
                                        <img src="plus.svg" alt="" />
                                    </button>
                                    <input type="text" name="name" value="1">
                                    <button class="minus-btn" type="button" name="button">
                                        <img src="minus.svg" alt="" />
                                    </button>
                                </div>

                                <div class="total-price">$870</div>
                            </div>

                            <!-- Product #3 -->
                            <div class="item">
                                <div class="buttons">
                                    <span class="delete-btn"></span>
                                    <span class="like-btn"></span>
                                </div>

                                <div class="image">
                                    <img src="item-3.png" alt="" />
                                </div>

                                <div class="description">
                                    <span>Our Legacy</span>
                                    <span>Brushed Scarf</span>
                                    <span>Brown</span>
                                </div>

                                <div class="quantity">
                                    <button class="plus-btn" type="button" name="button">
                                        <img src="plus.svg" alt="" />
                                    </button>
                                    <input type="text" name="name" value="1">
                                    <button class="minus-btn" type="button" name="button">
                                        <img src="minus.svg" alt="" />
                                    </button>
                                </div>

                                <div class="total-price">$349</div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!--- CATEGORY -->
            <div class="sidebar  has-scrollbar" data-mobile-menu>

                @include('partials.side-category')

                <div class="product-showcase">

                    <h3 class="showcase-heading">best sellers</h3>

                    <div class="showcase-wrapper">

                        <div class="showcase-container">

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="{{asset('images/products/1.jpg')}}" alt="baby fabric shoes" width="75"
                                         height="75"
                                         class="showcase-img">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">baby fabric shoes</h4>
                                    </a>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>$5.00</del>
                                        <p class="price">$4.00</p>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="{{asset('images/products/2.jpg')}}" alt="men's hoodies t-shirt"
                                         class="showcase-img"
                                         width="75" height="75">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">men's hoodies t-shirt</h4>
                                    </a>
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-half-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>$17.00</del>
                                        <p class="price">$7.00</p>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="{{asset('images/products/3.jpg')}}" alt="girls t-shirt"
                                         class="showcase-img" width="75"
                                         height="75">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">girls t-shirt</h4>
                                    </a>
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-half-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>$5.00</del>
                                        <p class="price">$3.00</p>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="{{asset('images/products/4.jpg')}}" alt="woolen hat for men"
                                         class="showcase-img" width="75"
                                         height="75">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">woolen hat for men</h4>
                                    </a>
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>$15.00</del>
                                        <p class="price">$12.00</p>
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
