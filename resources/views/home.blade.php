@extends('layouts.support')

@section('main-content')
    <!--suppress ALL -->

    <!--
      - BANNER
    -->

    @include('partials.banner')


    <!--
      - CATEGORY
    -->

    @include('partials.top-category')


    <!--
      - PRODUCT
    -->

    <div class="product-container">

        <div class="container">


            <!--
              - SIDEBAR
            -->

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


            <div class="product-box">

                <!--
                  - PRODUCT MINIMAL
                -->

                @include('partials.products-minimal')


                <!--
                      - PRODUCT FEATURED
                    -->

                @include('partials.products-featured')


                <!--
                      - PRODUCT GRID
                    -->

                @include('partials.products-main')

            </div>

        </div>

    </div>


    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    @include('partials.testimonials')


    <!--
          - BLOG
        -->

    @include('partials.blog')

@endsection
