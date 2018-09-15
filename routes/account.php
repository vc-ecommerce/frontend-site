<?php
$this->get('/', 'Account\AccountController@index')->name('index');
$this->get('/lista-de-desejos', 'Account\WishlistController@index')->name('wishlist');
