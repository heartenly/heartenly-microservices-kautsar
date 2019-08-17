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
Route::get('account', 'AccountController@index');
Route::get('account/{id}', 'AccountController@show');
Route::post('account', 'AccountController@store');
Route::put('account/{id}', 'AccountController@update');
Route::delete('account/{id}', 'AccountController@delete');

Route::get('detail_profile/{id_account}', 'DetailProfileController@index');


