<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/login','HajdController@show');

Route::get('/{id}/hotels','HotelController@show');

Route::get('/{id}/places','PlaceController@show');

Route::get('/{id}/travels','TravelController@show');

Route::get('/{id}/housing','HousingController@show');