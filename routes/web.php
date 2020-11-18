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

Route::get('/', function () {
    return view('home');
});


Route::get('order', function () {
    return view('orderForm');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('services', function () {
    return view('services');
});


Route::post('sendReview', 'ReviewController@storeReview');

Route::post('sendForm', 'InfoController@storeForm');

Route::post('newSale', 'SaleController@storeSale');

Route::post('newSaleWindow', 'WindowController@storeSale');
