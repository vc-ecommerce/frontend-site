<?php

$this->name('home')->get('/', function () {
    return view('home');
});

$this->name('cart.')->group(function () {
    $this->get('/carrinho', 'CartController@index')->name('index');
});

$this->name('contact.')->group(function () {
    $this->get('/contato', 'ContactController@index')->name('index');
});

$this->name('checkout.')->group(function () {
    $this->get('/checkout', 'CheckoutController@index')->name('index');
});

$this->name('about.')->group(function () {
    $this->get('/quem-somos', 'AboutController@index')->name('index');
});

$this->name('login.')->group(function () {
    $this->get('/login', 'LoginController@index')->name('index');
});

$this->name('product.')->group(function () {
    $this->get('/p/{slug}', 'ProductDetailsController@show')->name('show');
});

$this->name('shop.')->group(function () {
    $this->get('/shop', 'ShopController@index')->name('index');
});

$this->name('wishlist.')->group(function () {
    $this->get('/lista-de-desejos', 'WishlistController@index')->name('index');
});

$this->name('pages.')->group(function () {
    $this->get('/pg', 'PagesController@show')->name('show');
});

$this->name('landing.')->group(function () {
    $this->get('/public', 'LandingPageController@show')->name('show');
});