<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 8 (while)  </h5>
		<?php
			// Escribe un programa que devuelva la suma de todos los números entre el 138 y 256 y además diga cuántos números hay.

			$num = 138;

			$suma = 0;
			while ($num <= 256) {
				$suma += $num;

				$num += 1;
				
			}

			echo $suma;
			
		?>			
	</body>
</html>