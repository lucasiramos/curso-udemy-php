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

Auth::routes();

Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/primero', 'HomeController@primero')->name('primero');
Route::get('/segundo', 'HomeController@segundo')->name('segundo');
Route::get('/tercero', 'HomeController@tercero')->name('tercero');

Route::get('/tyc', 'Controller@tyc')->name('tyc');
Route::get('/pp', 'Controller@pp')->name('pp');

// Ruta para que Facebook borre la información a través del callback
Route::post('/fb-login/gdpr/data-deletion-request-callback', 'Controller@borrar_datos_face')->name('borrar_datos_face');

// Ruta para que el usuario chequee si sus datos fueron borrados
Route::get('/fb-login/gdpr/data-deletion-check/{id}', 'Controller@chequear_eliminacion_face')->name('chequear_eliminacion_face');