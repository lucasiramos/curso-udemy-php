<?php

	$archivo = $_FILES['archivo'];
	$nombre = $archivo['name'];
	$tipo = $archivo['type'];

	if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif'){
		if(!is_dir('imagenes')){
			mkdir('imagenes',0777);
		}

		move_uploaded_file($archivo['tmp_name'], 'imagenes/' . $nombre);

		header("Refresh: 3; URL=index.php");
		echo 'Imagen subida correctamente';
	}else{
		header("Refresh: 3; URL=index.php");
		echo 'Tenes que subir un archivo de imagen';
	}

?>