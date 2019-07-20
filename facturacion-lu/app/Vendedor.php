<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendedor extends Authenticatable
{
	use Notifiable;
    protected $table = 'vendedores';

    //Campos rellenables
    protected $fillable = [
        'nombre','apellido','email', 'password'
    ];

    //Campos ocultos (¿por qué se repite el pass?)
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function facturas(){
    	return $this->hasMany('App\Factura');
    }
}
