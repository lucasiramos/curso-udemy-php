<?php

namespace App\Http\Controllers\Estilos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstilosController extends Controller
{
	public function index(){
		return view('estilos.index');
	}

	public function otraprueba(){
		return view('estilos.otraprueba');
	}
}
