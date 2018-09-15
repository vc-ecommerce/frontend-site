@extends('layouts.app')

@section('scripts_css')

@endsection

@section('breadcrumb_title')
Blog - Detalhes
@endsection

@section('content')
<!-- shopping-cart-area start -->
<div class="breadcrumb-area ptb-75 gray-bg">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>blog details</h2>
            <ul>
                <li><a href="#">home</a> <i class="ion-ios-arrow-right"></i></li>
                <li class="active">blog details</li>
            </ul>
        </div>
    </div>
</div>
 <!-- shopping-cart-area start -->
<div class="blog-area pb-80 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="blog-sidebar-area">
                    <div class="header-search mb-50">
                        <form class="header-search-form">
                            <input type="text" placeholder="Find a product">
                            <button type="submit">
                                <i class="ion-ios-search-strong"></i>
                            </button>
                        </form>
                    </div>
                    <div class="shop-widget mb-55">
                        <h4 class="shop-sidebar-title">Categories</h4>
                        <ul>
                            <li>
                                <a  href="#">Women <span>(11)</span></a>
                            </li>
                            <li>
                                <a  href="#">Men <span>(9)</span></a>
                            </li>
                            <li>
                                <a  href="#">Bags <span>(15)</span></a>
                            </li>
                            <li>
                                <a  href="#">Hats <span>(10)</span></a>
                            </li>
                            <li>
                                <a  href="#">Accessories <span>(07)</span></a>
                            </li>
                        </ul>
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
                    <div class="best-seller-area mt-50">
                        <h4 class="shop-sidebar-title">popular Post</h4>
                        <div class="best-seller-slider owl-carousel nav-style mt-30">
                            <div class="best-seller-wrapper">
                                <div class="single-best-seller-wrapper">
                                    <div class="best-seller-img">
                                        <a href="#"><img alt="" src="assets/v1/img/product/best-seller-1.jpg"></a>
                                    </div>
                                    <div class="best-seller-content">
                                        <h4><a href="#">Casual Loose Hollowed</a></h4>
                                        <span> March 14, 2018</span>
                                    </div>
                                </div>
                                <div class="single-best-seller-wrapper">
                                    <div class="best-seller-img">
                                        <a href="#"><img alt="" src="assets/v1/img/product/best-seller-2.jpg"></a>
                                    </div>
                                    <div class="best-seller-content">
                                        <h4><a href="#">Meaneor Womens Floral</a></h4>
                                        <span> March 14, 2018</span>
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
                                        <span> March 14, 2018</span>
                                    </div>
                                </div>
                                <div class="single-best-seller-wrapper">
                                    <div class="best-seller-img">
                                        <a href="#"><img alt="" src="assets/v1/img/product/best-seller-5.jpg"></a>
                                    </div>
                                    <div class="best-seller-content">
                                        <h4><a href="#">Meaneor Womens Floral</a></h4>
                                        <span> March 14, 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-blog mt-20 mb-50">
                        <h4 class="shop-sidebar-title">Latest Blogs</h4>
                        <div class="sidebar-blog-slider owl-carousel nav-style mt-30">
                            <div class="single-sidebar-blog-wrapper">
                                <div class="sidebar-blog-img">
                                    <a href="#"><img src="assets/v1/img/blog/sidebar-blog.jpg" alt=""></a>
                                </div>
                                <div class="sidebar-blog-content">
                                    <h3><a href="#">26 Fashion Blogs You Need to Follow in 2018</a></h3>
                                    <p>With top-tier fashion bloggers raking in multimillion-dollar campaigns, it’s no wonder every self-proclaimed...</p>
                                    <div class="sidebar-blog-date">
                                        <span> <i class="ion-ios-calendar-outline"></i> 09- Apr - 2017</span>
                                    </div>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="single-sidebar-blog-wrapper">
                                <div class="sidebar-blog-img">
                                    <a href="#"><img src="assets/v1/img/blog/sidebar-blog-2.jpg" alt=""></a>
                                </div>
                                <div class="sidebar-blog-content">
                                    <h3><a href="#">26 Fashion Blogs You Need to Follow in 2018</a></h3>
                                    <p>With top-tier fashion bloggers raking in multimillion-dollar campaigns, it’s no wonder every self-proclaimed...</p>
                                    <div class="sidebar-blog-date">
                                        <span> <i class="ion-ios-calendar-outline"></i> 09- Apr - 2017</span>
                                    </div>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-widget mb-40">
                        <h4 class="shop-sidebar-title">INSTAGRAM</h4>
                        <div class="blog-instagram mt-20">
                            <ul>
                                <li><a href="#"><img src="assets/v1/img/instagram/instagram1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/v1/img/instagram/instagram2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/v1/img/instagram/instagram3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/v1/img/instagram/instagram4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/v1/img/instagram/instagram5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/v1/img/instagram/instagram6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-widget mb-55">
                        <h4 class="shop-sidebar-title">Tags</h4>
                        <ul>
                            <li>
                                <a  href="#">Business </a>
                            </li>
                            <li>
                                <a  href="#">Design </a>
                            </li>
                            <li>
                                <a  href="#">Lifestyle </a>
                            </li>
                            <li>
                                <a  href="#">Furniture  </a>
                            </li>
                            <li>
                                <a  href="#">Equipment   </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="blog-details-wrapper">
                    <div class="blog-wrapper-2 sidebar-blog">
                        <div class="video-wrapper">
                            <a href="blog-details.html"><img alt="" src="assets/v1/img/blog/blog-4.jpg"></a>
                            <div class="video-icon">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=6Tc7LBx7XzE"><i class="ion-play"></i></a>
                            </div>
                        </div>
                        <div class="blog-content-2">
                            <div class="like-comment">
                                <ul>
                                    <li> By: tayeb rayed</li>
                                    <li> <a href="#">likes 4</a></li>
                                    <li> <a href="#">comments 5</a></li>
                                </ul>
                            </div>
                            <h3>14 Emerging Fashion Influencers Who Are Going to Own 2018</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprhendit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qei officia deser mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>
                             <blockquote><p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud.</p></blockquote> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                    <div class="dec-img-wrapper">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="dec-img mb-50">
                                    <img alt="" src="assets/v1/img/blog/blog-details.jpg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="dec-img mb-50">
                                    <img alt="" src="assets/v1/img/blog/blog-details-2.jpg">
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="tag-share">
                        <div class="like-comment">
                            <ul>
                                <li><a href="#">lifestyle</a></li>
                                <li><a href="#">interior</a></li>
                                <li><a href="#">outdoor</a></li>
                            </ul>
                        </div>
                        <div class="blog-share">
                            <span>share :</span>
                            <div class="share-social">
                                <ul>
                                    <li>
                                        <a class="facebook" href="#">
                                            <i class="ion-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#">
                                        <i class="ion-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="#">
                                            <i class="ion-social-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="next-previous-post">
                        <a href="#"> <i class="ion-ios-arrow-left"></i> prev post</a>
                        <a href="#">next post <i class="ion-ios-arrow-right"></i></a>
                    </div>
                    <div class="blog-comment-wrapper mt-55">
                        <h4 class="blog-dec-title">comments : 02</h4>
                        <div class="single-comment-wrapper mt-35">
                            <div class="blog-comment-img">
                                <img src="assets/v1/img/blog/comment-1.jpg" alt="">
                            </div>
                            <div class="blog-comment-content">
                                <h4>Anthony Stephens</h4>
                                <span>October 14, 2018 </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                <div class="blog-details-btn">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-comment-wrapper mt-50 ml-125">
                            <div class="blog-comment-img">
                                <img src="assets/v1/img/blog/comment-2.jpg" alt="">
                            </div>
                            <div class="blog-comment-content">
                                <h4>DX Joxova</h4>
                                <span>October 14, 2018 </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                <div class="blog-details-btn">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-reply-wrapper mt-50">
                        <h4 class="blog-dec-title">post a comment</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="leave-form">
                                        <input type="text" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="leave-form">
                                        <input type="email" placeholder="Email Address ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-leave">
                                        <textarea placeholder="Message"></textarea>
                                        <input type="submit" value="SEND MESSAGE">
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


@endsection

@section('scripts_js')

@endsection