<?php

	class Usuario{
		public $nombre;
		public $email;

		public function __construct(){
			$this->nombre = "Luquitas";
			echo "Creando el objeto </br>";
		}

		public function __destruct(){
			echo "Objeto destruido</br>";
		}

		//Si no creo esta funcion, al querer imprimir el objeto con echo me da error, acá lo convierto a String y puedo usar sus métodos, llamar a funciones, etc.
		
		public function __toString(){
			return "El usuario creado es " . $this->nombre . '</br>';
		}
	}

	$usuario = new Usuario();
	echo $usuario;

	for($i = 0; $i < 10; $i++){
		echo $i . '<br/>';
	}

?>