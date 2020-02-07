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
	return view('welcome');
});

// Con este comando devuelvo la vista directamente, es decir, estática, sin procesamiento de controlador
/*Route::get('/sucursales', function () {
	return view('sucursales.listado');
});*/
Route::get('/sucursales', 'SucursalController@index')->name('sucursales');

Route::get('/holamundis','SucursalController@holaworld')->name('holis');


///////////////////////////////////////////////////////////////////

Route::get('/test', function () {
	return view('test');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
