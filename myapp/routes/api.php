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

Route::post('immeubles', 'ImmeubleController@add');
Route::put('immeubles', 'ImmeubleController@update');
Route::delete('users', 'ImmeubleController@delete');
Route::post('users', 'UserController@add');
Route::put('users', 'UserController@update');
Route::delete('users', 'UserController@delete');
Route::post('comptes', 'ComptesController@add');
Route::put('comptes', 'ComptesController@update');
Route::delete('comptes', 'ComptesController@delete');
