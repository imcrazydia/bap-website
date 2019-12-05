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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/hallo/{name}', 'HomeController@showName')->name('hallo');
Route::get('/product/create', 'ProductController@create')->name('contact.form');
Route::post('/product/create', 'ProductController@store')->name('product.store');
