<?php

Route::get('/', ['as' => 'trang-chu', 'uses' => 'PageController@getIndex']);

Route::get('/san-pham', ['as' => 'san-pham', 'uses' => 'PageController@getProduct']);

Route::get('/lien-he', ['as' => 'lien-he', 'uses' => 'PageController@getContact']);

Route::get('/dang-ky', ['as' => 'dang-ky', 'uses' => 'PageController@getRegister']);

Route::get('/thong-tin-cua-toi', ['as' => 'thong-tin-cua-toi', 'uses' => 'PageController@getMyAccount']);

Route::get('/shopcart', ['as' => 'shopcart', 'uses' => 'PageController@getShopCart']);

Route::get('/san-pham-yeu-thich', ['as' => 'san-pham-yeu-thich', 'uses' => 'PageController@getWishlist']);

Route::get('/thanh-toan', ['as' => 'thanh-toan', 'uses' => 'PageController@getCheckout']);
Auth::routes();

Route::get('/checkout', ['as' => 'checkout', 'uses' => 'PageController@getCheckout']);

Route::get('/add-to-cart/{id}', ['as' => 'add-to-cart', 'uses' => 'PageController@getAddToCart']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product-single/{id}', ['as' => 'product-single',
    'uses' => 'PageController@getProductsingle',
]);
Route::get('del-cart/{id}', ['as' => 'del-cart', 'uses' => 'PageController@getDelItemCart']);
