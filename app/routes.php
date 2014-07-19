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
Route::get( 'login/forgot',                 'UserController@forgot_password');
Route::post('login/forgot',                 'UserController@do_forgot_password');
Route::get( 'login/reset/{token}',          'UserController@reset_password');
Route::post('login/reset',                  'UserController@do_reset_password');
Route::get( 'logout',                       'UserController@logout');
