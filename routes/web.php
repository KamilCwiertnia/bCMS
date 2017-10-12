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

Route::get('/', 'PagesController@index');
Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
	Route::get('/', 'AdminController@index');
	
	Route::get('users', 'AdminUserController@index');
	Route::get('users/create', 'AdminUserController@create');
	Route::post('users/create', 'AdminUserController@store');
	Route::get('users/{id}', 'AdminUserController@show');
	Route::get('users/{id}/edit', 'AdminUserController@edit');
	Route::put('users/{id}', 'AdminUserController@update');	
	Route::patch('users/{id}', 'AdminUserController@update');	
});


