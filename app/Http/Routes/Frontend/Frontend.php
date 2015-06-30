<?php

/**
 * Frontend Controllers
 */
Route::get('/', ['as' => 'home', 'uses' => 'FrontendController@index']);
Route::get('macros', 'FrontendController@macros');

Route::model('items', 'Cuttingitem');
Route::model('cuttings', 'Cutting');

Route::bind('items', function($value, $route){
	return App\Cuttingitem::whereId($value)->first();
});
Route::bind('cuttings', function($value, $route){
	return App\Cutting::whereId($value)->first();
});

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function ()
{
	Route::get('dashboard', ['as' => 'frontend.dashboard', 'uses' => 'DashboardController@index']);
	Route::resource('profile', 'ProfileController', ['only' => ['edit', 'update']]);
	
	Route::resource('customers', 'CustomerController');

	Route::get('cuttings/{id}/destroy', ['as' => 'cuttings.delete', 'uses' => 'CuttingController@destroy']);
	Route::resource('cuttings', 'CuttingController');
	Route::resource('cuttings.items', 'CuttingitemController');
	
	Route::get('coil/{id}/destroy', ['as' => 'coil.delete', 'uses' => 'CoilController@destroy']);
	Route::resource('coil', 'CoilController');
});
