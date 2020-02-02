<?php

	require_once 'coche.php';

	$Dunita = new coche("Amarillo", "Duna", 80, "Fiat", 5, 100);
	$LaFerrari = new coche("Rojo", "Testarrosa", 280, "Ferrari", 2, 550);

	/*var_dump($Dunita);
	var_dump($LaFerrari);
	echo '<hr/>';

	$LaFerrari->acelerar();
	$LaFerrari->acelerar();
	$LaFerrari->acelerar();
	$LaFerrari->acelerar();
	$LaFerrari->acelerar();

	var_dump($LaFerrari);*/

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	//Visibilidad de propiedades

	/*$Dunita->color = "Verde"; // Puedo, es pública
	
	//$Dunita->modelo = "Palio"; // No puedo, es privada, lo tengo que hacer así:
	$Dunita->setModelo("Palio");

	//Lo mismo con la protegida

	var_dump($Dunita);*/

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	//Tipos
	echo $Dunita->MostrarInformacion($Dunita) . "<hr/>" . $LaFerrari->MostrarMiInformacion();


?>