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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mens_wear', function () {
    return view('mens_wear');
});
Route::get('/womens_wear', function () {
    return view('womens_wear');
});
Route::get('/other_products', function () {
    return view('other_products');
});
Route::get('/products_category', function () {
    return view('products_category');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/basket', function () {
    return view('basket');
});
Route::get('/checkout1', function () {
    return view('checkout1');
});
Route::get('/checkout2', function () {
    return view('checkout2');
});

Route::get('/checkout3', function () {
    return view('checkout3');
});

Route::get('/checkout4', function () {
    return view('checkout4');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/post', function () {
    return view('post');
});
Route::get('/customer-orders', function () {
    return view('customer-orders');
});
Route::get('/customer-order', function () {
    return view('customer-order');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/childrens_wear', function () {
    return view('childrens_wear');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
