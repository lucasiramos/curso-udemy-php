<?php

namespace App\Http\Controllers\Maps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index(){
		return view('maps.index');
	}

	public function parse(){
		header('Content-Type: application/vnd.google-earth.kml+xml kml');
		header('Content-Disposition: attachment; filename="test.kml"');

		// Cargo el archivo en blanco
		$deptos = simplexml_load_file('http://localhost:4741/curso-udemy-php/Pruebas/estilos-auth-maps/public/kmls/42.kml');

		// Hago las modificaciones en el atributo de color
		foreach ($deptos->xpath('/kml/Document/Folder/Placemark[@id="351"]') as $atreuco){
			$atreuco->styleUrl = "#color3";
			$atreuco->description = "<b>Clickeaste acá</b><br><br>Valor: Bueno<br><a href='#'>Más información</a>";
		}

		// Con esto lo devuelvo
		echo($deptos->asXml());
	}
}
