<?php

	session_start();

	if(empty($_SESSION['counter'])){
		$_SESSION['counter'] = 0;
	}

	if(isset($_GET['parametro'])){
		//var_dump($_GET['parametro']);
		$Parametro = $_GET['parametro'];

		if($_GET['parametro'] == '1'){
			$_SESSION['counter'] = $_SESSION['counter'] + 1;
		}else{
			if($_GET['parametro'] == '0'){ // No me reconoce el parámetro si le mando '0'
				$_SESSION['counter'] = $_SESSION['counter'] - 1;
			}else{
				echo '<h1>Valor incorrecto de parámetro</h1>';
			}
		}
	}else{
		echo '<h1>Defini el parametro!</h1>';
	}

	/*if(isset($_GET['parametro']) && $_GET['parametro'] == 0){
		$_SESSION['counter'] = $_SESSION['counter'] - 1;
	}

	if(isset($_GET['parametro']) && $_GET['parametro'] == 1){
		$_SESSION['counter'] = $_SESSION['counter'] + 1;
	}*/

	echo '<h2>Valor actual de contador: ' . $_SESSION['counter'];

?>