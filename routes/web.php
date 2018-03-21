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
Route::get('/works/{slug}','IndexController@gallery');
Route::get('/works/all','IndexController@allGallery');
Route::get('/services','IndexController@services');
Route::get('/services/{slug}','IndexController@service');
Route::get('/faq','IndexController@faq');
Route::get('/price','IndexController@price');
Route::get('/delivery','IndexController@delivery');
Route::get('/contacts','IndexController@contacts');
Route::get('/team','IndexController@team');
Route::get('/route','IndexController@route');
Route::get('/clients','IndexController@clients');
Route::get('/devices','IndexController@devices');
Route::get('/map','IndexController@map');
Route::get('/review','IndexController@review');
Route::get('/news','IndexController@news');
Route::get('/news/{slug}','IndexController@single');
Route::post('/home/publish','HomeController@publish');
Route::post('/home/teammate','HomeController@teammate');
Route::post('/home/upload','HomeController@upload');
Route::post('/home/service','HomeController@service');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
