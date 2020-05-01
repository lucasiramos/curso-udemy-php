<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;
use App\ProductosImagenes;

class ProductosController extends Controller
{
	public function listarParaVendedores(){
		$productos = Producto::orderBy('id', 'asc')->paginate(6);
		$cantProductos = Producto::count();
		$nombre = auth()->user()->name;
		
		return view('ventas.productos',[
			'productos' => $productos,
			'nombreUsuario' => $nombre,
			'cantProductos' => $cantProductos
		]);
	}

	public function ajaxDetalleProducto(Request $request){
		$idProducto = $request->get('idProducto');
		
		$productoEncontrado = Producto::find($idProducto);
		$producto = [
			'nombre' => $productoEncontrado->nombre,
			'descripcion' => $productoEncontrado->descripcion,
			'precio' => $productoEncontrado->precio,
			'categoria' => $productoEncontrado->categoria->nombre,
			'marca' => $productoEncontrado->marca->nombre
		];

		$imagenes = [];
		$imagenesProductoEncontrado = $productoEncontrado->imagenes;

		foreach ($imagenesProductoEncontrado as $imagen) {
			array_push ($imagenes, $imagen->url);
		}

		$producto['imagenes'] = $imagenes;

		return response()->json([
			'status' => 'ok',
			'data' => $producto
		], 200);
	}
}