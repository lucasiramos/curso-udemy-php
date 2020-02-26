<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas abiertas
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');

Route::get('/productos', 'Api\ProductoController@index')->name('productos');

// Cerradas por Tokens
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::post('/logout', 'AuthController@logout');
    Route::get('/sucursales', 'Api\SucursalController@index')->name('sucursales');
});

////////////////////////////////////////////////////////////////////////////////////
// No tengo las rutas asignadas con CORS, y la App React la toma bien
// Ver si en producción funca igual.
// Rutas para CORS:
/*
// Habilitadas por cors
Route::get('/productos',[
	'middleware' => 'cors',
	'uses' => 'Api\ProductoController@index',
	'as' => 'productos'
]);*/