<?php

Route::get('/', 'FrontendController@index');
Route::get('dashboard', 'DashboardController@index');
Route::get('dashboard/edit/{id}', 'DashboardController@edit');
Route::get('dashboard/del/{id}', 'DashboardController@delete');
Route::patch('dashboard/update/{id}', 'DashboardController@update');
//Socialite Integration
Route::get('auth/login/{provider}', ['as' => 'auth.provider', 'uses' => 'Auth\AuthController@loginThirdParty']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);