<?php

	
	/* function Uno(){
		return "1";
	}

	function Dos(){
		return "2";
	}

	function Tres(){
		return "3";
	}

	$NumFx = "Dos";

	echo "<h1>".$NumFx()."</h1>";
	echo $NumFx(); */
	function consultarApi(){
		echo '2<br/>';
		$devuelvo = "Hola que tal";
		echo '3<br/>';
		return $devuelvo;
	}

	echo 'Arrancando <br/>';
	$llamo = consultarApi();
	echo $llamo;
?>