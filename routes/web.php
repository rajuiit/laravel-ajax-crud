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
    return view('index');
});

Route::get('order/','OrderController@index');
Route::get('products/','ProductController@index');
Route::get('products/create','ProductController@create');
Route::get('products/{product}/edit', 'ProductController@edit');
Route::post('products/','ProductController@store');
Route::post('order/','OrderController@store');
Route::patch('products/{product}','ProductController@update');
Route::delete('products/{product}', 'ProductController@destroy');
