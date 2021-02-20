<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/estilos', 'Estilos\EstilosController@index')->name('estilos.index');
Route::get('/maps', 'Maps\MapsController@index')->name('maps.index');
Route::get('/maps/parse','Maps\MapsController@parse')->name('maps.parse');

Route::get('/upload', 'Upload\UploadController@upload')->name('upload.index');