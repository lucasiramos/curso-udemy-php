<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LucasController extends Controller
{
    public function index(){
    	return view('lucas.index');
    }
}
