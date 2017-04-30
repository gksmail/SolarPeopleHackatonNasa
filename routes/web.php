<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['guest']], function () {

Route::get('/', 'SunController@index');
});

/*
Route::group(['middleware' => ['guest']], function () {

Route::get('/', function () {
   return view('sun.welcome'); 
});
});
*/



Auth::routes();

Route::get('/home', 'SunController@index');

