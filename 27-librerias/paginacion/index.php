<?php

	require_once 'vendor/autoload.php';

	//Conexión db
	$conexion = new mysqli("localhost", "root", "", "db_curso_udemy");
	$conexion->query("SET NAMES 'utf8'");

	//Consulta
	$consulta = $conexion->query("SELECT COUNT(Id) as 'Total' FROM notas");
	$cantElementos = $consulta->fetch_object()->Total;
	$cantElementosPorPagina = 3;

	$pagination = new Zebra_Pagination();

	//Aca le digo la cantidad total de elementos
	$pagination->records($cantElementos);

	//Aca le digo el numero de elementos por página
	$pagination->records_per_page($cantElementosPorPagina);

	$page = $pagination->get_page();

	$empieza_aqui = (($page - 1)*$cantElementosPorPagina);
	$sql = "SELECT * FROM notas LIMIT $empieza_aqui,$cantElementosPorPagina";

	$notas = $conexion->query($sql);

	echo '<link rel="stylesheet" href="vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" />';

	while($nota = $notas->fetch_object()){
		echo "<h1>{$nota->Titulo}</h1>";
		echo "<h2>{$nota->Descripcion}</h2><hr>";
	}

	$pagination->render();
?>