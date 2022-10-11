<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio 5  </h5>
		<?php
			//Escribe un programa para averiguar si un número generado al azar (entre 1 y 100) es par o impar
			define('NUMmIN', 1);
			define('NUMmAX',100);
			
			# echo NUMmAX,' ', NUMmIN;
			
			$num = rand(NUMmIN, NUMmAX);
			
			if (  $num%2 == 0 ) {
				echo 'El numero es par, ', $num,'.';
			}
			else{
				echo 'El numero es inpar, ', $num,'.';	
			};
		?>		
			
	</body>
</html>