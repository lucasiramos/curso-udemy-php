<?php

Route::get('/', 'Inicio\InicioController@inicio')->name('/');

Auth::routes();

////////////////////////////////////////////////////////////////////////
// Pruebas
Route::get('/pruebas/crearusuario', 'Pruebas\PruebasController@crearUsuario')->name('pruebas.crearusuario');
Route::get('/pruebas/adminlte', 'Pruebas\PruebasController@adminlte')->name('pruebas.adminlte');
Route::get('/pruebas/pdf', 'Pruebas\PruebasController@pdf')->name('pruebas.pdf');

Route::group(['middleware' => 'auth'], function () {
    ////////////////////////////////////////////////////////////////////////
	// Administracion
	Route::get('/administracion', 'Administracion\AdministracionController@index')->name('administracion.index');

	////////////////////////////////////////////////////////////////////////
	// Ventas
	Route::get('/ventas', 'Ventas\VentasController@index')->name('ventas.index');
	Route::get('/ventas/sucursales', 'Sucursales\SucursalesController@listarParaVendedores')->name('ventas.sucursales.listar');
	Route::get('/ventas/productos', 'Productos\ProductosController@listarParaVendedores')->name('ventas.productos.listar');
	Route::post('/ventas/productos/ajaxDetalleProducto', 'Productos\ProductosController@ajaxDetalleProducto')->name('ventas.productos.detalle');
});