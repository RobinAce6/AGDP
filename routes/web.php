<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');

Route::GET ('user', 'UserController@index')		->name('users');
Route::GET('profile', 'UserController@profile')->name('profile');

Route::GET ('clients', 'ClientController@index')		->name('clients');
Route::GET ('proyect', 'ProyectController@index')		->name('proyect');

Route::GET ('depend', 'DependencyController@index')	->name('depend');


Route::GET ('others', 'UserController@others')		->name('others');



Route::group(['prefix' => 'ajax/'], function () {
	Route::post('ciudad/{id}','AjaxController@ciudad');
	Route::get('ciudad/{id}','AjaxController@ciudad');
	Route::post('proyecto/{id}','AjaxController@proyecto');
	Route::get('proyecto/{id}','AjaxController@proyecto');
	Route::post('persona/{id}','AjaxController@persona');
	Route::get('persona/{id}','AjaxController@persona');
});	




Route::group(['prefix' => 'users/'], function () {
	Route::GET ('create', 'UserController@create')->name('newU');
	Route::post ('store', 'UserController@store')->name('storeU');
});	

Route::group(['prefix' => 'clients/'], function () {
	Route::GET ('create', 'ClientController@create')->name('newCL');
	Route::POST ('store', 'ClientController@store')->name('storeCl');
	Route::PUT ('update/{id}', 'ClientsController@update')->name('update');
});	

Route::group(['prefix' => 'proyect/'], function () {
	Route::GET ('create', 'ProyectController@create')->name('storeF');
	Route::POST ('store', 'ProyectController@store')->name('storeF');
	Route::POST ('update/{id}', 'ProyectController@update')->name('updateF');
});	

Route::group(['prefix' => 'depend/'], function () {
	Route::POST ('store', 'DependencyController@store')->name('storeD');
});	


//StorageWays Routes

Route::GET ('storagew', 'StorageWayController@index')				->name('storagew');
Route::group(['prefix' => 'storagew/'], function () {
	Route::GET ('storagew.listSW', 'StorageWayController@index')		->name('storagew.listSW');
	Route::POST('store','StorageWayController@store')				->name('storeSW');
	Route::GET ('create', 'StorageWayController@create')		->name('newSW');
	Route::POST('search', 'StorageWayController@search')		->name('searchSW');
	Route::GET ('update/{id}', 'StorageWayController@update')	->name('updateSW');
	Route::POST ('update/{id}', 'StorageWayController@update')	->name('updateSW');
	Route::PUT ('update/{id}', 'StorageWayController@update')	->name('updateSW');
	Route::GET ('destroy/{id}', 'StorageWayController@destroy')->name('storagew/destroy');
	Route::GET ('edit/{id}', 'StorageWayController@edit')		->name('storagew/edit');
});	

Route::GET ('maile', 'MailController@index')->name('maile');
Route::group(['prefix' => 'maile/'], function () {
	Route::GET ('maile.listM', 'MailController@index')			->name('maile.listM');
	Route::POST('store','MailController@store')				->name('storeM');
	Route::GET ('create', 'MailController@create')		->name('newM');
	Route::POST('search', 'MailController@search')		->name('searchM');
	Route::PUT ('update/{idTypePerson}', 'MailController@update')->name('updateTP');
	Route::GET ('destroy/{id}', 'MailController@destroy')->name('maile/destroy');
	Route::GET ('edit/{id}', 'MailController@edit')		->name('maile/edit');
	Route::post('guardar', 'MailController@save');
});	












