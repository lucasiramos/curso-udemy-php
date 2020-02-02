<?php

	$db = mysqli_connect("localhost","root","", "blog_master");

	if(mysqli_connect_errno()){
		echo "<h1>Error en la conexión a la Base de datos: " . mysqli_connect_error() . "</h1>";
	}else{
		mysqli_query($db, "SET NAMES 'utf8'");
	}

?>