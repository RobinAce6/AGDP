<?php

//Routes Login

Route::get('/', function () {
	return view('Auth\login');
});

Route::GET('mainboard', 'MainboardController@index')->name('mainboard');
Route::POST('login', 'Auth\LoginController@login')->name('login');
Route::POST('logout', 'Auth\LoginController@logout')->name('logout');


//Routes Person

/*Route::resource('Person', 'PersonController');*/
Route::GET('Person', 'PersonController@index')->name('person');
Route::GET('newP', 'PersonController@create')->name('person.newP');
Route::POST('person.store', 'PersonController@store')->name('store');
Route::PUT('person/{id}', 'PersonController@update')->name('updateP');
Route::GET('person.edit', 'PersonController@edit')->name('person.edit');
Route::DELETE('person/destroy/{id}', 'PersonController@destroy')->name('person/destroy');
Route::POST('person/search', 'PersonController@search')->name('searchP');
