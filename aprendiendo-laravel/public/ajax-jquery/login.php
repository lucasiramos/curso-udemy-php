<?php

$arrayEstudios = [
	"Escuela" => "Normal",
	"Analista" => "ISEI",
	"Lic" => "USAL",
];

$arrayInterior = [
	"Edad" => "35",
	"Peso" => "80kg",
	"Estudios" => $arrayEstudios,
];

$array = [
	"Nombre" => "Lucas",
	"Apellido" => "Ramos",
	"Datos" => $arrayInterior,
];

//Esto lo convierte en un Json legible desde .js
echo json_encode($array);

?>