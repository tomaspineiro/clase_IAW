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
			
			switch($mes){
				case  1:
					echo $mes,' -→ Enero';
					break;
				case 2:
					echo $mes,' -→ Febrero';
					break;
				case 3:
					echo $mes,' -→ Marzo';
					break;
				case 4;
					echo $mes,' -→ Abril';
					break;
				case 5:
					echo $mes,' -→ Mayo';
					break;
				case 6:
					echo $mes,' -→ Junio';
					break;
				case 7:
					echo $mes,' -→ Julio';
					break;
				case 8:
					echo $mes,' -→ Agosto';
					break;
				case 9:
					echo $mes,' -→ Septiembre';
					break;
				case 10:
					echo $mes,' -→ Octubre';
					break;
				case 11:
					echo $mes,' -→ Noviembre';
					break;
				case 12:
					echo $mes,' -→ Diciembre';
					break;
			};		
		?>			
	</body>
</html>