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

Route::get('/sucursales', 'Api\SucursalController@index')->name('sucursales');
Route::get('/sucursal/{id}','Api\SucursalController@sucursal')->name('sucursal');
Route::get('/productos',[
						'middleware' => 'cors',
						'uses' => 'Api\ProductoController@index',
						'as' => 'productos'
						]);


Route::get('/producto/{id}', 'Api\ProductoController@producto')->name('producto');