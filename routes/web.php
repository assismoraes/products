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

Route::group(['prefix' => '/'], function() {
    Route::get('/', 'ProductController@home')->name('home');
    Route::post('/', 'ProductController@save')->name('save');
    Route::get('/products', 'ProductController@products')->name('products');
    Route::get('/products/{id}', 'ProductController@product')->name('product');
});