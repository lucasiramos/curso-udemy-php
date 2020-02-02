<?php

	require_once 'clases.php';

	$persona = new Persona();
	$persona->setNombre("Lucas");
	$persona->setApellidos("Ramos");

	var_dump($persona);

	echo '<hr/>';

	$programador = new Informatico();
	$programador->setNombre("Luquitas");
	$programador->setApellidos("Schaab");
	//$programador->setLenguajes("Sabe todos");

	var_dump($programador);

	echo '<hr/>';

	$CarlitosFerreyra = new TecnicoRedes();
	$CarlitosFerreyra->setNombre("Carlos");
	$CarlitosFerreyra->setApellidos("Ferreyra");

	var_dump($CarlitosFerreyra);

?>