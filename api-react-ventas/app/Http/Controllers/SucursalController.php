<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function index(){
		$unValorGeneradoEnPhp = "Hola que tal, estoy en Php";

    	return view('sucursales.listado', ['valorServer' => $unValorGeneradoEnPhp, 'otroValor' => 'Lalala otro valor']);
    }
}
