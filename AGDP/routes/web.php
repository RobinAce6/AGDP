<?php

Route::get('/', function () {
    return view('Auth\login');
});

//Route::GET('/','Auth\LoginController@login')->name('login');
//Route::GET('/','Auth\LoginController@showLoginForm')->middleware('guest');

Route::GET('mainboard', 'MainboardController@index')->name('mainboard');

Route::POST('login', 'Auth\LoginController@login')->name('login');

Route::POST('logout', 'Auth\LoginController@logout')->name('logout');
