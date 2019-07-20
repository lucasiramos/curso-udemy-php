<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    public function clientes(){
    	return $this->hasMany('App\Cliente');
    }
}
