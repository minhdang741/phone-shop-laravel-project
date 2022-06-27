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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Load trang home khi truy cập url 'localhost'
Route::get('/', function() {
    return view('index');
});

// Load trang shop-grid 
Route::get('/shopgrid', function() {
    return view('shop-grid');
});

// Load trang shop-details 
Route::get('/shopdetails', function() {
    return view('shop-details');
});

// Load trang shoping-cart
Route::get('/shopingcart', function() {
    return view('shoping-cart');
});

// Load trang checkout
Route::get('/checkout', function() {
    return view('checkout');
});

// Load trang blog-details
Route::get('/blogdetails', function() {
    return view('blog-details');
});

// Load trang blog
Route::get('/blog', function() {
    return view('blog');
});

// Load trang contact
Route::get('/contact', function() {
    return view('contact');
});

// Load trang login
Route::get('/login', function() {
    return view('login');
});

// Load trang signup
Route::get('/signup', function() {
    return view('signup');
});