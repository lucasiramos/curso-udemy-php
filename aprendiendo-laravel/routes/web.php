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
    // return view('welcome'); // Esto devuelve una vista, pero yo podría hacer un echo
    echo "<h1>Hola mundo!</h1>";
});

Route::get('/peliculas/{pagina?}','PeliculaController@index');
Route::get('/detalle/{year?}',[
	'middleware' => 'testyear',
	'uses' => 'PeliculaController@detalle',
	'as' => 'detalle.pelicula'
	]);
Route::get('/redirigir','PeliculaController@redirigir');
Route::resource('usuario','UsuarioController');
Route::get('/formulario','PeliculaController@formulario');
Route::post('/recibir','PeliculaController@recibir');

Route::group(['prefix'=>'frutas'], function(){
	Route::get('index', 'FrutaController@index');
	Route::get('detail/{id}', 'FrutaController@detail');
	Route::get('crear', 'FrutaController@create');
	Route::post('save', 'FrutaController@save');
	Route::get('delete/{id}', 'FrutaController@delete');
	Route::get('editar/{id}', 'FrutaController@edit');
	Route::post('update', 'FrutaController@update');
});

Route::get('/react/{ejemplo?}',[
	'middleware' => 'cors',
	'uses' => 'ReactController@index',
	'as' => 'index.react'
	]);

/*Route::get('/mostrar-fecha', function () {
	$titulo = "Este sería un título pasado";
	// el array sirve para pasarle parámetros a la vista
	return view('mostrar-fecha', array(
		'titulo' => $titulo
	));
});

//Título es un parámetro obligatorio si tiene este formato '/pelicula/{titulo}' (da un 404 si no se lo pasas)
Route::get('/pelicula/{titulo}/{year?}', function ($titulo = 'No se eligió película', $year = 2019) {
	return view('pelicula', array(
		'titulo' => $titulo,
		'year' => $year
	));
})->where(array(
	'titulo' => '[a-zA-Z]+',
	'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function(){
	$titulo = 'Listado de películas';
	$listado = ['Batman', 'Superman', 'Gran Torino'];
	return view('peliculas.listado')
		->with('titulo', $titulo)
		->with('listado', $listado);
});

Route::get('/pagina-generica', function(){
	return view('pagina');
});*/

