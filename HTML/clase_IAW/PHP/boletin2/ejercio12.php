<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio 12</h5>
		<?php
			// Hacer un programa que convierta el valor numérico de un mes generado al azar en su correspondiente nombre. Ejemplo: 5--> mayo, 8-→agosto
			
			define('PRIMERmES', 1);
			define('ULTIMOmES', 12);
			
			$mes = rand(PRIMERmES, ULTIMOmES);
			
			if($mes == 1){
				echo $mes,' -→ Enero';
			}
			elseif($mes == 2){
				echo $mes,' -→ Febrero';
			}
			elseif($mes == 3){
				echo $mes,' -→ Marzo';
			}
			elseif($mes == 4){
				echo $mes,' -→ Abril';
			}
			elseif($mes == 5){
				echo $mes,' -→ Mayo';
			}
			elseif($mes == 6){
				echo $mes,' -→ Junio';
			}
			elseif($mes == 7){
				echo $mes,' -→ Julio';
			}
			elseif($mes == 8){
				echo $mes,' -→ Agosto';
			}
			elseif($mes == 9){
				echo $mes,' -→ Septiembre';
			}
			elseif($mes == 10){
				echo $mes,' -→ Octubre';
			}
			elseif($mes == 11){
				echo $mes,' -→ Noviembre';
			}
			elseif($mes == 12){
				echo $mes,' -→ Diciembre';
			};		
		?>			
	</body>
</html>