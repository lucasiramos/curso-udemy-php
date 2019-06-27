<?php

	/*$archivo = fopen("notas.txt","a+"); // a+ es usado para escribir en el archivo

	while(!feof($archivo)){
		$contenido = fgets($archivo);
		echo $contenido . '<br/>';
	}

	fwrite($archivo, '___texto-agregado');

	fclose($archivo);*/

	//Copiar archivos
	//copy('notas.txt','notas_copiado.txt') or die("Sasasasasa sancor");

	//Renombrar archivos
	//rename('notas_copiado.txt','ren.txt');

	//Borrar un archivo
	//unlink('ren.txt');

	/* TODO LO COMENTADO FUNCA! */

	if(file_exists('notas asdadasd.txt')){
		echo 'El archivo existe';
	}else{
		echo 'El archivo NO existe';
	}
?>