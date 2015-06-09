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

	# Home
	Route::get('/', 'PagesController@home');

	# Profile
	Route::get('/profile', 'PagesController@profile');
	Route::get('/profile/edit', 'ProfileController@show');
	
	# Events
	Route::get('/calendar', 'CalendarController@index');

	# Authentication
	Route::controllers([
	    'auth' => 'Auth\AuthController',
	    'password' => 'Auth\PasswordController',
	]);
