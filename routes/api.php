<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'object'], function(){
    Route::get('/get_all_records', '\App\Http\Controllers\ObjectController@list');
    Route::post('/', '\App\Http\Controllers\ObjectController@create');
    Route::get('/{key}', '\App\Http\Controllers\ObjectController@retrieve');
});


