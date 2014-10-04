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

/* Transformers */
API::transform('Activity', 'ActivityTransformer');
API::transform('EventTag', 'EventTagTransformer');
API::transform('EventRegistration', 'EventRegistrationTransformer');
API::transform('CalendarEvent', 'EventTransformer');
API::transform('User', 'UserTransformer');
API::transform('Post', 'PostTransformer');
API::transform('PostCategory', 'PostCategoryTransformer');

/* Protected Routes */
Route::api(['version' => 'v1', 'prefix' => '', 'protected' => true], function()
{
    /* User system */
    Route::resource('users',                    'UsersController', array('except' => array('update', 'destroy')));
    Route::get('self',                          'UsersController@showSelf');
    Route::patch('self',                        'UsersController@updateSelf');
    Route::delete('self',                       'UsersController@destroySelf');

    /* Profiles */
    Route::post('profiles',                     'ProfilesController@update');

    /* Events */
    /* CERF */
    Route::post('events/{id}/report',           'EventsController@report');
    /* Registration */
    Route::post('events/{id}/register',         'EventsController@register');
    Route::patch('events/{id}/register',        'EventsController@updateRegister');
    Route::post('events/{id}/unregister',       'EventsController@unregister');


    /* Administration */
    Route::group(array('prefix' => 'admin', 'before' => 'manage_system'), function()
    {
        Route::resource('users',                'AdminUsersController');
        Route::resource('profiles',             'AdminProfilesController');
        Route::resource('events',               'AdminEventsController');
        Route::resource('events.registrations', 'AdminEventRegistrationsController');
        Route::resource('event_categories',     'AdminEventCategoriesController');
        Route::resource('event_tags',           'AdminEventTagsController');
        Route::resource('activity',             'AdminActivitiesController');
        Route::resource('posts',                'AdminPostsController');
        Route::resource('post_categories',      'AdminPostCategoriesController');
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
    Route::resource('events.registrations',     'EventRegistrationsController', array('except' => array('store',
            'update', 'destroy')));
    Route::get('events/{id}/contact',           'EventsController@contact');

    /* Event Tags */
    Route::resource('event_tags',               'EventTagsController',  array('except' => array('store', 'update', 'destroy')));

    /* Event Categories */
    Route::resource('event_categories',         'EventCategoriesController', array('except' => array('store', 'update', 'destroy')));

    /* Posts */
    Route::resource('posts',                    'PostsController', array('except' => array('store', 'update', 'destroy')));

    /* Post Categories */
    Route::resource('post_categories',          'PostCategoriesController', array('except' => array('store', 'update', 'destroy')));

    /* Profiles */
    Route::get('profiles',                      'ProfilesController@index');
    Route::get('profiles/{id}',                 'ProfilesController@show');
});
