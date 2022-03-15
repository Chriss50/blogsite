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

// Articles listing
Route::get('articles', 'ArticleController@index');

// Particular article
Route::get('article/{id}', 'ArticleController@show');

// Creating a new article
Route::post('article', 'ArticleController@store');

// Editing an article
Route::put('article/{id}', 'ArticleController@store');

// Deleting an article
Route::delete('article/{id}', 'ArticleController@destroy');
