<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/teams', 'TeamsController@index');

Route::get('/teams/{id}', 'TeamsController@show')->name('show-team');

Route::get('/players/{id}', 'PlayersController@show')->name('show-player');

Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@create');

Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LoginController@logout');


