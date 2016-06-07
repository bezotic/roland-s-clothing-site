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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users/index', 'UserController@index');

Route::get('users/about', 'UserController@showAbout');

Route::get('users/login', 'UserController@showLogin');

Route::get('users/create', 'UserController@create');

Route::post('users/login', 'UserController@doLogin');

Route::resource('users', 'UserController');

Route::resource('inventories', 'InventoryController');

Route::resource('sizeDetails', 'SizeDetailController');

Route::resource('orderItems', 'OrderItemController');

Route::resource('orders', 'OrderController');


