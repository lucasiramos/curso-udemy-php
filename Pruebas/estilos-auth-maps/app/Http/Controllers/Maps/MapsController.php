<?php

namespace App\Http\Controllers\Maps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index(){
		return view('maps.index');
	}
}
