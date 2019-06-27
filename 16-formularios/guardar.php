<?php

	session_start();
	echo 'Datos guardados: ' . $_SESSION['txtNombre'] . ' ' . $_SESSION['txtDescripcion']; 

?>