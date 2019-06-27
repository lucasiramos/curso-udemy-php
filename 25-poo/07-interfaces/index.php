<?php

	interface Ordenador{
		public function encender();
		public function apagar();
		public function reiniciar();
	}

	class iMac implements Ordenador{
		private $modelo;

		function getModelo(){
			return $this->modelo;
		}

		function setModelo($modelo){
			$this->modelo = $modelo;
		}

		//Si yo no armo estas funciones da error, porque tienen que implementarse según dice la interfaz
		function encender(){
			return 'Encendido';
		}

		function apagar(){
			return 'Apagando';
		}

		function reiniciar(){
			return 'Reiniciando';
		}
	}

	$UnaCompu = new iMac();
	$UnaCompu->setModelo("MacBook Pro");
	var_dump($UnaCompu);

?>