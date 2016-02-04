<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('events', 'EventsController@index');
Route::get('events/{id}', 'EventsController@show');

/**
 * Authenticated Areas
 */
Route::group(['middleware' => 'auth'], function()
{
    Route::get('settings', 'UsersController@edit');
    Route::post('settings', 'UsersController@update');
    Route::get('/users/current', 'UsersController@current');

    Route::resource('tag', 'TagsController',
        ['only' => ['create', 'store']]);

    Route::resource('activity', 'ActivitiesController',
        ['only' => ['create', 'store']]);

    Route::resource('kiwanisAttendee', 'KiwanisAttendeesController',
        ['only' => ['create', 'store']]);
});

/**
 * Admin Areas
 */
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

// API routes.
Route::group(['namespace' => 'Api', 'prefix' => 'api'], function()
{
    Route::get('events', 'EventsController@index');
    Route::patch('events/{slug}', 'EventsController@update');

    // Registrations
    Route::post('events/{slug}/registrations/create', 'EventRegistrationsController@store');
    Route::patch('events/{slug}/registrations/{id}', 'EventRegistrationsController@update');
    Route::delete('events/{slug}/registrations/{id}', 'EventRegistrationsController@destroy');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


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
        Route::get('board', function() { return view('pages.about.club.board'); });
        Route::get('causes', function() { return view('pages.about.club.causes'); });
        Route::get('tenets', function() { return view('pages.about.club.tenets'); });
    });

    Route::get('district', function() { return view('pages.about.district'); });
    Route::get('division', function() { return view('pages.about.division'); });
    Route::get('membership', function() { return view('pages.about.membership'); });
});
Route::get('contact', function() { return view('pages.contact'); });
