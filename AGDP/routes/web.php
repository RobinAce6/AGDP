<?php

//Routes Login

	Route::get('/', function () 
	{
		return view('Auth\login');
	});

	Route::get('/home', 'HomeController@index')->name('home');

	Auth::routes();



//Mainboard

Route::GET('Principal', 'MainboardController@index')->name('Principal');
Route::POST('login', 'Auth\LoginController@login')->name('login');
Route::POST('logout', 'Auth\LoginController@logout')->name('logout');
Route::GET('profile', 'UserController@profile')->name('profile');
Route::GET('others', 'UserController@Others')->name('others');


// City Routes

//Route::GET ('city', 'CityController@index')					->name('city');
// Route::GET ('city.listC', 'CityController@index')			->name('city.listC');
// Route::POST('city','CityController@store')					->name('storeC');
// Route::GET ('city/create', 'CityController@create')			->name('newC');
// Route::POST('city/search', 'CityController@search')			->name('searchC');
// Route::PUT ('city/update/{id}', 'CityController@update')	->name('updateC');
// Route::GET ('city/destroy/{id}', 'CityController@destroy')	->name('city/destroy');
// Route::GET ('city/edit/{id}', 'CityController@edit')		->name('city/edit');

// Clients Routes

Route::GET ('clients', 'ClientsController@index')				->name('clients');
Route::GET ('listaC', 'ClientsController@index')				->name('listaC');
Route::GET ('clients/nuevo', 'ClientsController@create')		->name('nuevo');
Route::POST('clients/create','ClientsController@store')			->name('store');
Route::GET ('clients/Modificar/{id}', 'ClientsController@edit')	->name('clients/Modificar');
Route::PUT ('clients/update/{id}', 'ClientsController@update')	->name('update');
//Route::GET ('clients/destroy/{id}', 'ClientsController@destroy')->name('clients/destroy');

// Role_User Routes

Route::GET ('role_user', 'RoleUserController@index')				->name('roleuser');
Route::GET ('role_user.listRU', 'RoleUserController@index')			->name('role_user.listRU');
Route::POST('role_user','RoleUserController@store')					->name('storeRU');
Route::GET ('role_user/create', 'RoleUserController@create')		->name('newRU');
Route::POST('role_user/search', 'RoleUserController@search')		->name('searchRU');
Route::PUT ('role_user/update/{id}', 'RoleUserController@update')	->name('updateRU');
Route::GET ('role_user/destroy/{id}', 'RoleUserController@destroy')	->name('role_user/destroy');
Route::GET ('role_user/edit/{id}', 'RoleUserController@edit')		->name('role_user/edit');

// Permissions Routes

Route::GET ('permission', 'PermissionController@index')				->name('permission');
// Route::GET ('permission.listPr', 'PermissionController@index')		->name('permission.listPr');
Route::POST('permission','PermissionController@store')				->name('storePr');
// Route::GET ('permission/create', 'PermissionController@create')		->name('newPr');
// Route::POST('permission/search', 'PermissionController@search')		->name('searchPr');
// Route::PUT ('permission/update/{id}', 'PermissionController@update')->name('updatePr');
// Route::GET ('permission/destroy/{id}', 'PermissionController@destroy')->name('permission/destroy');
// Route::GET ('permission/edit/{id}', 'PermissionController@edit')	->name('permission/edit');

// Permission_Role Routes

Route::GET ('permission_role', 'PermissionRoleController@index')				->name('permission_role');
Route::GET ('permission_role.listPR', 'PermissionRoleController@index')			->name('permission_role.listPR');
Route::POST('permission_role','PermissionRoleController@store')					->name('storePR');
Route::GET ('permission_role/create', 'PermissionRoleController@create')		->name('newPR');
Route::POST('permission_role/search', 'PermissionRoleController@search')		->name('searchPR');
Route::PUT ('permission_role/update/{id}', 'PermissionRoleController@update')	->name('updatePR');
Route::GET ('permission_role/destroy/{id}', 'PermissionRoleController@destroy') ->name('permission_role/destroy');
Route::GET ('permission_role/edit/{id}', 'PermissionRoleController@edit')		->name('permission_role/edit');

