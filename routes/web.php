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

Route::get('/','IndexController@index');
Route::get('/about','IndexController@about');
Route::get('/works','IndexController@works');
Route::get('/services','IndexController@services');
Route::get('/faq','IndexController@faq');
Route::get('/price','IndexController@price');
Route::get('/delivery','IndexController@delivery');
Route::get('/contacts','IndexController@contacts');
Route::get('/news','IndexController@news');
Route::get('/news/{slug}','IndexController@single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
