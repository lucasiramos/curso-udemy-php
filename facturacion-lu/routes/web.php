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

use App\Producto;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/bienvenido', 'BienvenidoController@index')->name('bienvenido');
Route::get('/productos', 'ProductosController@index')->name('productos');
Route::get('/productos/imagen/{filename}','ProductosController@devuelveImagen')->name('productos.imagen');
Route::get('/productos/nuevo', 'ProductosController@nuevo')->name('productos.nuevo');
Route::post('/productos/guardar', 'ProductosController@guardar')->name('productos.guardar');
Route::get('/ventas', 'VentasController@index')->name('ventas');
Route::get('/ventas/nueva', 'VentasController@nueva')->name('ventas.nueva');
Route::post('/ventas/grabaencabezado', 'VentasController@grabaencabezado')->name('ventas.grabaencabezado');
Route::get('/ventas/items/{idfactura}', 'VentasController@items')->name('ventas.items');
Route::post('/ventas/grabaitem', 'VentasController@grabaitem')->name('ventas.grabaitem');
Route::post('/ventas/cerrarfactura', 'VentasController@cerrarfactura')->name('ventas.cerrarfactura');
Route::get('/json', 'JsonController@index')->name('json.index');
Route::get('/json/{idvendedor}', 'JsonController@traevendendor')->name('json.vendedor');