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
Route::get('calendar', 'EventsController@index');
Route::get('events/{id}', 'EventsController@show');

/**
 * Authenticated Areas
 */
Route::group(['middleware' => 'auth'], function()
{
    Route::get('settings', 'UsersController@edit');
    Route::post('settings', 'UsersController@update');
});

/**
 * Static pages
 */
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

/**
 * API routes
 */
Route::group(['namespace' => 'Api', 'prefix' => 'api'], function()
{
    Route::get('events', 'EventsController@index');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
