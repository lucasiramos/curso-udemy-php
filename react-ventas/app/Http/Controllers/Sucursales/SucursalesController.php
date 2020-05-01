<?php

namespace App\Http\Controllers\Sucursales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sucursal;

class SucursalesController extends Controller
{
	public function listarParaVendedores(){
		$sucursales = Sucursal::orderBy('id', 'asc')->paginate(3);
		$nombre = auth()->user()->name;
		
		return view('ventas.sucursales',[
			'sucursales' => $sucursales,
			'nombreUsuario' => $nombre
		]);
	}
}
