<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 2 (for) </h5>
		<?php
			//Realiza un programa que muestre por pantalla la tabla de multiplicar de un número.
		
		
			define('MULTIPICADOR', 2);
			
			
			for ($i = 0; $i < 11; $i++) {
				
				$resultado = MULTIPICADOR * $i;
				echo  constant("MULTIPICADOR")," * $i = $resultado <br/>";
				
			}
			
		?>		
			
	</body>
</html>