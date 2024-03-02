<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['domain' => env('API_URL')], function () {

    Route::get('/', function () {
        return response('OK', 200);
    });

    //  Route::group(['prefix' => 'products', 'as' => 'products.']
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', function () {
            return response('PRODUCTS', 200);
        });
    });

});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
