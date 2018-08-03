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

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');

Route::post('immeuble', 'ImmeubleController@add');
Route::post('passeports', 'PasseportController@add');
Route::put('passeports', 'PasseportController@update');
Route::delete('passeports', 'PasseportController@delete');
Route::post('immeuble', 'ImmeubleController@add');

Route::post('users', 'UserController@add');
Route::put('users', 'UserController@update');
Route::delete('users', 'UserController@delete');
