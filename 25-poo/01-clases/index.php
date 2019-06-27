<?php

	class Coche{

		//Atributos
		//public $color, $plazas, $caballaje; //Definición en linea
		public $color = "Rojo";
		public $modelo = "Aventador";
		public $velocidad = 300;
		public $marca = "Ferrari";
		public $plazas = 2;
		public $caballaje = 500;

		//Métodos
		public function getColor(){
			return $this->color;
		}

		public function setColor($color){
			$this->color = $color;
		}

		public function acelerar(){
			$this->velocidad++;
		}

		public function frenar(){
			$this->velocidad--;
		}

		public function getVelocidad(){
			return $this->velocidad;
		}
	}

	//Creo una nueva instancia de clase
	$coche = new Coche();
	var_dump($coche);

	$coche->acelerar();
	$coche->acelerar();
	$coche->acelerar();
	$coche->acelerar();
	$coche->acelerar();
	$coche->frenar();

	echo 'La velocidad del coche es ' . $coche->getVelocidad() . '<br/>';

	$coche->setColor('Amarillo');
	echo 'El color del coche es ' . $coche->getColor() . '<br/><hr/>';

	$coche2 = new Coche();
	var_dump($coche);
	var_dump($coche2);
?>