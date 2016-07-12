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

Route::resource('posts', 'PostController');

Route::get('posts/posts', 'PostController@index');

Route::get('users/index', 'UserController@index');

Route::get('adminInventory', 'InventoryController@showAdminInventory');

Route::put('adminInventory/{id}', 'InventoryController@updateAdminInventory');

Route::post('adminInventory', 'InventoryController@storeAdminInventory');


Route::get('adminSizeDetails', 'SizeDetailController@showAdminSizeDetails');

Route::get('adminStoreSizeDetails', 'SizeDetailController@store');

Route::get('users/about', 'UserController@showAbout');

Route::get('users/login', 'UserController@showLogin');

Route::get('users/create', 'UserController@create');

Route::post('users/create', 'UserController@validateAndSave');

Route::post('users/login', 'UserController@doLogin');

Route::get('users/logout', 'UserController@logout');

Route::resource('users', 'UserController');

Route::get('/', 'UserController@index');

Route::resource('inventories', 'InventoryController');

Route::post('inventories/show', 'SizeDetailController@validateAndPurchase');

Route::resource('sizeDetails', 'SizeDetailController');

Route::resource('orderItems', 'OrderItemController');

Route::resource('orders', 'OrderController');


