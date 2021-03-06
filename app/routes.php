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

Route::put('admininventory/{id}', 'InventoryController@updateAdminInventory');

Route::post('adminInventory', 'InventoryController@storeAdminInventory');

Route::put('adminInventory/{id}', 'InventoryController@updateAdminInventory');

Route::get('adminSizeDetails', 'SizeDetailController@showAdminSizeDetails');

Route::put('adminSizeUpdate/{id}', 'SizeDetailController@update');

Route::post('adminStoreSizeDetails', 'SizeDetailController@store');

Route::get('users/about', 'UserController@showAbout');

Route::get('users/login', 'UserController@showLogin');

Route::get('users/create', 'UserController@create');

Route::post('users/create', 'UserController@validateAndSave');

Route::post('users/login', 'UserController@doLogin');

Route::get('users/logout', 'UserController@logout');

Route::resource('users', 'UserController');

Route::get('/', 'UserController@index');

Route::resource('inventories', 'InventoryController');


Route::get('inventories/show', 'InventoryController@show');


Route::resource('sizeDetails', 'SizeDetailController');

Route::get('orderItems', 'OrderItemController@index');

Route::post('orderItems/create', "OrderItemController@createOrderItem");

Route::resource('orders', 'OrderController');


