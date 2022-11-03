<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 2 (while) </h5>
		<?php
			//Realiza un programa que muestre por pantalla la tabla de multiplicar de un número.
		
		
			define('MULTIPICADOR', 2);
			
			$contador = 0;
			while($contador < 11) {
				
				$resultado = MULTIPICADOR * $contador;
				echo  constant("MULTIPICADOR")," * $contador = $resultado <br/>";
				
				$contador++;
				
			}
			
		?>		
			
	</body>
</html>