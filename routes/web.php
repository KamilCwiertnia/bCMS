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

Route::get('/profil', 'ProfileController@index')->middleware('auth');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin','role:admin']], function() {
	Route::get('/', 'AdminController@index');
	Route::get('lockscreen', 'LockScreenController@lockscreen');
	Route::post('lockscreen', 'LockScreenController@unlock');

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
	Route::get('portfolio/{id}/edit', 'PortfolioController@edit');
	Route::put('portfolio/{id}', 'PortfolioController@update');	
	Route::patch('portfolio/{id}', 'PortfolioController@update');
	Route::get('portfolio/{id}/delete', 'PortfolioController@destroy');

	//Kategorie Portfolio
	Route::get('category-portfolio', 'CategoryPortfolioController@index');
	Route::get('category-portfolio/create', 'CategoryPortfolioController@create');
	Route::post('category-portfolio/create', 'CategoryPortfolioController@store');
	Route::get('category-portfolio/{id}/edit', 'CategoryPortfolioController@edit');
	Route::put('category-portfolio/{id}', 'CategoryPortfolioController@update');	
	Route::patch('category-portfolio/{id}', 'CategoryPortfolioController@update');
	Route::get('category-portfolio/{id}/delete', 'CategoryPortfolioController@destroy');

	//Skill Portfolio
	Route::get('skill-portfolio', 'SkillPortfolioController@index');
	Route::get('skill-portfolio/create', 'SkillPortfolioController@create');
	Route::post('skill-portfolio/create', 'SkillPortfolioController@store');
	Route::get('skill-portfolio/{id}/edit', 'SkillPortfolioController@edit');
	Route::put('skill-portfolio/{id}', 'SkillPortfolioController@update');	
	Route::patch('skill-portfolio/{id}', 'SkillPortfolioController@update');
	Route::get('skill-portfolio/{id}/delete', 'SkillPortfolioController@destroy');


});



