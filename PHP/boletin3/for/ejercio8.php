<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 8 (for)  </h5>
		<?php
			// Escribe un programa que devuelva la suma de todos los números entre el 138 y 256 y además diga cuántos números hay.

		

			$suma = 0;
			for ($i = 138; $i <= 256; $i++) {
				$suma += $i;
				
			}

			echo $suma;
			
		?>			
	</body>
</html>