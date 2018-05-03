<?php

//Routes Login

	Route::get('/', function () {
	return view('Auth\login');
});

//Mainboard

Route::GET('mainboard', 'MainboardController@index')->name('mainboard');
Route::POST('login', 'Auth\LoginController@login')->name('login');
Route::POST('logout', 'Auth\LoginController@logout')->name('logout');


//Routes Person

//Route::resource('Person', 'PersonController');

Route::GET ('person', 		'PersonController@index')			->name('person');
Route::GET ('person/list', 'PersonController@index')			->name('person.listP');
Route::POST('person',		'PersonController@store')			->name('store');
Route::GET ('person/create','PersonController@create')			->name('newP');
Route::POST('person/search','PersonController@search')			->name('searchP');
Route::PUT ('person/{id}',  'PersonController@update')			->name('update');
Route::GET ('person/destroy/{id}', 'PersonController@destroy')	->name('person/destroy');
Route::GET ('person/edit/{id}','PersonController@edit')			->name('person/edit');

//Routes Role

Route::GET ('role', 'RoleController@index')					->name('role');
Route::GET ('role.listR', 'RoleController@index')			->name('role.listR');
Route::POST('role','RoleController@store')					->name('storeR');
Route::GET ('role/create', 'RoleController@create')			->name('newR');
Route::POST('role/search', 'RoleController@search')			->name('searchR');
Route::PUT ('role/update/{id}', 'RoleController@update')	->name('updateR');
Route::GET ('role/destroy/{id}', 'RoleController@destroy')	->name('role/destroy');
Route::GET ('role/edit/{id}', 'RoleController@edit')		->name('role/edit');

