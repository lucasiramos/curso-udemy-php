<?php

	if(!is_dir('carpeta')){
		mkdir('carpeta', 0777);
		echo 'Carpeta creada';
	}else{
		echo 'Ya existe la carpeta';
	}

	echo '<hr/>';

	if($gestor = opendir('./otra')){
		while(($archivo = readdir($gestor)) != false){
			if($archivo != '.' && $archivo != '..'){
				echo $archivo . '<br/>';
			}
		}
	}

?>