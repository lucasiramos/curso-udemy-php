<?php

	//GET es lo mismo que POST pero se ven los datos por QueryString
	echo '<h1>' . $_POST['apellido'] . ', ' . $_POST['nombre'];

	var_dump($_POST);

	echo '</h1>';

?>