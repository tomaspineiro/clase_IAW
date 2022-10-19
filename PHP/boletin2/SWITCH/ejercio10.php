<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio 10 (switch) </h5>
		<?php
			//Realiza un programa que a partir de una variable con una letra detecte si es una vocal o no
			
			$letra ='j';
			
			switch(strtoupper($letra)){
				case 'A':
					echo 'es una vocal';
					break;
				case 'E':
					echo 'es una vocal';
					break;
				case 'I':
					echo 'es una vocal';
					break;
				case'O':
					echo 'es una vocal';
					break;
				case 'U':
					echo 'es una vocal';
					break;
				default:
					echo 'no es una vocal';
			};
			
		?>		
			
	</body>
</html>