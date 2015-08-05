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


	#Binding
		Route::bind('groups', function($slug) 
	{
		return App\Group::find($slug)->first();
	});

	# Home
	$router->get('/', ['as' => 'home', 'uses' => 'StaticPagesController@home']);

	# Profile
	$router->get('my-profile', ['as' => 'profile', 'uses' => 'ProfileController@index']);
	$router->get('profile/edit', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	$router->get('@{username}', ['as' => 'profile.show', 'uses' => 'ProfileController@show']);
	$router->patch('profile/{username}', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);

	#Groups
	$router->get('my-groups', ['as' => 'groups', 'uses' => 'GroupController@index']);
	$router->get('group/create', ['as' => 'groups.create', 'uses' => 'GroupController@create']);
	$router->get('group/{slug}', ['as' => 'group.show', 'uses' => 'GroupController@show']);
	$router->post('groups', ['as' => 'groups.store', 'uses' => 'GroupController@store']);
	$router->post('invites/{slug}', ['as' => 'invite.create', 'uses' => 'GroupController@createInviteCode']);
	
	# Calendar
	$router->get('calendar', ['as' => 'calendar', 'uses' => 'CalendarController@index']);

	#Events
	//$router->get('event/create', ['as' => 'event.create', 'uses' => 'EventController@index']);
	//$router->get('event', ['as' => 'event', 'uses' => 'EventController@index']);

	# Authentication
	Route::controllers([
	    'auth' => 'Auth\AuthController',
	    'password' => 'Auth\PasswordController',
	]);
