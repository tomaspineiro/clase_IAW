<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 4 (for) </h5>
		<?php
			// Hacer una página que muestre por pantalla todos los divisores (aquellos cuyo resto de la división es 0) de un número generado al azar entre 1 y 100. Ej: Divisores del 16: 1, 2, 4, 8, 16.
			
			define('NUMmIN', 1);
			define('NUMmAX',100);
			
			# echo NUMmAX,' ', NUMmIN;
			
			$num = rand(NUMmIN, NUMmAX);
			#$num = 16;
			$txt = '';
			
			
			for ($i = 1; $i <= $num; $i++ ) {
				
				if (($num % $i) == 0){
					$txt = $txt . ', ' . $i;
				};
				
				
			};
			
			echo $txt;
		?>		
			
	</body>
</html>