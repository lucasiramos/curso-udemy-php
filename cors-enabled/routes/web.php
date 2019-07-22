<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/hello',[
		'middleware' => 'cors',
		'uses' => 'ApiController@hello',
		'as' => 'api.hello'
	]);