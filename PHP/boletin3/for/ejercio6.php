<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 6 (for)  </h5>
		<?php
			//Realiza la división entera de dos números distintos de 0 utilizando únicamente restas.\
			
			
			$dividendo = 5;
			$divisor = 2;
			
			
			for ($resto = $dividendo ; $resto >= $dividendo; $resto-= $divisor) {
				
				echo $resto, ',  ';
				
			};
			
			echo $resto;
			
		?>			
	</body>
</html>