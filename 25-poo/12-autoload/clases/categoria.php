<?php

	class Categoria{
		private $nombre;
		private $descripcion;

		public function __construct($nombre, $descripcion){
			$this->nombre = $nombre;
			$this->descripcion = $descripcion;
		}
	}

?>