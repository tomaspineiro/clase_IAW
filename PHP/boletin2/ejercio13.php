<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio  </h5>
		<?php
			// Hacer un programa que convierta el valor numérico de un día de la semana generado al hacer en laborable (1-5) o fin de semana (6-7).
			define('DIAmAX', 1);
			define('DIAmIN', 7);
			
			$dia = rand(DIAmIN, DIAmAX);
			
			if (($dia >= 1 ) and ($dia <=5)){
				echo $dia,' -→ Laborable';
			}
			elseif(($dia >= 6) and ($dia <= 7)){
				echo $dia,' -→ Fin de Semana';
			};			
		?>			
	</body>
</html>