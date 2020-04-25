<?php
	$prueba = '<script>alert("Holis")</script>';
	
	//echo $prueba;
	echo htmlentities($prueba, ENT_QUOTES, 'UTF-8');

	//esc_html
	//filter_var($email, FILTER_SANITIZE_EMAIL);
	//filter_input
?>