<?php
	session_start(); // Para cerrar la sesión tengo que inicializarla primero...sisi, raro... je
	session_destroy();

	echo 'La sesión ha sido cerrada. <a href="otrapagina.php">Comprobar variable destruida</a>';
?>