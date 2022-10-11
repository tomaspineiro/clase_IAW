<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 1 de PHP</title>
	</head>
	<body>
		<h1>Boletin 1 de PHP</h1>
		<h5>ejercio  3</h5>
		<?php
			/*
			Calcula el área de un triángulo de 20cm de base y 90cm de altura y muéstralo por pantalla
			*/
			$base = 20;
			$altura = 90;
			
			$area = ($base * $altura) / 2;

			echo 'el triangula tiene un area ', $area;
		?>		
	</body>
</html>