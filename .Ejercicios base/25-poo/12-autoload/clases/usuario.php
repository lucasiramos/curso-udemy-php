<?php

	class Usuario{
		private $nombre;
		private $apellido;

		public function __construct($nombre, $apellido){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
		}
	}

?>