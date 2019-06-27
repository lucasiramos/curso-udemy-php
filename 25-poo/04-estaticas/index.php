<?php

	require_once 'configuracion.php';

	//Las clases estaticas no requieren instanciación

	Configuracion::setColor("Azul");
	Configuracion::setEntorno("localhost");
	Configuracion::setNewsletter(true);

	echo Configuracion::getColor() . '<br/>';
	echo Configuracion::getEntorno() . '<br/>';
	echo Configuracion::getNewsletter() . '<br/>';

	//Si bien puedo instanciarlas solo se refieren a la única clase estática
	$configuracion = new Configuracion();
	$configuracion::$color = "rojo";
	echo 'Color instancia: ' . $configuracion::getColor();
	echo '<br/>Color Clase: ' . Configuracion::getColor();



?>