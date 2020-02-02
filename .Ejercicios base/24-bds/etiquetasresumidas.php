<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Una descripción para las búsquedas de Google" />

	<title>Etiquetas resumidas</title>
</head>
<body>
	<h1>Etiquetas resumidas en PHP dentro del HTML, para no usar echo</h1>
	<p>Esto es html, pero a continuación voy a meter php para generar un listado de li.</p>
	<ul>

		<?php 
			$NumerosValidos = 0;
			$NumeroGenerado = 0;

			while($NumerosValidos < 10):
				$NumeroGenerado = rand(1,100);

				if($NumeroGenerado >= 50):
					$NumerosValidos = $NumerosValidos + 1;
		?>
					<!-- Esto ya es HTML -->
					<li><?= $NumeroGenerado ?></li>

		<?php 
				endif; 
			endwhile;
		?>
	</ul>


</body>
</html>