<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Carrito de compras en PHP" />

	<title>Tienda de camisetas</title>

	<!--<script src="src/jquery-3.3.1.min.js"></script> -->
	<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
</head>
<body>
	<div id="container">
		<!-- CABECERA -->
		<header id="header">
			<div id="logo">
				<img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta logo" />
				<a href="index.php">Tienda de Camisetas</a>
			</div>
		</header>

		<!-- MENU -->
		<nav id="menu">
			<?php $categorias = Utils::showCategorias(); ?>
			<ul>
				<li><a href="#">Inicio</a></li>
				<?php while($cat = $categorias->fetch_object()): ?>
					<li><a href="#"><?=$cat->nombre?></a></li>
				<?php endwhile; ?>
			</ul>
		</nav>

		<div id="content">