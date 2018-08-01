<?php

use Illuminate\Http\Request;
Use App\Article;
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

Route::post('immeuble', 'ImmeubleController@add');
Route::post('passeport', 'PasseportController@add');
Route::put('passeport', 'PasseportController@update');
Route::delete('passeport', 'PasseportController@delete');