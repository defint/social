<?php

Route::get('/',[
    'uses' => '\Social\Http\Controllers\HomeController@index',
    'as' => 'home'
]);

Route::get('/signup', [
    'uses' => '\Social\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup'
]);

Route::post('/signup', [
    'uses' => '\Social\Http\Controllers\AuthController@postSignup'
]);

Route::get('/signin', [
    'uses' => '\Social\Http\Controllers\AuthController@getSignin',
    'as' => 'auth.signin'
]);

Route::post('/signin', [
    'uses' => '\Social\Http\Controllers\AuthController@postSignin'
]);

