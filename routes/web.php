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
    return view('welcome');});

Route::get('/{id}/hotels','HotelController@show');

Route::get('/{id}/places','PlaceController@show');

Route::get('/{id}/travels','TravelController@show');

Route::get('/{id}/housing','HousingController@show');

Route::get('/login','HajdController@show');
