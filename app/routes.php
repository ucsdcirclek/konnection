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

Route::api(['version' => 'v1', 'prefix' => ''], function()
{
    /* User system */
    Route::resource('users',                    'UsersController');
    Route::get( 'register',                     'UsersController@create');
    Route::get( 'register/confirm/{code}',      'UsersController@confirm');
    Route::post('login',                        'UsersController@login');
    Route::post('login/forgot',                 'UsersController@forgot_password');
    Route::post('login/reset',                  'UsersController@do_reset_password');
    Route::get( 'logout',                       'UsersController@logout');

    /* Events */
    Route::resource('events',                   'EventsController');

    /* Event Tags */
    Route::resource('event_tags',               'EventTagsController');

    /* Activity Log */
    Route::resource('activity',                 'ActivitiesController');
});
