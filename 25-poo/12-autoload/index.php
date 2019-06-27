<?php

	require_once 'autoload.php';

	$usuario = new Usuario("Lucas", "Ramos");
	$entrada = new Usuario("Una entrada", "blablabla");
	$categoria = new Usuario("Una categoria", "pepepe");

	var_dump($usuario);
	var_dump($entrada);
	var_dump($categoria);

?>