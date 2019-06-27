<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReactController extends Controller
{
    public function index($ejemplo = ''){
        return view('react', [
            'ejemplo' => $ejemplo
        ]);
    }
}
