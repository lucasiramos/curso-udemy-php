<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{
	public function index(){
		$nombre = auth()->user()->name;

		return view('admin.index', [
            'nombreUsuario' => $nombre
        ]);
	}
}
