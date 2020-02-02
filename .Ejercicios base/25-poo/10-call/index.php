<?php

	class Persona{
		private $nombre;

		public function __call($name, $arguments){
			var_dump($arguments);
			return 'Este método no existe ' . $name;
		}
	}

	$Usuario = new Persona();
	echo $Usuario->MetodoInexistente();

?>