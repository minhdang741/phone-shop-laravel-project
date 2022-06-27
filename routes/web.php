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
    // Get request's path
    if($getPath = Request()->path())
    {
        return view('index', ['StrPath' => $getPath]);
    }
});

// Load trang shop-grid 
Route::get('/shopgrid', function() {
    // Get request's path
    if($getPath = Request()->path())
    {
        return view('shop-grid', ['StrPath' => $getPath]);
    }
});

// Load trang shop-details 
Route::get('/shopdetails', function() {
    return view('shop-details');
});

// Load trang shoping-cart
Route::get('/shopingcart', function() {
    // Get request's path
    if($getPath = Request()->path())
    {
        return view('shoping-cart', ['StrPath' => $getPath]);
    }
});

// Load trang checkout
Route::get('/checkout', function() {
    // Get request's path
    if($getPath = Request()->path())
    {
        return view('checkout', ['StrPath' => $getPath]);
    }
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
    // Get request's path
    if($getPath = Request()->path())
    {
        return view('contact', ['StrPath' => $getPath]);
    }
});
