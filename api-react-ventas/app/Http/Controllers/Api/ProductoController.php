<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Producto;

class ProductoController extends Controller
{
    public function index(){
		$productos = Producto::all();

		$devuelvo = [];

		if(count($productos) >= 1){
			foreach ($productos as $producto) {
				$unProducto = [
					'id' => $producto->id, 
					'nombre' => $producto->nombre, 
					'descripcion' => $producto->descripcion,
					'imagen' => config('global.URL') . '/' . $producto->imagen,
					'categoria' => $producto->categoria,
					'marca' => $producto->marca,
					'precio' => $producto->precio
				];

				array_push ($devuelvo, $unProducto);
			}
		}
		
		return $devuelvo;
	}

	public function producto($pIdProducto){
		$productoBuscado = Producto::where('id', $pIdProducto)->get();

		$devuelvo = [];

		if(count($productoBuscado) >= 1){
			foreach ($productoBuscado as $producto) {
				$productoEncontrado = [
					'id' => $producto->id, 
					'nombre' => $producto->nombre, 
					'descripcion' => $producto->descripcion,
					'imagen' => config('global.URL') . '/' . $producto->imagen,
					'categoria' => $producto->categoria,
					'marca' => $producto->marca,
					'precio' => $producto->precio
				];

				array_push ($devuelvo, $productoEncontrado);
			}

			return $devuelvo;
		}else{
			return response()->json(['error' => 'Producto no encontrado'], 404);
		}
	}
}
