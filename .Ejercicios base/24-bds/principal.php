<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Una descripción para las búsquedas de Google" />

	<title></title>
<body style="font-family:Arial;">
	<div style="border: 1px solid black;width:300px;padding:20px; margin-top:100px;">
		<?php require_once 'helpers.php'; ?>
		<form action="validar.php" method="POST">
			Nombre <br>
			<input type="text" name="txtNombre">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'txtNombre') : ''; ?>
			<br><br>
			
			Apellido <br>
			<input type="text" name="txtApellido">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'txtApellido') : ''; ?>
			<br><br>
			
			Mail <br>
			<input type="email" name="txtEmail">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'txtEmail') : ''; ?>
			<br><br>

			Contraseña <br>
			<input type="password" name="txtPassword">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'txtPassword') : ''; ?>
			<br><br>
			<input type="submit" name="enviar" value="Enviar">
		</form>
		<?php borrarErrores(); ?>
	</div>
</body>
</html>