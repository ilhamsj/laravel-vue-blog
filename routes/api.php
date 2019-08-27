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


Route::get('/article', 'ArticleController@index');
Route::get('/article/{id}', 'ArticleController@show');
Route::post('/article/update/{id}', 'ArticleController@update');

Route::post('/article/create', 'ArticleController@store');
Route::delete('/article/delete/{id}', 'ArticleController@destroy');