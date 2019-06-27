<?php

	//Inicio la sesión
	session_start();

	$_SESSION['varsesion'] = "Luquitas";

	echo 'Variable creada! <a href="otrapagina.php">Ver variable en otra pagina</a>';

?>