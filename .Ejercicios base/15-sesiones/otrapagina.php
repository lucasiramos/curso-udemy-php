<?php

	session_start();

	if(isset($_SESSION['varsesion'])){
		echo 'La variable es ' . $_SESSION['varsesion'];
		echo '<br/><br/><a href="cerrarsesion.php">Cerrar sesión</a>';
	}else{
		echo 'La sesión caducó, <a href="index.php">iniciar la sesión</a>';
	}
?>