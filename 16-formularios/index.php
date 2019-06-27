<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Una descripción para las búsquedas de Google" />

	<title></title>
</head>
<body>	
	<h1>Formulario</h1>
	<form action="validar.php" method="POST">
		<?php
			session_start();

			if(isset($_SESSION['error'])){
				if($_SESSION['error'] == 'Nombre'){
					echo '<p style="color:red;">Debe completar el nombre</p>';
				}else{
					if($_SESSION['error'] == 'Apellido'){
						echo '<p style="color:red;">Debe completar el apellido</p>';
					}else{
						$_SESSION['error'] = 'No';
					}	
				}
			}
		?>
		<p>Nombre</p>
		<input type="text" name="txtNombre" />
		<p>Descripción</p>
		<textarea name="txtDescripcion"></textarea><br/><br/>
		<input type="submit" value="Enviar datos" />
	</form>
</body>
</html>