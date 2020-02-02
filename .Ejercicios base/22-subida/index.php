<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Una descripción para las búsquedas de Google" />

	<title></title>
</head>
<body>
	<h1>Subir imagenes</h1>
	<h2>OJO! Recordar configurar el MaxSizeUpload de PHP!!!</h2>

	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="archivo">
		<input type="submit" value="Cargar imagen">
	</form>
</body>
</html>