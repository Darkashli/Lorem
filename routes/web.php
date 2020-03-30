<?php

// Different pages 
Route::get('/', 'MainController@index');
Route::view('/about', 'pages.about');
Route::get('/notification', 'MainController@notification');

// Customer page
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{customer}', 'CustomerController@show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit');
Route::patch('/customers/{customer}', 'CustomerController@update');
Route::delete('/customers/{customer}', 'CustomerController@destroy');

// Service page
Route::get('/services', 'ServiceController@index');
Route::get('/services/create', 'ServiceController@create');
Route::post('/services', 'ServiceController@store');
Route::get('/services/{service}', 'ServiceController@show');
Route::get('/services/{service}/edit', 'ServiceController@edit');
Route::patch('/service/{service}', 'ServiceController@update');
Route::delete('/services/{service}', 'ServiceController@destroy');






 
