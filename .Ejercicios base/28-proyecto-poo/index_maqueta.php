<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Carrito de compras en PHP" />

	<title>Tienda de camisetas</title>

	<!--<script src="src/jquery-3.3.1.min.js"></script> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body>
	<div id="container">
		<!-- CABECERA -->
		<header id="header">
			<div id="logo">
				<img src="assets/img/camiseta.png" alt="Camiseta logo" />
				<a href="index.php">Tienda de Camisetas</a>
			</div>
		</header>

		<!-- MENU -->
		<nav id="menu">
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Categoria 2</a></li>
				<li><a href="#">Categoria 3</a></li>
				<li><a href="#">Categoria 4</a></li>
				<li><a href="#">Categoria 5</a></li>
				<li><a href="#">Categoria 6</a></li>
			</ul>
		</nav>

		<div id="content">
			<!-- BARRA LATERAL -->
			<aside id="lateral">
				<div id="login" class="block_aside">
					<h3>Entrar a la web</h3>
					<form action="#" method="post">
						<label for="email">Email</label>
						<input type="email" name="email" />
						<label for="password">Contraseña</label>
						<input type="password" name="password" />
						<input type="submit" value="Enviar" />
					</form>

					<ul>
						<li><a href="#">Mis pedidos</a></li>
						<li><a href="#">Gestionar pedidos</a></li>
						<li><a href="#">Gestionar categorías</a></li>
					</ul>
				</div>
			</aside>

			<!-- CONTENIDO CENTRAL -->
			<div id="central">
				<h1>Productos destacados</h1>
				<div class="product">
					<img src="assets/img/camiseta.png" />
					<h2>Camiseta azul ancha</h2>
					<p>30 euros</p>
					<a href="#" class="button">Comprar</a>
				</div>
				<div class="product">
					<img src="assets/img/camiseta.png" />
					<h2>Camiseta azul ancha</h2>
					<p>30 euros</p>
					<a href="#" class="button">Comprar</a>
				</div>
				<div class="product">
					<img src="assets/img/camiseta.png" />
					<h2>Camiseta azul ancha</h2>
					<p>30 euros</p>
					<a href="#" class="button">Comprar</a>
				</div>
			</div>
		</div>
		
		<!-- FOOTER -->
		<footer id="footer">
			<p>Desarrollado por Lucas Ramos WEB &copy; <?=date('Y')?></p>
		</footer>
	</div>
</body>
</html>
