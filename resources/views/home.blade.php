@extends('layouts.app')

@section('scripts_css')

@endsection

@section('content')

<div class="slider-area padding-width-1 ptb-20 gray-bg clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="slider-active owl-carousel">
                    <div class="single-slider pt-200 pb-210 bg-img" style="background-image:url(assets/v1/img/slider/1.jpg);">
                        <div class="slider-content slider-animated-1 pl-80">
                            <h3 class="animated">New Arrivals</h3>
                            <h2 class="animated">Women’s <span>fashion</span></h2>
                            <div class="slider-btn">
                                <a class="animated" href="product-details.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider pt-200 pb-210 bg-img" style="background-image:url(assets/v1/img/slider/2.jpg);">
                        <div class="slider-content slider-animated-2 pl-80">
                            <h3 class="animated">New Arrivals</h3>
                            <h2 class="animated">Women’s <span>fashion</span></h2>
                            <div class="slider-btn">
                                <a class="animated" href="product-details.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider pt-200 pb-210 bg-img" style="background-image:url(assets/v1/img/slider/1.jpg);">
                        <div class="slider-content slider-animated-1 pl-80">
                            <h3 class="animated">New Arrivals</h3>
                            <h2 class="animated">Women’s <span>fashion</span></h2>
                            <div class="slider-btn">
                                <a class="animated" href="product-details.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="banner-style relative res-mrg-top-md res-mrg-top-small">
                    <a href="#"><img src="assets/v1/img/banner/1.jpg" alt=""></a>
                    <div class="banner-content">
                        <h3>autumn <br>50 % <br>Off</h3>
                        <div class="banner-btn">
                            <a class="btn-style btn-hover" href="product-details.html">shop now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area padding-width-1 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-xl-3 col-md-6">
                <div class="banner-wrapper banner-hover relative mb-30">
                    <a href="shop.html"><img src="assets/v1/img/banner/2.jpg" alt=""></a>
                    <div class="banner-content-2 banner-position">
                        <h4>Jumpers & <br>Cardigans </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6">
                <div class="banner-wrapper banner-hover relative mb-30">
                    <a href="shop.html"><img src="assets/v1/img/banner/3.jpg" alt=""></a>
                    <div class="banner-content-3 banner-position-2">
                        <h3>UP TO</h3>
                        <h2>45% OFF</h2>
                        <h4>Lingerie & Nightwear</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6">
                <div class="banner-wrapper banner-hover relative mb-30">
                    <a href="shop.html"><img src="assets/v1/img/banner/4.jpg" alt=""></a>
                    <div class="banner-content-2 banner-position">
                        <h4>Handbags & <br>Purses </h4>
                        <h5>Up to 40% off</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6">
                <div class="banner-wrapper banner-hover relative mb-30">
                    <a href="shop.html"><img src="assets/v1/img/banner/5.jpg" alt=""></a>
                    <div class="banner-content-2 banner-position">
                        <h4>Coats & <br>Jackets </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pt-45 pb-80 gray-bg">
    <div class="container">
        <div class="product-tab-list text-center mb-30 nav product-menu-mrg" role="tablist">
            <a class="active" href="#home1" data-toggle="tab">
                <h4>Best Sellers </h4>
            </a>
            <a href="#home2" data-toggle="tab">
                <h4> New Products </h4>
            </a>
            <a href="#home3" data-toggle="tab">
                <h4>Sales Products</h4>
            </a>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane active" id="home1">
                <div class="row">
                    <div class="product-slider-active owl-carousel">
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-1.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$22.00 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-2.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$19.00 </span>
                                                <span class="new">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart"  href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-3.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Chiffon Flower Long </a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$70.45 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-4.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$19.99 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-13.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$19.99 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="home2">
                <div class="row">
                    <div class="product-slider-active owl-carousel">
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-5.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$22.00 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-6.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$19.00 </span>
                                                <span class="new">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-7.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Chiffon Flower Long </a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$70.45 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-8.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$19.99 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-13.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$19.99 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="home3">
                <div class="row">
                    <div class="product-slider-active owl-carousel">
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-9.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$22.00 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-10.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$19.00 </span>
                                                <span class="new">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-11.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Chiffon Flower Long </a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$70.45 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-12.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$19.99 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/v1/img/product/product-13.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                    <div class="product-price-cart-wrapper">
                                        <div class="product-rating-price-wrapper">
                                            <div class="product-rating">
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                                <i class="ion-star theme-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>$19.99 </span>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="discount-area pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-5">
                <div class="discount-wrapper text-center">
                    <h4>New Arrivals!</h4>
                    <h2>Women Collection 30% Off <br>Autumn Fashion</h2>
                    <p>We sell not only top quality products, but give our customers a 
