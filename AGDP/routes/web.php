<?php

//Routes Login

	Route::get('/', function () {
	return view('Auth\login');
});

Route::GET('mainboard', 'MainboardController@index')->name('mainboard');
Route::POST('login', 'Auth\LoginController@login')->name('login');
Route::POST('logout', 'Auth\LoginController@logout')->name('logout');


//Routes Person

//Route::resource('Person', 'PersonController');

//Route::POST('person', 'PersonController@index')->name('person');
Route::GET('person', 'PersonController@index')->name('person');
//Route::POST('person.store', 'PersonController@store')->name('store');

Route::POST('person', 'PersonController@store')->name('store');

Route::GET('person/create', 'PersonController@create')->name('newP');

Route::PUT('person/{idPeo}', 'PersonController@update')->name('updateP');

Route::GET('person/edit/{idPeo}', 'PersonController@edit')->name('person.edit');

Route::GET('person/destroy/{id}', 'PersonController@destroy')->name('person/destroy');

Route::POST('person/search', 'PersonController@search')->name('searchP');


Route::POST('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::POST('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');