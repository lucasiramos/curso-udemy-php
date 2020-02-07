<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Esto funca
//Route::get('/sucursales', 'Api\SucursalController@index')->name('sucursales');
Route::get('/sucursal/{id}','Api\SucursalController@sucursal')->name('sucursal');
//Route::get('/holamundis','Api\SucursalController@holamundis')->name('holis');
Route::get('/productos',[
						'middleware' => 'cors',
						'uses' => 'Api\ProductoController@index',
						'as' => 'productos'
						]);


Route::get('/producto/{id}', 'Api\ProductoController@producto')->name('producto');


// Rutas abiertas
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');

// Cerradas por Tokens
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::post('/logout', 'AuthController@logout');
    Route::get('/sucursales', 'Api\SucursalController@index')->name('sucursales');
});