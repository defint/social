<?php

Route::get('/',[
    'uses' => '\Social\Http\Controllers\HomeController@index',
    'as' => 'home'
]);

Route::get('/alert',function()
{
    return redirect()->route('home')->with('info','Welcome!');
});
