<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Una descripción para las búsquedas de Google" />

	<title></title>
</head>
<body>
	<!-- GET es lo mismo que POST pero se ven los datos por QueryString -->
	<form method="POST" action="paginarecibe.php">
		<table>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre"/></td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><input type="text" name="apellido"/></td>
			</tr>
		</table>
		<input type="submit" value="Enviar datos" />
	</form>
</body>
</html>