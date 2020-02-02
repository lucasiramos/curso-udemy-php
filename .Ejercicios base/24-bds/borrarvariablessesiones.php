<?php

	session_start();

	$_SESSION['NoBorra'] = "Esta información no se borra";

	echo '<h1>' . $_SESSION['NoBorra'] . '</h1>';

	if(isset($_SESSION['PuedeFallar'])){
		echo '<h2>' . $_SESSION['PuedeFallar'] . '</h2>';
	}

	echo '<a href="borrarvariablessesiones_borrar.php">Borrar datos</a> - <a href="borrarvariablessesiones_crear.php">Crear datos</a>'

?>