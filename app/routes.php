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

/*landing page*/
Route::get('/', 'HomeController@index')->before('auth');
Route::get('/advert/{advert}', 'HomeController@getAdvert')->before('auth');

/*Login*/
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@doLogin');

/*logout*/
Route::get('/logout', 'LoginController@logout');

/*profile*/
Route::get('/profile', 'ProfileController@index')->before('auth');

/*notifications*/
Route::get('/notifications', 'NotificationController@index')->before('auth');
Route::get('/notification/{id}', 'NotificationController@getNotification')->before('auth');