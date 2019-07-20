<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Producto;

class ProductosController extends Controller
{
    public function index(){
        //$images = Image::orderBy('id', 'desc')->paginate(3);
    	$productos = Producto::orderBy('Precio', 'desc')->paginate(3);

    	return view('productos.listado', ['productos' => $productos]);
    }

    public function devuelveImagen($archivo){
    	$file = Storage::disk('productos')->get($archivo);
        return new Response($file, 200);
    }

    public function nuevo(){
    	return view('productos.nuevo');
    }

    public function guardar(Request $request){
    	$validate = $this->validate($request, [
    		'nombre' 		=> 'string|required',
    		'descripcion'  	=> 'string|required',
    		'precio'		=> 'required'
    	]);

    	$nombre = $request->input('nombre');
    	$descripcion = $request->input('descripcion');
    	$precio = $request->input('precio');

    	$imagen = $request->file('imagen'); 

    	$producto = new Producto();

    	$producto->Nombre = $nombre;
    	$producto->Descripcion = $descripcion;
    	$producto->Precio = $precio;

    	if($imagen){
    		$nombre_imagen = time() . '-' . $imagen->getClientOriginalName();
    		Storage::disk('productos')->put($nombre_imagen, File::get($imagen));
    		$producto->Imagen = $nombre_imagen;
		}

    	$producto->save();

    	return redirect()->route('productos')->with([
    		'mensaje-nuevoproducto-ok' => 'El producto fue subido correctamente'
    	]);
    }
}
