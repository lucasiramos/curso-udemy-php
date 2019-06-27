<?php

$numero = 12;
$coma = 34.5;
$texto = 'Este es un texto';
$verdadero = true;
$falso = false;
$nula = null;

echo $numero . ' - ' . gettype($numero) . '	<br/>';
echo $coma . ' - ' . gettype($coma) . '<br/>';
echo $texto . ' - ' . gettype($texto) . '<br/>';
echo $verdadero . ' - ' . gettype($verdadero) . '<br/>';
echo $falso . ' - ' . gettype($falso) . '<br/>'	;
echo $nula . ' - ' . gettype($nula);

var_dump($texto);

?>

