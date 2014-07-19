<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/* Authentication Routes */
Route::get( 'register',                     'UserController@create');
Route::post('register',                     'UserController@store');
Route::get( 'register/confirm/{code}',      'UserController@confirm');
Route::get( 'login',                        'UserController@login');
Route::post('login',                        'UserController@do_login');
Route::get( 'login/forgot_password',        'UserController@forgot_password');
Route::post('login/forgot_password',        'UserController@do_forgot_password');
Route::get( 'login/reset_password/{token}', 'UserController@reset_password');
Route::post('login/reset_password',         'UserController@do_reset_password');
Route::get( 'logout',                       'UserController@logout');
