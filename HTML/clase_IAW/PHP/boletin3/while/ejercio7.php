<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 7 (while)  </h5>
		<?php
			// Realiza un programa que muestre los números impares entre 1 y 100, calculando para cada uno de ellos si es impar o no.

			$num = 0;
			while ($num <= 100) {
					
				switch(  $num%2 ) {
					case 0:
						echo 'El numero es par, ', $num,'. <br/>';
						break;
					case 1:
						echo 'El numero es inpar, ', $num,'. <br/>';	
						break;
				};

				$num += 1;

			};

		?>			
	</body>
</html>