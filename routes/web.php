<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Different pages
Route::view('/about', 'pages.about');
Route::get('/notifications', 'NotificationController@index');

// Participant page
Route::get('/participants', 'ParticipantController@index');
Route::get('/participants/create', 'ParticipantController@create');
Route::post('/participants', 'ParticipantController@store');
Route::get('/participants/{participant}', 'ParticipantController@show');
Route::get('/participants/{participant}/edit', 'ParticipantController@edit');
Route::patch('/participants/{participant}', 'ParticipantController@update');
Route::delete('/participants/{participant}', 'ParticipantController@destroy');

// Service page
Route::get('/services', 'ServiceController@index');
Route::get('/services/create', 'ServiceController@create');
Route::post('/services', 'ServiceController@store');
Route::get('/services/{service}/edit', 'ServiceController@edit');
Route::patch('/service/{service}', 'ServiceController@update');
Route::delete('/services/{service}', 'ServiceController@destroy');

// Questionnaire page
Route::get('/questionnaires/create', 'QuestionnaireController@create');
Route::post('/questionnaires', 'QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}', 'QuestionnaireController@show');
Route::delete('/questionnaires/{questionnaire}', 'QuestionnaireController@destroy');

// Question page
Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy');

// Survey page
Route::get('/surveys/{questionnaire}-{slug}', 'SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store');