positive online shopping experience.</p>
                    <div class="overview-btn">
                        <a class="btn-style btn-hover" href="product-details.html">Shop now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-7">
                <div class="discount-img wow fadeInRight res-mrg-top-small">
                    <a href="#"><img alt="" src="assets/v1/img/banner/banner-6.jpg"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="deals-area gray-bg ptb-75">
    <div class="container">
        <div class="section-title text-center">
            <h2>DEALS OF THE week</h2>
        </div>
        <div class="timer mb-30">
            <div data-countdown="2018/07/01"></div>
        </div>
        <div class="row">
            <div class="deals-slider-active owl-carousel">
                <div class="col-lg-6">
                    <div class="deal-product-wrappers">
                        <div class="deal-action-img-wrapper">
                            <div class="deal-product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Add To Cart" href="#">
                                    <i class="ion-bag"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                            <div class="deal-product-img">
                                <a href="product-details.html"><img alt="" src="assets/v1/img/product/product-6.jpg"></a>
                            </div>
                        </div>
                        <div class="deal-product-content">
                            <h4><a href="product-details.html">Pocket Long Sleeve</a></h4>
                            <div class="product-rating">
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                            </div>
                            <P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
                            <div class="product-price">
                                <span class="old">$55.00 </span>
                                <span class="new">$45.99</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="deal-product-wrappers">
                        <div class="deal-action-img-wrapper">
                            <div class="deal-product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Add To Cart" href="#">
                                    <i class="ion-bag"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                            <div class="deal-product-img">
                                <a href="product-details.html"><img alt="" src="assets/v1/img/product/product-10.jpg"></a>
                            </div>
                        </div>
                        <div class="deal-product-content">
                            <h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
                            <div class="product-rating">
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                            </div>
                            <P>Ready made for the great outdoors, Patagonia create high-quality clothing for the all-round active. </P>
                            <div class="product-price">
                                <span class="old">$38.75 </span>
                                <span class="new">$27.75</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="deal-product-wrappers">
                        <div class="deal-action-img-wrapper">
                            <div class="deal-product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Add To Cart" href="#">
                                    <i class="ion-bag"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                            <div class="deal-product-img">
                                <a href="product-details.html"><img alt="" src="assets/v1/img/product/product-11.jpg"></a>
                            </div>
                        </div>
                        <div class="deal-product-content">
                            <h4><a href="product-details.html">Pocket Long Sleeve</a></h4>
                            <div class="product-rating">
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                            </div>
                            <P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
                            <div class="product-price">
                                <span class="old">$55.00 </span>
                                <span class="new">$45.99</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="deal-product-wrappers">
                        <div class="deal-action-img-wrapper">
                            <div class="deal-product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Add To Cart" href="#">
                                    <i class="ion-bag"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                            <div class="deal-product-img">
                                <a href="product-details.html"><img alt="" src="assets/v1/img/product/product-12.jpg"></a>
                            </div>
                        </div>
                        <div class="deal-product-content">
                            <h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
                            <div class="product-rating">
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                            </div>
                            <P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
                            <div class="product-price">
                                <span class="old">$38.75 </span>
                                <span class="new">$27.75</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="deal-product-wrappers">
                        <div class="deal-action-img-wrapper">
                            <div class="deal-product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Add To Cart" href="#">
                                    <i class="ion-bag"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                            <div class="deal-product-img">
                                <a href="product-details.html"><img alt="" src="assets/v1/img/product/product-13.jpg"></a>
                            </div>
                        </div>
                        <div class="deal-product-content">
                            <h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
                            <div class="product-rating">
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                                <i class="ion-star"></i>
                            </div>
                            <P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
                            <div class="product-price">
                                <span class="old">$38.75 </span>
                                <span class="new">$27.75</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-area pt-65 pb-35 black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="services-wrapper text-center mb-40">
                    <i class="ion-android-sync"></i>
                    <h4>Return & Exchange</h4>
                    <p>Committed to return the money in 30 days</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="services-wrapper text-center mb-40">
                    <i class="ion-card"></i>
                    <h4>RECIEVE GIFT CARD</h4>
                    <p>Receive gift all over order $50</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="services-wrapper text-center mb-40">
                    <i class="ion-help-buoy"></i>
                    <h4>ONLINE SUPPORT 24/7</h4>
                    <p>24/7 online support is always ready</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="new-collection-testimonials-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="new-collection-wrapper">
                    <a href="#"><img src="assets/v1/img/banner/banner-7.jpg" alt=""></a>
                    <div class="new-collection-content">
                        <h2>Accent Your <br>Style with <br>New Collection</h2>
                        <div class="new-collection-btn">
                            <a class="btn-style" href="#">View collection</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="testimonials-area text-center black-bg-2 res-mrg-top-md res-mrg-top-small">
                    <div class="section-title text-center">
                        <h2>testimonials</h2>
                    </div>
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial">
                            <p>“ Perfect Themes and the best of all that you have many options to choose! Best Support team ever!Very fast responding and experts on their fields! Thank you very much! ”</p>
                            <h4>Stefano  Colombarolli - CEO</h4>
                        </div>
                        <div class="single-testimonial">
                            <p>“ Lorem ipsum dolor sit amet, consectetl adipisicing elit, sed do eiusmod tempor incididul ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud”</p>
                            <h4>Teresa McDonald - CEO</h4>
                        </div>
                        <div class="single-testimonial">
                            <p>“ Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et voluptas.”</p>
                            <h4>Douglas Allen - CEO</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="featured-area gray-bg pb-80 pt-75">
    <div class="container">
        <div class="section-title text-center mb-25">
            <h2>FEATURED FASHION DRESS</h2>
        </div>
        <div class="row">
            <div class="product-slider-active owl-carousel">
                <div class="col-lg-3">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="assets/v1/img/product/product-1.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                            <div class="product-price-cart-wrapper">
                                <div class="product-rating-price-wrapper">
                                    <div class="product-rating">
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$22.00 </span>
                                    </div>
                                </div>
                                <div class="product-cart">
                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="assets/v1/img/product/product-2.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                            <div class="product-price-cart-wrapper">
                                <div class="product-rating-price-wrapper">
                                    <div class="product-rating">
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                    </div>
                                    <div class="product-price">
                                        <span class="old">$19.00 </span>
                                        <span class="new">$17.00</span>
                                    </div>
                                </div>
                                <div class="product-cart">
                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="assets/v1/img/product/product-3.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Chiffon Flower Long </a></h4>
                            <div class="product-price-cart-wrapper">
                                <div class="product-rating-price-wrapper">
                                    <div class="product-rating">
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$70.45 </span>
                                    </div>
                                </div>
                                <div class="product-cart">
                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="assets/v1/img/product/product-4.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                            <div class="product-price-cart-wrapper">
                                <div class="product-rating-price-wrapper">
                                    <div class="product-rating">
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$19.99 </span>
                                    </div>
                                </div>
                                <div class="product-cart">
                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="assets/v1/img/product/product-13.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                            <div class="product-price-cart-wrapper">
                                <div class="product-rating-price-wrapper">
                                    <div class="product-rating">
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$19.99 </span>
                                    </div>
                                </div>
                                <div class="product-cart">
                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-area pt-75 pb-130">
    <div class="container">
        <div class="section-title text-center mb-75">
            <h2>latest blogs</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="blog-wrapper">
                    <div class="blog-img">
                        <a href="blog-details.html"><img alt="" src="assets/v1/img/blog/blog-1.jpg"></a>
                    </div>
                    <div class="blog-content">
                        <span>27 - apr - 2018</span>
                        <h3><a href="blog-details.html">14 Emerging Fashion Influencers Who Are Going to Own 2018</a></h3>
                        <div class="blog-btn">
                            <a href="blog-details.html">View more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="blog-wrapper blog-mrg">
                    <div class="blog-img">
                        <a href="blog-details.html"><img alt="" src="assets/v1/img/blog/blog-2.jpg"></a>
                    </div>
                    <div class="blog-content">
                        <span>21 - apr - 2018</span>
                        <h3><a href="blog-details.html">10 Overdone Fashion Trends That Aren’t Invited to 2018</a></h3>
                        <div class="blog-btn">
                            <a href="blog-details.html">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- modal -->
@include('layouts.default.modal')

<!-- Compare -->
@include('layouts.default.modal_compare')

@section('scripts_js')

@endsection
