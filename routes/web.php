<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

/* Route::get('/', function () {
return view('welcome');
}); */

Route::get('/', ['as' => 'index', 'uses' => 'PageController@getIndex']);

Route::get('/product', ['as' => 'product', 'uses' => 'PageController@getProduct']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'PageController@getContact']);

Route::get('/registere', ['as' => 'registere', 'uses' => 'PageController@getRegister']);

Route::get('/myaccount', ['as' => 'myaccount', 'uses' => 'PageController@getMyAccount']);

Route::get('/shopcart', ['as' => 'shopcart', 'uses' => 'PageController@getShopCart']);

Route::get('/wishlist', ['as' => 'wishlist', 'uses' => 'PageController@getWishlist']);

Route::get('/checkout', ['as' => 'checkout', 'uses' => 'PageController@getCheckout']);

Route::get('/add-to-cart/{id}', ['as' => 'add-to-cart', 'uses' => 'PageController@getAddToCart']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product-single/{id}', ['as' => 'product-single',
    'uses' => 'PageController@getProductsingle',
]);
Route::get('/update-to-cart/{id}/{qty}', ['as' => 'update-to-cart', 'uses' => 'PageController@getUpdateToCart']);
