<?php


Route::GET('/','Auth\LoginController@showLoginForm');

Route::GET('mainboard', 'MainboardController@index')->name('mainboard');

Route::POST('login', 'Auth\LoginController@login')->name('login');

Route::POST('logout', 'Auth\LoginController@logout')->name('logout');


