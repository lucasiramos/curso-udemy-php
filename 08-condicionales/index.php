<?php

	/*

	== Compara si el valor es igual
	!== No identico

	*/

	echo '1 <br/>';
	echo '2 <br/>';

	goto marca;
	echo '3';
	echo '4';
	echo '5';
	echo '6';

	marca:
	echo '7 <br/><br/>';

	$vNumero = 0;

	if(isset($_GET['numero'])){
		$vNumero = (int)$_GET['numero'];
	}else{
		echo 'No hay parametro numero';
	}

	var_dump($vNumero);

?>