<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Listed below are the routes for the main website, including static pages,
| admin areas, and other areas that require authentication.
|
*/

Route::get('/', 'HomeController@index');
Route::get('events', 'EventsController@index');
Route::get('events/{id}', 'EventsController@show');

// Allows anonymous users to create registrations.
Route::post('events/{slug}/guest_registrations/create', 'GuestRegistrationsController@store');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Authenticated areas.
Route::group(['middleware' => 'auth'], function()
{
    Route::get('settings', 'UsersController@edit');
    Route::post('settings', 'UsersController@update');
    Route::get('/users/current', 'UsersController@current');

    //Route::get('profile', 'ProfilesController@show' );
    //Route::get('/profile/{id}', 'ProfilesController@temp');

    Route::resource('tag', 'TagsController',
        ['only' => ['create', 'store']]);

    Route::resource('activity', 'ActivitiesController',
        ['only' => ['create', 'store']]);

    Route::resource('kiwanisAttendee', 'KiwanisAttendeesController',
        ['only' => ['create', 'store']]);

    Route::post('events/{slug}/registrations/create', 'EventRegistrationsController@store');
    Route::patch('events/{slug}/registrations/{id}', 'EventRegistrationsController@update');
    Route::delete('events/{slug}/registrations/{id}', 'EventRegistrationsController@destroy');
});

// Admin areas.
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function()
{
    Route::get('/', function() { return view('pages.admin.home'); });

    // Events
    Route::get('events/create', 'EventsController@create');
    Route::post('events/create', 'EventsController@store');
    Route::get('events/{slug}/update', 'EventsController@edit');
    Route::post('events/{slug}/update', 'EventsController@update');
    Route::get('events/{slug}/registrations', 'EventsController@registrations');
    Route::delete('events/{slug}', 'EventsController@delete');
    Route::get('events/{slug}/feature', 'EventsController@feature');
    Route::post('events/{slug}/feature', 'EventsController@saveFeaturedEvent');

    // Posts
    Route::get('posts/create', 'PostsController@create');
    Route::post('posts/create', 'PostsController@store');

    // Slides
    Route::get('slides', 'SlidesController@index');
    Route::get('slides/create', 'SlidesController@create');
    Route::post('slides/create', 'SlidesController@store');
    Route::delete('slides/{id}', 'SlidesController@delete');
});

// Service bulletin.
Route::get('bulletin', 'PostsController@bulletin');

// Routes for the CERF form, list, and detail views.
Route::get('cerfs/overview', 'CerfsController@overview');
Route::get('cerfs/select/{id}', 'CerfsController@select');
Route::resource('cerfs', 'CerfsController');

Route::get('cerfs/approve/{id}', 'CerfsController@approve');

// TODO Should have an API endpoint instead of hacking one here.
Route::post('users/search', 'UsersController@search');

// Static pages.
Route::group(['prefix' => 'about'], function()
{
    Route::group(['prefix' => 'circlek'], function()
    {
        Route::get('/', function() { return view('pages.about.circlek.general'); });
        Route::get('history', function() { return view('pages.about.circlek.history'); });
        Route::get('structure', function() { return view('pages.about.circlek.structure'); });
        Route::get('tenets', function() { return view('pages.about.circlek.tenets'); });
});

    Route::group(['prefix' => 'club'], function()
    {
        Route::get('/', function() { return view('pages.about.club.general'); });
        Route::get('causes', function() { return view('pages.about.club.causes'); });
        Route::get('tenets', function() { return view('pages.about.club.tenets'); });
    });

    Route::get('drivers', function() { return view('pages.about.drivers'); });
    Route::get('district', function() { return view('pages.about.district'); });
    Route::get('division', function() { return view('pages.about.division'); });
    Route::get('membership', function() { return view('pages.about.membership'); });
});
Route::get('contact', function() { return view('pages.contact'); });

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Listed below are the routes for the API.
|
*/

// Gets an instance of the API router in order to create endpoints.
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {

    $api->group(['namespace' => 'App\Api\Controllers', 'middleware' => 'cors'], function($api) {
        // Routes that are accessible by anonymous visitors to the site. These
        // routes should only be using safe methods (i.e. GET, HEAD, OPTIONS).

        // Authentication routes.
        $api->post('auth/login', 'AuthController@authenticate');
        $api->post('auth/register', 'AuthController@register');

        // Event resource routes.
        $api->get('events', 'EventsController@index');
        $api->post('events/event_range', 'EventsController@getEventsInRange');
        $api->post('events/event_date', 'EventsController@getEventsOnDate');
        $api->get('events/{slug}/registrations', 'EventRegistrationsController@index');
        $api->get('events/{id}', 'EventsController@show');

        // Post resource routes.
        $api->get('posts', 'PostsController@index');

        $api->group(['before' => 'jwt.auth', 'middleware' => 'jwt.refresh'], function($api) {
            // Routes that are only available under authentication. All
            // requests made to these routes require a valid JWT.

            // Gets user corresponding to JWT.
            $api->get('auth/current_user', 'AuthController@getAuthenticatedUser');

            // Checks whether token is valid.
            $api->get('auth/validate_token', 'AuthController@validateToken');

            // Event registration resource routes.
            $api->post('events/{slug}/registrations/create', 'EventRegistrationsController@store');
            $api->patch('events/{slug}/registrations/{id}', 'EventRegistrationsController@update');
            $api->delete('events/{slug}/registrations/{id}', 'EventRegistrationsController@destroy');
        });

    });
});

