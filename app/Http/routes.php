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

Route::auth();

//ADMIN
Route::group(['prefix' => 'administration', 'namespace' =>'Admin'], function () {

    // actions w/o credentials
    Route::get('login', 'AdminController@getLogin');
    Route::post('login', 'AdminController@postLogin');

    // actions with credentials
	Route::group(['middleware' => ['admin']], function() {
		Route::controller('wall', 'WallController');
		Route::controller('', 'AdminController');

	});

});

Route::group(['middleware' => 'auth'], function () {

	//DESIGN
	Route::group(['prefix' => 'design', 'namespace' => 'design'], function () {

		Route::controller('', 'DesignController');

	});

});

//Index controller
Route::controller('', 'IndexController');