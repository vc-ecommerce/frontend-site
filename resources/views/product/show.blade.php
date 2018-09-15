@extends('layouts.app')

@section('scripts_css')
<link rel="stylesheet" href="assets/css/easyzoom.css">
@endsection

@section('breadcrumb_title')
Nome Produto
@endsection

@section('content')

<!-- <div class="breadcrumb-area ptb-75 hm-4-padding gray-bg">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>women</h2>
            <ul>
                <li><a href="#">home</a> <i class="ion-ios-arrow-right"></i></li>
                <li><a href="#">Women</a> <i class="ion-ios-arrow-right"></i></li>
                <li class="active">Scanpan Classic Covered </li>
            </ul>
        </div>
    </div>
</div> -->
<div class="product-details-area gray-bg pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-tab">
                    <div class="product-details-large tab-content">
                        <div class="tab-pane active" id="pro-details1">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/v1/img/product-details/product-details-bl1.jpg">
                                    <img src="assets/v1/img/product-details/product-details-l1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="pro-details2">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/v1/img/product-details/product-details-bl2.jpg">
                                    <img src="assets/v1/img/product-details/product-details-l2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="pro-details3">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/v1/img/product-details/product-details-bl3.jpg">
                                    <img src="assets/v1/img/product-details/product-details-l3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="pro-details4">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/v1/img/product-details/product-details-bl4.jpg">
                                    <img src="assets/v1/img/product-details/product-details-l4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details-small nav mt-12" role=tablist>
                        <a class="active" href="#pro-details1" data-toggle="tab">
                            <img src="assets/v1/img/product-details/product-details-s1.jpg" alt="">
                        </a>
                        <a href="#pro-details2" data-toggle="tab">
                            <img src="assets/v1/img/product-details/product-details-s2.jpg" alt="">
                        </a>
                        <a href="#pro-details3" data-toggle="tab">
                            <img src="assets/v1/img/product-details/product-details-s3.jpg" alt="">
                        </a>
                        <a href="#pro-details4" data-toggle="tab">
                            <img src="assets/v1/img/product-details/product-details-s4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h4>Scanpan Classic Covered </h4>
                    <div class="product-rating">
                        <i class="ion-star theme-color"></i>
                        <i class="ion-star theme-color"></i>
                        <i class="ion-star theme-color"></i>
                        <i class="ion-star"></i>
                        <i class="ion-star"></i>
                    </div>
                    <span>$15.00</span>
                    <div class="in-stock">
                        <span><i class="ion-android-checkbox-outline"></i> In Stock</span>
                    </div>
                    <div class="sku">
                        <span>SKU#: MS04</span>
                    </div>
                    <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                    <div class="product-details-style shorting-style">
                        <label>color:</label>
                        <select>
                            <option value=""> Choose an option</option>
                            <option value=""> orange</option>
                            <option value=""> pink</option>
                            <option value=""> yellow</option>
                        </select>
                    </div>
                    <div class="cart-plus-minus-2-wrapper">
                        <label>Qty:</label>
                        <div class="cart-plus-minus-2">
                            <input type="text" value="0" name="qtybutton" class="cart-plus-minus-box">
                        </div>
                    </div>
                    <div class="product-list-action">
                        <a class="icon-mrg" title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                        <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                        <a title="Compare" href="#"><i class="ion-stats-bars"></i></a>
                    </div>
                    <div class="social-share">
                        <ul>
                            <li><span>Share:</span></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area gray-bg pb-75">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav text-center">
                <a class="active" data-toggle="tab" href="#des-details1">DESCRIPTION</a>
                <a data-toggle="tab" href="#des-details2">MORE INFORMATION</a>
                <a data-toggle="tab" href="#des-details3">REVIEWS (2)</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details1" class="tab-pane active">
                    <div class="product-description-wrapper">
                        <p>This stewpot is part of the Scanpan Classic cookware range, which boasts GreenTek non-stick coating which is 100% PFOA free, meaning it's safer for your family and the environment. The heavy-duty, pressure-cast aluminum body has an extra-thick base for quick, even heating and it is compatible with all cooking surfaces (excluding induction). The extraordinarily hard exterior surface is a combination of ceramic and titanium nonstick cooking surface which is impossible to scrape away, even with metal utensils. Patented spring-lock handle stays cool during normal stove top use and the stewpot is also oven safe from up to 260°C. It's also dishwasher safe for easy cleanup. </p>
                        <p>Scanpan is designed and manufactured in Denmark and offers a lifetime warranty.</p>
                        <ul>
                            <li>Key Features:</li>
                            <li>Heavy duty, pressure cast aluminium with extra thick base for quick heat up</li>
                            <li>Ceramic titanium surface with PFOA-free GreenTek non-stick coating</li>
                            <li>Fat-free frying, metal utensils safe</li>
                            <li>Suitable for all stove tops, except induction</li>
                            <li>Guaranteed not to warp</li>
                            <li>Fast and even heat distribution</li>
                            <li>Ovenproof up to 260°C</li>
                            <li>Dishwasher safe - but not recommended</li>
                            <li>Designed and manufactured in Denmark</li>
                        </ul>
                    </div>
                </div>
                <div id="des-details2" class="tab-pane">
                    <div class="product-anotherinfo-wrapper">
                        <ul>
                            <li><span>name:</span> Scanpan Classic Covered</li>
                            <li><span>color:</span> orange , pink , yellow </li>
                            <li><span>size:</span> xl, l , m , sl</li>
                            <li><span>length:</span> 102cm, 110cm , 115cm </li>
                            <li><span>Brand:</span> Nike, Religion, Diesel, Monki </li>
                        </ul>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="rattings-wrapper">
                        <div class="sin-rattings">
                            <div class="star-author-all">
                                <div class="ratting-star f-left">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="ratting-author f-right">
                                    <h3>tayeb rayed</h3>
                                    <span>12:24</span>
                                    <span>9 March 2018</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                        </div>
                        <div class="sin-rattings">
                            <div class="star-author-all">
                                <div class="ratting-star f-left">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="ratting-author f-right">
                                    <h3>farhana shuvo</h3>
                                    <span>12:24</span>
                                    <span>9 March 2018</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                        </div>
                    </div>
                    <div class="ratting-form-wrapper">
                        <h3>Add your Comments :</h3>
                        <div class="ratting-form">
                            <form action="#">
                                <div class="star-box">
                                    <h2>Rating:</h2>
                                    <div class="ratting-star">
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="rating-form-style mb-20">
                                            <input placeholder="Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="rating-form-style mb-20">
                                            <input placeholder="Email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rating-form-style form-submit">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <input type="submit" value="add review">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="featured-area gray-bg pb-75">
    <div class="container">
        <div class="section-title text-center mb-25">
            <h2>Related Products</h2>
        </div>
        <div class="row">
            <div class="product-slider-active owl-carousel">
                <div class="col-lg-3">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
