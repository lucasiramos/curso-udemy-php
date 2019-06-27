<?php

	require 'vendor/autoload.php';

	use Spipu\Html2Pdf\Html2Pdf;

	$exportacion = new Html2Pdf();
	// $textoExportado = '<h1>Este es un título</h1><b>Negrita</b> esto ya no es negrita.';

	//Packagist usado: composer require spipu/html2pdf

	ob_start();
	require_once 'plantilla_html.php';
	$textoExportado = ob_get_clean();

	$exportacion->writeHTML($textoExportado);
	$exportacion->output('pdf_generado.pdf');

?>