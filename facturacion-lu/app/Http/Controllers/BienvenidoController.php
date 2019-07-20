<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidoController extends Controller
{
    public function index(){
    	$user = \Auth::user();
    	return view('bienvenido', ['user' => $user]);
    }
}
