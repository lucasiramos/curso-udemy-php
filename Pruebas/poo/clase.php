<?php

class UnaClasecita{
	public $propiedad;

	public function __construct(){
		$this->propiedad = "Hola que tal";
	}

	public function getUnaPropi(){
		return $this->propiedad;
	}

	public function sumar($num1, $num2){
		return $num1 + $num2;
	}
}

?>