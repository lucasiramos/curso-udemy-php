<?php

	if(isset($_POST)){
		session_start();
		require_once 'conexion.php';

		$Nombre = isset($_POST['txtNombre']) ? mysqli_real_escape_string($db, $_POST['txtNombre']) : false;
		$Apellido = isset($_POST['txtApellido']) ? mysqli_real_escape_string($db, $_POST['txtApellido']) : false;
		$Email = isset($_POST['txtEmail']) ? mysqli_real_escape_string($db, $_POST['txtEmail']) : false;
		$Password = isset($_POST['txtPassword']) ? mysqli_real_escape_string($db, $_POST['txtPassword']) : false;

		//Array de errores
		$errores = Array();

		if(empty($Nombre) || is_numeric($Nombre) == true || preg_match("/[0-9]/", $Nombre)){
			$errores['txtNombre'] = "El nombre no es válido.";
		}

		if(empty($Apellido) || is_numeric($Apellido) == true || preg_match("/[0-9]/", $Apellido)){
			$errores['txtApellido'] = "El apellido no es válido.";
		}

		if(empty($Email) || filter_var($Email, FILTER_VALIDATE_EMAIL) == false){
			$errores['txtEmail'] = "El email no es válido.";
		}

		if(empty($Password)){
			$errores['txtPassword'] = "El password no es válido.";
		}

		if(count($errores) == 0){
			//Es valido

			//Encripto la contraseña
			$password_segura = password_hash($Password, PASSWORD_BCRYPT, ['cost'=>4]);

			$sql = "INSERT INTO usuarios VALUES (null, '" . $Nombre . "', '" . $Apellido . "', '" . $Email . "', '" . $password_segura . "')";
			$insert = mysqli_query($db, $sql);

			if($insert){
				echo '<h2>Datos insertados correctamente</h2>';
			}else{
				echo '<h2>Error al grabar: ' . mysqli_error($db) . '</h2>';
			}

		}else{
			//Hay errores
			$_SESSION['errores'] = $errores;

			header('Location: principal.php');
		}
	}
	
?>