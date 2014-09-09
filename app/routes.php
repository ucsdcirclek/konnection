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

/* Protected Routes */
Route::api(['version' => 'v1', 'prefix' => '', 'protected' => true], function()
{
    /* User system */
    Route::resource('users',                    'UsersController', array('except' => array('update', 'destroy')));
    Route::patch('users',                       'UsersController@update');
    Route::patch('users',                       'UsersController@destroy');


    /* Administration */
    /* Events */
    Route::group(array('prefix' => 'admin', 'before' => 'manage_system'), function()
    {
        Route::resource('users',                'AdminUsersController');
        Route::resource('events',               'AdminEventsController');
        Route::resource('event_tags',           'AdminEventTagsController');
        Route::resource('activity',             'AdminActivitiesController');
    });


});

/* Public Routes */
Route::api(['version' => 'v1', 'prefix' => ''], function()
{
    /* User system */
    Route::get('auth', 'Tappleby\AuthToken\AuthTokenController@index');
    Route::post('auth', 'Tappleby\AuthToken\AuthTokenController@store');
    Route::delete('auth', 'Tappleby\AuthToken\AuthTokenController@destroy');
    Route::post( 'register',                     'UsersController@store');
    Route::get( 'register/confirm/{code}',      'UsersController@confirm');
    Route::post('users/forgot',                 'UsersController@remind');
    Route::post('users/reset',                  'UsersController@reset');

    /* Events */
    Route::resource('events',                   'EventsController', array('except' => array('store', 'update', 'destroy')));

    /* Event Tags */
    Route::resource('event_tags',               'EventTagsController',  array('except' => array('store', 'update', 'destroy')));
});
