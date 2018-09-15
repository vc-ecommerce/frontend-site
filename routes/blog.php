<?php
$this->get('/', 'BlogController@index')->name('index');
$this->get('/{url}', 'BlogController@show')->name('show');
