<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas';

    public function categoria(){
		return $this->belongsTo('App\Producto', 'idproducto');
	}
}
