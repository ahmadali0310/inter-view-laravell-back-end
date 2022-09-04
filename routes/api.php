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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login')->name('login');
    Route::post('signUp', 'AuthController@register')->name('signUp');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::group([
    'middleware' => 'jwt.verify',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'posts'
], function () {
    Route::get('/', 'PostController@index');
    Route::get('/{id}', 'PostController@show');
    Route::post('/', 'PostController@store');
    Route::put('/{id}', 'PostController@update');
    Route::delete('/{id}', 'PostController@destroy');
});
