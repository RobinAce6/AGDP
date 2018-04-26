<?php

//Routes Login

Route::get('/', function () {
    return view('Auth\login');
});

Route::GET('mainboard', 'MainboardController@index')->name('mainboard');
Route::POST('login', 'Auth\LoginController@login')->name('login');
Route::POST('logout', 'Auth\LoginController@logout')->name('logout');


//Routes Person

Route::resource('Person', 'PersonController');
//Route::POST('person/create', 'PersonController@create')->name('newP');
Route::POST('Person', 'PersonController@index')->name('person');
Route::POST('store', 'PersonController@store')->name('store');
Route::GET('person/destroy/{id}', 'PersonController@destroy')->name('destryP');
Route::POST('person/search', 'PersonController@search')->name('searchP');
