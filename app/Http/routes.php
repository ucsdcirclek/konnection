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

    Route::resource('tag', 'TagsController',
        ['only' => ['create', 'store']]);

    Route::resource('activity', 'ActivitiesController',
        ['only' => ['create', 'store']]);

    Route::resource('kiwanisAttendee', 'KiwanisAttendeesController',
        ['only' => ['create', 'store']]);
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
        Route::get('board', function() { return view('pages.about.club.board'); });
        Route::get('causes', function() { return view('pages.about.club.causes'); });
        Route::get('tenets', function() { return view('pages.about.club.tenets'); });
    });

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

        // Authentication routes
        $api->post('login', 'AuthController@authenticate');

        $api->group(['middleware' => 'jwt.refresh'], function($api) {
            // Event list route.
            $api->get('events', 'EventsController@index');

            // Event registrations routes.
            $api->post('events/{slug}/registrations/create', 'EventRegistrationsController@store');
            $api->patch('events/{slug}/registrations/{id}', 'EventRegistrationsController@update');
            $api->delete('events/{slug}/registrations/{id}', 'EventRegistrationsController@delete');

            // Post list route.
            $api->get('posts', 'PostsController@index');
        });

    });
});

