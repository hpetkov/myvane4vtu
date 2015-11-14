<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('travel', 'TravellingController@store');

Route::resource('user', 'UserController');
Route::get('user/{id}/settings', 'UserController@settings');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login/test', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Travel routes
Route::get('travelling/listing', 'TravellingController@listingAction');
Route::get('travelling/add', 'TravellingController@addAction');
Route::get('travelling/pay/{id}', 'TravellingController@payAction');

Route::get('pages/about-us', 'PagesController@aboutUsAction');
Route::get('pages/terms', 'PagesController@termsAction');
