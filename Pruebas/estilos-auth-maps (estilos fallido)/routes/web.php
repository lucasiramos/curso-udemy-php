<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estilos/prueba','Estilos\EstilosController@index')->name('estilos.index');
Route::get('/estilos/otraprueba','Estilos\EstilosController@otraprueba')->name('estilos.otraprueba');
Route::get('/maps','Maps\MapsController@index')->name('maps.index');
Route::get('/maps/parse','Maps\MapsController@parse')->name('maps.parse');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
