<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Sucursal;

class SucursalController extends Controller
{
	public function index(){
		$sucursales = Sucursal::all();

		$devuelvo = [];

		if(count($sucursales) >= 1){
			foreach ($sucursales as $sucursal) {
				$unaSucursal = [
					'id' 		=> $sucursal->id, 
					'nombre' 	=> $sucursal->nombre, 
					'latitud' 	=> $sucursal->latitud, 
					'longitud' 	=> $sucursal->longitud
				];

				array_push ($devuelvo, $unaSucursal);
			}
		}

		return $devuelvo;
	}

	public function sucursal($idsucursal){
		$sucursalSeleccionada = Sucursal::where('id', $idsucursal)->get();

		$devuelvo = [];

		if(count($sucursalSeleccionada) >= 1){
			foreach ($sucursalSeleccionada as $sucursal) {
				$unaSucursal = [
					'id' 		=> $sucursal->id, 
					'nombre' 	=> $sucursal->nombre, 
					'latitud' 	=> $sucursal->latitud, 
					'longitud' 	=> $sucursal->longitud
				];

				array_push ($devuelvo, $unaSucursal);
			}

			return $devuelvo;
		}else{
			return response()->json(['error' => 'Sucursal no encontrada'], 404);
		}
	}
}
