<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio 5 (switch) </h5>
		<?php
			//Escribe un programa para averiguar si un número generado al azar (entre 1 y 100) es par o impar
			define('NUMmIN', 1);
			define('NUMmAX',100);
			
			# echo NUMmAX,' ', NUMmIN;
			
			$num = rand(NUMmIN, NUMmAX);
			
			switch(  $num%2 ) {
				case 0:
					echo 'El numero es par, ', $num,'.';
					break;
				case 1:
					echo 'El numero es inpar, ', $num,'.';	
					break;
			};
		?>		
			
	</body>
</html>