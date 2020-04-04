<?php

use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/home');

Auth::routes();

//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

//Products
Route::get('/products/search', 'ProductController@search')->name('products.search');
Route::resource('products', 'ProductController');

Route::group(['middleware' => 'auth'], function () {
    //Shop
    Route::resource('shops','ShopController');

    //Orders 
    Route::resource('orders', 'OrderController');

    //Shopping cart
    Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy');
    Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');
    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::get('/cart/apply-coupon', 'CartController@applyCoupon')->name('cart.coupon');

    //PayPal
    Route::get('paypal/checkout/{order}', 'PayPalController@getExpressCheckout')->name('paypal.checkout');
    Route::get('paypal/checkout-success/{order}', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
    Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');
});

//Voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});