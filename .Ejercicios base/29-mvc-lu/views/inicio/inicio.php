<h1>Bienvenido a la página inicial</h1>

<?php
	$date = date('m/d/Y h:i:s a', time());
?>

<p>Hoy es <b><?=$date?></b></p><br><br>

<a href="<?=base_url . 'clientes/nuevo'?>">Cargar un cliente</a>