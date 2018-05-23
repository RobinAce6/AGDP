<?php

//Routes Login

	Route::get('/', function () {
	return view('Auth\login');
});

//Mainboard

Route::GET('mainboard', 'MainboardController@index')->name('mainboard');
Route::POST('login', 'Auth\LoginController@login')->name('login');
Route::POST('logout', 'Auth\LoginController@logout')->name('logout');


//Person Routes

//Role Routes

Route::GET ('role', 'RoleController@index')					->name('role');
Route::GET ('role.listR', 'RoleController@index')			->name('role.listR');
Route::POST('role','RoleController@store')					->name('storeR');
Route::GET ('role/create', 'RoleController@create')			->name('newR');
Route::POST('role/search', 'RoleController@search')			->name('searchR');
Route::PUT ('role/update/{id}', 'RoleController@update')	->name('updateR');
Route::GET ('role/destroy/{id}', 'RoleController@destroy')	->name('role/destroy');
Route::GET ('role/edit/{id}', 'RoleController@edit')		->name('role/edit');

//Dependency Routes

Route::GET ('depend', 'DependencyController@index')					->name('depend');
Route::GET ('depend.listD', 'DependencyController@index')			->name('depend.listD');
Route::POST('depend','DependencyController@store')					->name('storeD');
Route::GET ('depend/create', 'DependencyController@create')			->name('newD');
Route::POST('depend/search', 'DependencyController@search')			->name('searchD');
Route::PUT ('depend/update/{id}', 'DependencyController@update')	->name('updateD');
Route::GET ('depend/destroy/{id}', 'DependencyController@destroy')	->name('depend/destroy');
Route::GET ('depend/edit/{id}', 'DependencyController@edit')		->name('depend/edit');

//User Routes

Route::GET ('user', 'UserController@index')					->name('user');
Route::GET ('user.listU', 'UserController@index')			->name('user.listU');
Route::POST('user','UserController@store')					->name('storeU');
Route::GET ('user/create', 'UserController@create')			->name('newU');
Route::POST('user/search', 'UserController@search')			->name('searchU');
Route::PUT ('user/update/{id}', 'UserController@update')	->name('updateU');
Route::GET ('user/destroy/{id}', 'UserController@destroy')	->name('user/destroy');
Route::GET ('user/edit/{id}', 'UserController@edit')		->name('user/edit');

//Folder Routes

Route::GET ('folder', 'FolderController@index')					->name('folder');
Route::GET ('folder.listF', 'FolderController@index')			->name('folder.listF');
Route::POST('folder','FolderController@store')					->name('storeF');
Route::GET ('folder/create', 'FolderController@create')			->name('newF');
Route::POST('folder/search', 'FolderController@search')			->name('searchF');
Route::PUT ('folder/update/{id}', 'FolderController@update')	->name('updateF');
Route::GET ('folder/destroy/{id}', 'FolderController@destroy')	->name('folder/destroy');
Route::GET ('folder/edit/{id}', 'FolderController@edit')		->name('folder/edit');

//StorageWays Routes

Route::GET ('storagew', 'StorageWayController@index')				->name('storagew');
Route::GET ('storagew.listSW', 'StorageWayController@index')		->name('storagew.listSW');
Route::POST('storagew','StorageWayController@store')				->name('storeSW');
Route::GET ('storagew/create', 'StorageWayController@create')		->name('newSW');
Route::POST('storagew/search', 'StorageWayController@search')		->name('searchSW');
Route::PUT ('storagew/update/{id}', 'StorageWayController@update')	->name('updateSW');
Route::GET ('storagew/destroy/{id}', 'StorageWayController@destroy')->name('storagew/destroy');
Route::GET ('storagew/edit/{id}', 'StorageWayController@edit')		->name('storagew/edit');

//TypePerson Routes

Route::GET ('typePerson', 'TypePersonController@index')					->name('typePerson');
Route::GET ('typePerson.listTP', 'TypePersonController@index')			->name('typePerson.listTP');
Route::POST('typePerson','TypePersonController@store')					->name('storeTP');
Route::GET ('typePerson/create', 'TypePersonController@create')			->name('newTP');
Route::POST('typePerson/search', 'TypePersonController@search')			->name('searchTP');
Route::PUT ('typePerson/update/{id}', 'TypePersonController@update')	->name('updateTP');
Route::GET ('typePerson/destroy/{id}', 'TypePersonController@destroy')  ->name('typePerson/destroy');
Route::GET ('typePerson/edit/{id}', 'TypePersonController@edit')		->name('typePerson/edit');