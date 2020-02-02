<?php

	session_start();
	$_SESSION['error'] = 'No';

	//if(isset(&_POST)){ // Valida si mandó datos... Probar!

	if(empty($_POST['txtNombre'])){
		$_SESSION['error'] = 'Nombre';
		header("Location:index.php");
	}else{
		if(empty($_POST['txtDescripcion'])){
			$_SESSION['error'] = 'Apellido';
			header("Location:index.php");
		}else{
			$_SESSION['error'] = 'No';
			$_SESSION['txtNombre'] = $_POST['txtNombre'];
			$_SESSION['txtDescripcion'] = $_POST['txtDescripcion'];
			header("Location:guardar.php");
		}	
	}
?>