<?php

	// Ubicaciòn de la base de datos
	// Usuario
	// Contraseña
	// Nombre de la base de datos
	// Puerto [OPCIONAL]
	// Socket [OPCIONAL]

	$conexion = mysqli_connect("localhost","root","", "db_curso_udemy");

	//Compruebo si la conexión es correcta
	if(mysqli_connect_errno()){
		echo "<h1>Error en la conexión a la Base de datos: " . mysqli_connect_error() . "</h1>";
	}else{
		echo "<h1>Conexión Ok</h1>";
	}

	//Primero se debe configurar la Db para que no haya problemas con tildes/eñes/caracteres latinos

	mysqli_query($conexion, "SET NAMES 'utf8'");
	echo "UTF Seteado<br/><br/>";

	//Consulta a DB
	$query = mysqli_query($conexion, "SELECT * FROM Notas");

	while($nota = mysqli_fetch_assoc($query)){
		//var_dump($nota);
		echo $nota['Descripcion'] . '<br/>';
	}

	echo "<hr/>";

	//Insertar registros en PHP
	$sql = "INSERT INTO Notas VALUES (null, 'Nota desde PHP', 'Esto es una nota desde PHP', 'green')";
	$insert = mysqli_query($conexion, $sql);

	if($insert){
		echo '<h2>Datos insertados correctamente</h2>';
	}else{
		echo '<h2>Error al grabar: ' . mysqli_error($conexion) . '</h2>';
	}

?>