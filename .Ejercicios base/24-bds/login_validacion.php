<?php
	require_once 'login_sesion_db.php';

	if(isset($_POST)){
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if(isset($_SESSION['error_login'])){
			//session_unset($_SESSION['error_login']);
			unset($_SESSION['error_login']);
		}

		//Traigo el registro que se corresponde con el mail, para comparar la contraseña
		$sql = "SELECT * FROM usuarios WHERE email = '" . $email . "'";
		$login = mysqli_query($db, $sql);

		if($login && mysqli_num_rows($login) == 1){
			$usuario = mysqli_fetch_assoc($login);

			//Compruebo la contraseña
			$verify = password_verify($password, $usuario['password']);

			if($verify){
				//Guardo los datos de la sesión del usuario
				$_SESSION['usuario'] = $usuario;

					
			}else{
				//Las contraseñas no coinciden
				$_SESSION['error_login'] = "La contraseña es incorrecta";
			}
		}else{
			//No se encontro el usuario
			$_SESSION['error_login'] = "El mail no se encuentra";
		}
	}else{
		$_SESSION['error_login'] = "No se encontraron los datos!";
	}
	echo 'ERROR LOGIN:';
	if(isset($_SESSION['error_login'])){
		var_dump($_SESSION['error_login']);	
	}else{
		echo '<h1>Login correcto</h1>';
	}
	
	header('Location: login_index.php');
?>