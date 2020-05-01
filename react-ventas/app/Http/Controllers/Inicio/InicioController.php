<?php

namespace App\Http\Controllers\Inicio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function inicio(){
		if (Auth::user()) {
	    	if(Auth::user()->admin == '1'){
	    		//Es admin
	    		return redirect()->route('administracion.index');
	    	}else{
	    		//No es admin
	    		return redirect()->route('ventas.index');
	    	}
	    }else{
	    	// Si no está logueado lo mando al inicio para que loguee
	    	return view('inicio');
	    }
    }
}
