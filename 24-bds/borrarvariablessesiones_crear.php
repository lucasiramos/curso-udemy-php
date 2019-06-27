<?php

	session_start();

	if(!isset($_SESSION['PuedeFallar'])){
		$_SESSION['PuedeFallar'] = "Datos cargados";
	}

	header("Location: borrarvariablessesiones.php");
?>