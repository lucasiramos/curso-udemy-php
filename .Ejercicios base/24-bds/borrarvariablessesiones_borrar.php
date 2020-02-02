<?php

	session_start();

	if(isset($_SESSION['PuedeFallar'])){
		//unset($_SESSION['PuedeFallar']);
		$_SESSION['PuedeFallar'] = null;

		//Funciona de las dos maneras!
	}

	header("Location: borrarvariablessesiones.php");

?>