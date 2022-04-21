<?php

use App\Http\Controllers\userController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register','App\Http\Controllers\UserController@register');
Route::post('login', 'App\Http\Controllers\UserController@login');
Route::post('container','App\Http\Controllers\ContainerController@addContainer');
Route::put('container/{container_id}','App\Http\Controllers\ContainerController@updateContainer');
Route::delete('container/{id}','App\Http\Controllers\ContainerController@deleteContainer');
Route::get('container/{user_id}','App\Http\Controllers\ContainerController@getContainerByUserId');
