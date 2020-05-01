<?php

namespace App\Http\Controllers\Ventas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index(){
    	$nombre = auth()->user()->name;
    	
        return view('ventas.index', [
            'nombreUsuario' => $nombre
        ]);
    }
}
