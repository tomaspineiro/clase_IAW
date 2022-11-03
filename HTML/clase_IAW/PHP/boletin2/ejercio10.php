<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio  10</h5>
		<?php
			//Realiza un programa que a partir de una variable con una letra detecte si es una vocal o no
			
			$letra ='a';
			
			if(($letra == 'a') or ($letra == 'A')){
				echo 'es una vocal';
			}
			elseif(($letra == 'e') or ($letra == 'E')){
				echo 'es una vocal';
			}
			elseif(($letra == 'i') or ($letra == 'I')){
				echo 'es una vocal';
			}
			elseif(($letra == 'o') or ($letra == 'O')){
				echo 'es una vocal';
			}
			elseif(($letra == 'u') or ($letra == 'U')){
				echo 'es una vocal';
			}
			else{
				echo 'no es una vocal';
			};
			
		?>		
			
	</body>
</html>