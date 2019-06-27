<?php

	try{

		//Igual no funca para errores de sintaxis... no se para SQL...
		throw new Exception("Error Processing Request");
		

	}catch (Exception $e){
		echo 'Ha habido un error: ' . $e->getMessage();
	}

?>