<?php

	require_once 'autoload.php';

	/*$usuario = new Usuario("Lucas", "Ramos");
	$entrada = new Usuario("Una entrada", "blablabla");
	$categoria = new Usuario("Una categoria", "pepepe");

	var_dump($usuario);
	var_dump($entrada);
	var_dump($categoria);*/

	use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
	use PanelAdministrador\Usuario as UsuarioAdmin;

	class Principal{
		public $usuario;
		public $categoria;
		public $entrada;

		public function __construct(){
			$this->usuario = new Usuario();
			$this->categoria = new Categoria();
			$this->entrada = new Entrada();
		}
	}

	$principal = new Principal();
	var_dump($principal->usuario);

	$UnAdmin = new UsuarioAdmin();
	var_dump($UnAdmin);

?>