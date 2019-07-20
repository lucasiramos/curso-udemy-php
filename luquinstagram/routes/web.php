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

use App\Image;

Route::get('/', function () {

	/*$images = Image::all();

	foreach($images as $image){
    	echo $image->image_path . "<br />";
    	echo $image->description . "<br />";
    	echo $image->user->name . " " . $image->user->surname;

    	if(count($image->comments) >= 1){
	    	echo "<br /><h4>Comentarios:</h4>";

	    	foreach($image->comments as $comment){
	    		echo $comment->user->name . " " . $comment->user->surname . ": ";
				echo $comment->content . "<br/>";
			}
		}

		echo "<br/>Likes: " . count($image->likes);
    	echo "<hr />";
  	}

	die();*/

    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/configuracion','UserController@config')->name('config');
Route::post('/user/update','UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}','UserController@getImage')->name('user.avatar');
Route::get('/upload','ImageController@create')->name('image.create');
Route::post('/image/save','ImageController@save')->name('image.save');
Route::get('/image/file/{filename}','ImageController@getImage')->name('image.file');
Route::get('/imagen/{id}','ImageController@detail')->name('image.detail');
Route::post('/comments/save','CommentsController@save')->name('comments.save');
Route::get('/comments/delete/{id}','CommentsController@delete')->name('comments.delete');
Route::get('/like/{image_id}','LikeController@like')->name('like.save');
Route::get('/dislike/{image_id}','LikeController@dislike')->name('like.delete');
Route::get('/likes','LikeController@likes')->name('likes');
Route::get('/profile/{id}','UserController@profile')->name('profile');
Route::get('/image/delete/{id}','ImageController@delete')->name('image.delete');
Route::get('/image/editar/{id}','ImageController@edit')->name('image.edit');
Route::post('/image/update','ImageController@update')->name('image.update');
Route::get('/gente','UserController@index')->name('user.index');


//Me quede sin internet en BK, aca van mis pruebas...
Route::get('/pruebaslucas','LucasController@index')->name('indexlu');