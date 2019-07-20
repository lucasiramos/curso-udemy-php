<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request){
    	$validate = $this->validate($request, [
    		'image_id' => 'integer|required',
    		'content'  => 'string|required'
    	]);

    	$user = \Auth::user();
    	$image_id = $request->input('image_id');
    	$content = $request->input('content');

    	$comment = new Comment();
    	$comment->user_id = $user->id;
    	$comment->image_id = $image_id;
    	$comment->content = $content;

    	$comment->save();

    	return redirect()->route('image.detail',['id' => $image_id])
    					 ->with([
    					 	'message' => 'Comentario cargado correctamente!'
    					 ]);
    }

    public function delete($id){
    	//Consigo los datos del usuario logueado

    	$user = \Auth::user();

    	$comment = Comment::find($id);

    	if($user && ($user->id == $comment->user_id || $comment->image->user_id == $user->id)){
    		$comment->delete();

    		return redirect()->route('image.detail',['id' => $comment->image->id])
    						 ->with([
    						 	'message' => 'Comentario borrado correctamente'
    						 ]);
    	}else{
    		return redirect()->route('image.detail',['id' => $comment->image->id])
    						 ->with([
    						 	'message' => 'No podes borrar este comentario'
    						 ]);
    	}
    }
}
