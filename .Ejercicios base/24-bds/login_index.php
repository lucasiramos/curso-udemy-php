<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Una descripción para las búsquedas de Google" />

	<title></title>
</head>
<body>
	<?php
		require_once 'login_sesion_db.php';
	?>
	<?php if(isset($_SESSION['usuario'])) :?>
		<div style='margin:20px; padding:10px; border: 2px solid black;display:inline-block;'>
			<h3>Bienvenido, <?=$_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos']; ?></h3>
			<a href="login_cerrar_sesion.php">Cerrar sesión</a>
		</div>
	<?php endif; ?>
	<form action="login_validacion.php" method="POST">
		<?php if(isset($_SESSION['error_login'])) :?>
			<div style='margin:8px; padding:5px; border: 2px solid red;display:block;'>
				<h3><?=$_SESSION['error_login']; ?></h3>
			</div>
		<?php endif; ?>

		Email: <br>
		<input type="email" name="email" /><br><br>
		Contraseña: <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="Iniciar sesión">
	</form>
</body>
</html>

