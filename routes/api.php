<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SKAgarwal\GoogleApi\PlacesApi;

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

Route::get('/place/nearby-search', 'PlaceController@nearbySearch');

Route::get('/place/loadmore', 'PlaceController@loadmore');

Route::get('/place/textsearch', 'PlaceController@textsearch');

Route::get('/test', function () {
    return env('APP_NAME', 'hello');
});
