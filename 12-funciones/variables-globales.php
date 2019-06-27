<?php

	$UnaVar = "Luquitas";

	echo $UnaVar . "<br/>";

	function ImprimirVariable(){
		global $UnaVar; //Sin esta línea no puedo usar la variable global, sino da error

		echo 'Dentro de la funcion: ' . $UnaVar . "!";
	}

	ImprimirVariable();
?>