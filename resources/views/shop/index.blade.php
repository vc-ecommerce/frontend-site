@extends('layouts.app')

@section('scripts_css')

@endsection

@section('breadcrumb_title')
	Shop
@endsection

@section('content')

<div class="shop-wrapper gray-bg pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <div class="shop-catigory-wrapper mb-55">
                        <h4 class="shop-catigory-title">Categories</h4>
                        <div class="shop-catigory">
                            <ul id="faq">
                                <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-1">Women <i class="ion-ios-arrow-down"></i></a>
                                    <ul id="shop-catigory-1" class="panel-collapse collapse">
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Hats</a></li>
                                        <li><a href="#">Accessories</a></li>
                                    </ul>
                                </li>
                                <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-2">Men <i class="ion-ios-arrow-down"></i></a>
                                    <ul id="shop-catigory-2" class="panel-collapse collapse">
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Hats</a></li>
                                        <li><a href="#">Accessories</a></li>
                                    </ul>
                                </li>
                                <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-3">Bags <i class="ion-ios-arrow-down"></i></a>
                                    <ul id="shop-catigory-3" class="panel-collapse collapse">
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Hats</a></li>
                                        <li><a href="#">Accessories</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#">Hats</a> </li>
                                <li> <a href="#">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-price-filter mb-60">
                        <h4 class="shop-sidebar-title">FILTER BY PRICE</h4>
                        <div class="price_filter mt-40">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>price : </label>
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button> 
                            </div>
                        </div>
                    </div>
                    <div class="shop-widget mb-55">
                        <h4 class="shop-sidebar-title">select by color</h4>
                        <ul>
                            <li>
                                <a  href="#">Blue <span>(11)</span></a>
                            </li>
                            <li>
                                <a  href="#">Dark Brown <span>(9)</span></a>
                            </li>
                            <li>
                                <a  href="#">Green <span>(15)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-widget mb-55">
                        <h4 class="shop-sidebar-title">manufacturer</h4>
                        <ul>
                            <li>
                                <a  href="#">Gucci  <span>(8)</span></a>
                            </li>
                            <li>
                                <a  href="#">Lacoste  <span>(10)</span></a>
                            </li>
                            <li>
                                <a  href="#">Adidas  <span>(15)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-widget mb-55">
                        <h4 class="shop-sidebar-title">compare product</h4>
                        <ul>
                            <li>
                                <a  href="#">Vinperl handbag <span>X</span></a>
                            </li>
                            <li>
                                <a  href="#">Vinperl handbag<span>X</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="best-seller-area">
                        <h4 class="shop-sidebar-title">Best Sellers</h4>
                        <div class="best-seller-slider owl-carousel nav-style mt-30">
                            <div class="best-seller-wrapper">
                                <div class="single-best-seller-wrapper">
                                    <div class="best-seller-img">
                                        <a href="#"><img alt="" src="assets/v1/img/product/best-seller-1.jpg"></a>
                                    </div>
                                    <div class="best-seller-content">
                                        <h4><a href="#">Casual Loose Hollowed</a></h4>
                                        <span>$15.99</span>
                                    </div>
                                </div>
                                <div class="single-best-seller-wrapper">
                                    <div class="best-seller-img">
                                        <a href="#"><img alt="" src="assets/v1/img/product/best-seller-2.jpg"></a>
                                    </div>
                                    <div class="best-seller-content">
                                        <h4><a href="#">Meaneor Womens Floral</a></h4>
                                        <span>$17.59</span>
                                    </div>
                                </div>
                                <div class="single-best-seller-wrapper">
                                    <div class="best-seller-img">
                                        <a href="#"><img alt="" src="assets/v1/img/product/best-seller-3.jpg"></a>
                                    </div>
                                    <div class="best-seller-content">
                                        <h4><a href="#">Chiffon Flower Long</a></h4>
                                        <span>$10.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="best-seller-wrapper">
                                <div class="single-best-seller-wrapper">
                                    <div class="best-seller-img">
                                        <a href="#"><img alt="" src="assets/v1/img/product/best-seller-4.jpg"></a>
                                    </div>
                                    <div class="best-seller-content">
                                        <h4><a href="#">Casual Loose Hollowed</a></h4>
                                        <span>$15.99</span>
                                    </div>
                                </div>
                                <div class="single-best-seller-wrapper">
                                    <div class="best-seller-img">
                                        <a href="#"><img alt="" src="assets/v1/img/product/best-seller-5.jpg"></a>
                                    </div>
                                    <div class="best-seller-content">
                                        <h4><a href="#">Meaneor Womens Floral</a></h4>
                                        <span>$17.59</span>
                                    </div>
                                </div>
                                <div class="single-best-seller-wrapper">
                                    <div class="best-seller-img">
                                        <a href="#"><img alt="" src="assets/v1/img/product/best-seller-6.jpg"></a>
                                    </div>
                                    <div class="best-seller-content">
                                        <h4><a href="#">Chiffon Flower Long</a></h4>
                                        <span>$10.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="grid-list-options">
                        <ul class="view-mode">
                            <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ion-grid"></i></a></li>
                            <li><a href="#product-list" data-view="product-list"><i class="ion-android-menu"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-sorting-wrapper">
                        <div class="product-shorting shorting-style">
                            <label>Sort by:</label>
                            <select>
                                <option value=""> Position</option>
                                <option value=""> Name</option>
                                <option value=""> price</option>
                            </select>
                        </div>
                        <div class="product-show shorting-style">
                            <label>Show:</label>
                            <select>
                                <option value="">12</option>
                                <option value="">24</option>
                                <option value="">36</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid-list-product-wrapper">
                    <div class="product-view product-grid">
                        <div class="row">
                            <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                <div class="product-wrapper mb-30">
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
                                    <div class="product-list-content">
                                        <h4><a href="#">Interwoven Slip-on</a></h4>
                                        <div class="product-rating">
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                        <span>$89.00</span>
                                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                                        <div class="product-list-action">
                                            <a title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                <div class="product-wrapper mb-30">
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
                                                    <span>$22.00 </span>
                                                </div>
                                            </div>
                                            <div class="product-cart">
                                                <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-content">
                                        <h4><a href="#">Chiffon Flower Long </a></h4>
                                        <div class="product-rating">
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                        <span>$89.00</span>
                                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                                        <div class="product-list-action">
                                            <a title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                <div class="product-wrapper mb-30">
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
                                        <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
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
                                    <div class="product-list-content">
                                        <h4><a href="#">Sheer Mesh Patchwork</a></h4>
                                        <div class="product-rating">
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                        <span>$89.00</span>
                                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                                        <div class="product-list-action">
                                            <a title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                <div class="product-wrapper mb-30">
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
                                    <div class="product-list-content">
                                        <h4><a href="#">Interwoven Slip-on</a></h4>
                                        <div class="product-rating">
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                        <span>$89.00</span>
                                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                                        <div class="product-list-action">
                                            <a title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                <div class="product-wrapper mb-30">
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
                                        <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
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
                                    <div class="product-list-content">
                                        <h4><a href="#">Sheer Mesh Patchwork</a></h4>
                                        <div class="product-rating">
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                        <span>$89.00</span>
                                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                                        <div class="product-list-action">
                                            <a title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                <div class="product-wrapper mb-30">
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
                                    <div class="product-list-content">
                                        <h4><a href="#">Interwoven Slip-on</a></h4>
                                        <div class="product-rating">
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                        <span>$89.00</span>
                                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                                        <div class="product-list-action">
                                            <a title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                <div class="product-wrapper mb-30">
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
                                                    <span>$22.00 </span>
                                                </div>
                                            </div>
                                            <div class="product-cart">
                                                <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-content">
                                        <h4><a href="#">Chiffon Flower Long </a></h4>
                                        <div class="product-rating">
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                        <span>$89.00</span>
                                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                                        <div class="product-list-action">
                                            <a title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                <div class="product-wrapper mb-30">
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
                                        <h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
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
                                    <div class="product-list-content">
                                        <h4><a href="#">Absolute Workout Jacket</a></h4>
                                        <div class="product-rating">
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                        <span>$89.00</span>
                                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                                        <div class="product-list-action">
                                            <a title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                <div class="product-wrapper mb-30">
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
                                    <div class="product-list-content">
                                        <h4><a href="#">Interwoven Slip-on</a></h4>
                                        <div class="product-rating">
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                        <span>$89.00</span>
                                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>
                                        <div class="product-list-action">
                                            <a title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-style f-right mt-20">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a class="active" href="#">2</a>
                            </li>
                            <li>
                                <a href="#">...</a>
                            </li>
                            <li>
                                <a href="#">10</a>
                            </li>
                            <li>
                                <a href="#">
                                    >>
                                </a>
                            </li>
                        </ul>
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