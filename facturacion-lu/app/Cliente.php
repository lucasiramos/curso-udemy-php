<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    public function facturas(){
    	return $this->hasMany('App\Factura');
    }

    public function ciudad(){
    	return $this->belongsTo('App\Ciudad', 'IdCiudad');
    }
}