//Role Routes

Route::GET ('role', 'RoleController@index')					->name('role');
Route::GET ('role.listR', 'RoleController@index')			->name('role.listR');
//Route::POST('role','RoleController@store')					->name('storeR');
//Route::GET ('role/create', 'RoleController@create')			->name('newR');
//Route::POST('role/search', 'RoleController@search')			->name('searchR');
// Route::PUT ('role/update/{id}', 'RoleController@update')	->name('updateR');
// Route::GET ('role/destroy/{id}', 'RoleController@destroy')	->name('role/destroy');
//Route::GET ('role/edit/{id}', 'RoleController@edit')		->name('role/edit');

//Dependency Routes

Route::GET ('depend', 'DependencyController@index')					->name('depend');
Route::GET ('depend.listaD', 'DependencyController@index')			->name('listaD');
// Route::POST('depend','DependencyController@store')					->name('storeD');
// Route::GET ('depend/create', 'DependencyController@create')			->name('newD');
//Route::POST('depend/search', 'DependencyController@search')			->name('searchD');
//Route::PUT ('depend/update/{id}', 'DependencyController@update')	->name('updateD');
// Route::GET ('depend/destroy/{id}', 'DependencyController@destroy')	->name('depend/destroy');
//Route::GET ('depend/edit/{id}', 'DependencyController@edit')->name('depend/edit');

//User Routes

Route::GET ('user', 'UserController@index')					->name('user');
Route::GET ('listaU', 'UserController@index')				->name('listaU');
Route::POST('user','UserController@store')					->name('storeU');
Route::GET ('user/create', 'UserController@create')			->name('newU');
Route::PUT ('user/update/{id}', 'UserController@update')	->name('updateU');
Route::GET ('user/Modificar/{id}', 'UserController@edit')	->name('Modificar');
//Route::POST('user/search', 'UserController@search')			->name('searchU');
//Route::GET ('user/destroy/{id}', 'UserController@destroy')	->name('user/destroy');

//Folder Routes

Route::GET ('folder', 'FolderController@index')					->name('folder');
Route::GET ('lista', 'FolderController@index')					->name('lista');
Route::GET ('folder/nuevo', 'FolderController@create')			->name('nuevo');
Route::POST('folder','FolderController@store')					->name('storeF');
Route::GET ('folder/Modificar/{id}', 'FolderController@edit')	->name('folder/Modificar');
Route::PUT ('folder/update/{id}', 'FolderController@update')	->name('update');
//Route::GET ('folder/destroy/{id}', 'FolderController@destroy')	->name('folder/destroy');

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
Route::PUT ('typePerson/update/{idTypePerson}', 'TypePersonController@update')	->name('updateTP');
Route::GET ('typePerson/destroy/{id}', 'TypePersonController@destroy')  ->name('typePerson/destroy');
Route::GET ('typePerson/edit/{id}', 'TypePersonController@edit')		->name('typePerson/edit');
Auth::routes();


//MailE Routes

Route::GET ('maile', 'MaileController@index')				->name('maile');
Route::GET ('maile.listM', 'MaileController@index')			->name('listM');
Route::POST('maile','MaileController@store')				->name('storeM');
Route::GET ('maile/create', 'MaileController@create')		->name('newM');
Route::POST('maile/search', 'MaileController@search')		->name('searchM');
Route::PUT ('maile/update/{idTypePerson}', 'MaileController@update')->name('updateM');
Route::GET ('maile/destroy/{id}', 'MaileController@destroy')->name('maile/destroy');
Route::GET ('maile/edit/{id}', 'MaileController@edit')		->name('maile/edit');



//Front V2.0

// Route::GET('edit', 'MaileController@editM')->name('edit');
// Route::GET('ver', 'MaileController@verM')->name('ver');

// Route::GET('edit', 'ClientsController@editCl')->name('edit');
// Route::GET('ver', 'ClientsController@verCl')->name('ver');

// Route::GET('edit', 'FolderController@editF')->name('edit');
// Route::GET('ver', 'FolderController@verF')->name('ver');

