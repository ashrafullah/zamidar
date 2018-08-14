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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// frontend routes

Route::get('/frontend/index', 'FrontendController@frontend')->name('frontend_index');
Route::get('/frontend/product_page', 'FrontendController@product_page')->name('frontend_product_page');
Route::get('/frontend/products', 'FrontendController@products')->name('frontend_products');


