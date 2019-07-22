<?php



Route::get('/', function () {
	return view('welcome');
});

Route::get('/consumir','GuzzleController@consumir')->name('consumir');
Route::get('/posts/{id}','GuzzleController@post')->name('unpost');
Route::get('/cors','GuzzleController@cors')->name('cors');