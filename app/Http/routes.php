<?php

Route::get('/',[
    'uses' => '\Social\Http\Controllers\HomeController@index',
    'as' => 'home'
]);
