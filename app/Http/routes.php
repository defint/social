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