<div class="featured-area gray-bg pb-75">
    <div class="container">
        <div class="section-title text-center mb-25">
            <h2>up sell Products</h2>
        </div>
        <div class="row">
            <div class="product-slider-active owl-carousel">
                <div class="col-lg-3">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="ion-android-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                <img src="assets/v1/img/quick-view/l1.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                <img src="assets/v1/img/quick-view/l2.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                <img src="assets/v1/img/quick-view/l3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        <a class="active" href="#modal1" data-toggle="tab" role="tab">
                            <img src="assets/v1/img/quick-view/s1.jpg" alt="">
                        </a>
                        <a href="#modal2" data-toggle="tab" role="tab">
                            <img src="assets/v1/img/quick-view/s2.jpg" alt="">
                        </a>
                        <a href="#modal3" data-toggle="tab" role="tab">
                            <img src="assets/v1/img/quick-view/s3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>Casual Loose Hollowed</h3>
                        <div class="product-price">
                            <span class="old">$19.00 </span>
                            <span class="new">$17.00</span>
                        </div>
                        <div class="product-rating">
                            <i class="ion-star theme-color"></i>
                            <i class="ion-star theme-color"></i>
                            <i class="ion-star theme-color"></i>
                            <i class="ion-star theme-color"></i>
                            <i class="ion-star theme-color"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do amt tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>Size*</label>
                                <select class="select">
                                    <option value="">- Please Select -</option>
                                    <option value="">XS</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value=""> L</option>
                                    <option value="">XL</option>
                                    <option value="">XXL</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>Color*</label>
                                <select class="select">
                                    <option value="">- Please Select -</option>
                                    <option value="">orange</option>
                                    <option value="">pink</option>
                                    <option value="">yellow</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-style cr-btn" href="#"><span>add to cart</span></a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover cr-btn" href="#"><span><i class="ion-ios-heart-outline"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Compare -->
<div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="ion-android-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-compare-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="#">
                    <div class="table-content compare-style table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href="#">Remove <span>x</span></a>
                                        <img src="assets/v1/img/quick-view/compare-1.jpg" alt="">
                                        <p>Casual Loose Hollowed </p>
                                        <span>$75.99</span>
                                        <a class="compare-btn" href="cart.html">Add to cart</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="compare-title"><h4>Description </h4></td>
                                    <td class="compare-dec compare-common">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Sku </h4></td>
                                    <td class="product-none compare-common">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Availability  </h4></td>
                                    <td class="compare-stock compare-common">
                                        <p>In stock</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Weight   </h4></td>
                                    <td class="compare-none compare-common">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Dimensions   </h4></td>
                                    <td class="compare-stock compare-common">
                                        <p>N/A</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>brand   </h4></td>
                                    <td class="compare-brand compare-common">
                                        <p>HasTech</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>color   </h4></td>
                                    <td class="compare-color compare-common">
                                        <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>size    </h4></td>
                                    <td class="compare-size compare-common">
                                        <p>XS, S, M, L, XL, XXL </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"></td>
                                    <td class="compare-price compare-common">
                                        <p>$75.99 </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        
@endsection

@section('scripts_js')

@endsection