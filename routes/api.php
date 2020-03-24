<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('v1/events','Api\EventsController@index');

Route::get('v1/organizers/{organizerslug}/events/{eventSlug}','Api\EventsController@show');

Route::post('v1/login','Api\LoginController@login');

Route::post('v1/logout','Api\LoginController@logout');

Route::get('v1/registrations','Api\RegistrationsController@index');

Route::post('v1/organizers/{organizerslug}/events/{eventSlug}/registrations','Api\Organizer\RegistrationsController@store');