<?php

namespace App\Http\Controllers;

use App\MisClases\Posts;
use Illuminate\Http\Request;

class GuzzleController extends Controller
{
	protected $posts;

	public function __construct(Posts $posts){
		$this->posts = $posts;
	}

    public function consumir(){
    	$posts = $this->posts->all();

		return view('posts.index', ['posts' => $posts]);
		//return view('posts.index', compact('posts'));
    }

    public function post($id){
    	$post = $this->posts->find($id);

		return view('posts.show', ['post' => $post]);
    }

    public function cors(){
    	return view('cors.index');
    }
}
