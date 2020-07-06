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
    Route::get('events/{slug}/clone', 'EventsController@cloneCopy');
    Route::post('events/{slug}/clone', 'EventsController@cloneStore');

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

Route::group(['prefix' => 'familysystem'], function()
{
    Route::get('landing', function() { return view('pages.about.family.familyMain'); });
    Route::get('family1', function() { return view('pages.about.family.family1'); });
    Route::get('family2', function() { return view('pages.about.family.family2'); });
    Route::get('family3', function() { return view('pages.about.family.family3'); });
    Route::get('family4', function() { return view('pages.about.family.family4'); });
});

Route::get('contact', function() { return view('pages.contact'); });
Route::get('gallery', function() { return view( 'pages.gallery'); });
Route::get('resources', function() { return view( 'pages.resources'); });
Route::get('confessions', function() { return view( 'pages.confessions'); });

Route::get('halloffame', function() { return view( 'pages.halloffame.halloffame'); });
Route::get('mom', function() { return view( 'pages.halloffame.mom'); });
Route::get('sof', function() { return view( 'pages.halloffame.sof'); });
Route::get('spotlight', function() { return view( 'pages.halloffame.spotlight'); });

Route::get('groups', function() { return view( 'pages.committees.groups'); });
Route::get('committees', function() { return view( 'pages.committees.committees'); });
Route::get('masquerade', function() { return view( 'pages.committees.masquerade'); });
Route::get('SLSSP', function() { return view( 'pages.committees.SLSSP'); });
Route::get('Key2College', function() { return view( 'pages.committees.Key2College'); });
Route::get('TechTeam', function() { return view( 'pages.committees.techteam'); });
Route::get('SAAT', function() { return view( 'pages.committees.SAAT'); });
Route::get('LSFP', function() { return view( 'pages.committees.LSFP'); });


Route::group(['prefix' => 'impactteams'], function()
{
Route::get('impact', function() { return view( 'pages.impactteams.impactteams'); });
Route::get('CarpeVitam', function() { return view( 'pages.impactteams.carpevitam'); });
Route::get('GreenTeam', function() { return view( 'pages.impactteams.greenteam'); });
Route::get('TeamHope', function() { return view( 'pages.impactteams.teamhope'); });
Route::get('TeamTails', function() { return view( 'pages.impactteams.teamtails'); });
Route::get('TeamSmileys', function() { return view( 'pages.impactteams.teamsmileys'); });
Route::get('TeamFTK', function() { return view( 'pages.impactteams.teamftk'); });
Route::get('TeamPulse', function() { return view( 'pages.impactteams.teampulse'); });
Route::get('Team_Paws', function() { return view( 'pages.impactteams.team_paws'); });
Route::get('Team_Haven', function() { return view( 'pages.impactteams.team_haven'); });
Route::get('ALICE', function() { return view( 'pages.impactteams.team_alice'); });
Route::get('JOY', function() { return view( 'pages.impactteams.team_joy'); });
Route::get('DEAR', function() { return view( 'pages.impactteams.team_dear'); });
});

//Route::get('landing', function() { return view( 'pages.landing'); });
Route::get('MRP', function() { return view( 'pages.MRP'); });



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