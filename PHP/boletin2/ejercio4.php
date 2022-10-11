<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio 4</h5>
		<?php
			//Escribe un programa que a partir de un número entre -100 y 100 diga si es positivo o negativo
			define('NUMmIN', -100);
			define('NUMmAX',100);
			
			# echo NUMmAX,' ', NUMmIN;
			
			$num = rand(NUMmIN, NUMmAX);
			
			if (  $num >= 0 ) {
				echo 'El numero es positivo, ', $num,'.';
			}
			else{
				echo 'El numero es negativo, ', $num,'.';	
			};
		?>		
	</body>
</html>