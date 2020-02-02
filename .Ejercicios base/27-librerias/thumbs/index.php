<?php

	require_once 'vendor/autoload.php';

	$foto_original = 'Equipo_1.jpg';
	$guardar_en = 'Equipo_1_thumb.jpg';

	$thumb = new PHPThumb\GD($foto_original);
	$thumb->resize(1000,600);
	$thumb->cropFromCenter(200);
	$thumb->show();
	$thumb->save($guardar_en);

?>