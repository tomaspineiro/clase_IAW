<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 3 (while) </h5>
		<?php
			//Hace una página PHP que muestre por pantalla los números del 100 al 0 separados por comas en orden descendente, dando el salto de 2 en 2. Es decir, 100, 98, 96, ..., 2, 0.
			define('NUMmAX',100);
			
			$num = 0;
			$txt = '';
			
			while($num <= NUMmAX){
				$txt = $num  . ', ' . $txt;
				$num += 2; 
			};
			
			echo $txt;
			
			
		?>		
			
	</body>
</html>