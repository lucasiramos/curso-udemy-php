<?php

	//No puedo instanciar la clase abstracta, solo es para hacer un molde para una clase hija
	abstract class Ordenador{
		public $encendido;

		//La funcionalidad la defino en la clase hija
		abstract public function encender();

		public function apagar(){
			$this->encendido = false;
		}
	}

	class PcAsus extends Ordenador{
		public $software;

		public function arrancarSoftware(){
			$this->software = true;
		}

		//Aca defino el método abstracto
		public function encender(){
			$this->encendido = true;
		}
	}

	$ordenador = new PcAsus();

	$ordenador->arrancarSoftware();
	$ordenador->encender();

	var_dump($ordenador);

	$ordenador->apagar();

	var_dump($ordenador);

?>