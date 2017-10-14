<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index');
Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
	Route::get('/', 'AdminController@index');

	//Portfolio
	Route::get('users', 'AdminUserController@index');
	Route::get('users/create', 'AdminUserController@create');
	Route::post('users/create', 'AdminUserController@store');
	Route::get('users/{id}', 'AdminUserController@show');
	Route::get('users/{id}/edit', 'AdminUserController@edit');
	Route::put('users/{id}', 'AdminUserController@update');	
	Route::patch('users/{id}', 'AdminUserController@update');
	Route::get('users/{id}/delete', 'AdminUserController@destroy');	

	// Role
	Route::get('roles', 'RoleController@index');
	Route::get('roles/create', 'RoleController@create');
	Route::post('roles/create', 'RoleController@store');
	Route::get('roles/{id}/edit', 'RoleController@edit');
	Route::put('roles/{id}', 'RoleController@update');	
	Route::patch('roles/{id}', 'RoleController@update');
	Route::get('roles/{id}/delete', 'RoleController@destroy');

	//Portfolio
	Route::get('portfolio', 'PortfolioController@index');
	Route::get('portfolio/create', 'PortfolioController@create');
	Route::post('portfolio/create', 'PortfolioController@store');
	Route::get('portfolio/{id}', 'PortfolioController@show');



});



