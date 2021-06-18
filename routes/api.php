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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/product', 'App\Http\Controllers\ProductController@post');
Route::get('/products', 'App\Http\Controllers\ProductController@get');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@getById');
Route::put('/product/{id}', 'App\Http\Controllers\ProductController@put');
Route::delete('/product/{id}', 'App\Http\Controllers\ProductController@delete');