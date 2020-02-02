<?php

	class Coche{

		//Atributos

		//Publicos: Se acceden en la clase actual, en la clase que hereda esta clase y por fuera de la clase
		public $color;

		//Protegidos: Se acceden en la clase actual y en las clases que heredan esta clase
		protected $modelo;

		//Privados: Se acceden solo en esta clase
		private $velocidad;

		public $marca;
		public $plazas;
		public $caballaje;

		//Constructor
		public function __construct($color, $modelo, $velocidad, $marca, $plazas, $caballaje){
			$this->color = $color;
			$this->modelo = $modelo;
			$this->velocidad = $velocidad;
			$this->marca = $marca;
			$this->plazas = $plazas;
			$this->caballaje = $caballaje;
		}

		//Métodos
		public function getColor(){
			return $this->color;
		}

		public function setColor($color){
			$this->color = $color;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
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

		public function MostrarInformacion(Coche $UnCoche){
			$info = "<h1>Información del coche:</h1>";
			$info .= "<h2>Color: " . $UnCoche->color . "</h2>";
			$info .= "<h2>Modelo: " . $UnCoche->modelo . "</h2>";
			$info .= "<h2>Velocidad: " . $UnCoche->velocidad . "</h2>";

			return $info;
		}

		public function MostrarMiInformacion(){
			$info = "<h1>Información del coche:</h1>";
			$info .= "<h2>Color: " . $this->color . "</h2>";
			$info .= "<h2>Modelo: " . $this->modelo . "</h2>";
			$info .= "<h2>Velocidad: " . $this->velocidad . "</h2>";

			return $info;
		}
	}

?>