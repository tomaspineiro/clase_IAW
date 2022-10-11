<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio  </h5>
		<?php
			//Hacer un programa que para una nota aleatoria almacenada en una variable muestre por pantalla si se trata de un suspenso, aprobado, bien, notable, sobresaliente, nota no válida
			
			define('NOTAmAX', 0);
			define('NOTAmIN', 10);
			
			$nota = rand(NOTAmIN, NOTAmAX);
			
			if(($nota >= 0) and ($nota < 5)){
				echo 'Suspenso: ', $nota;
			}
			elseif( $nota == 5){
				echo ' Aprobado: ', $nota;
			}
			elseif( $nota < 7){
				echo ' Bien: ', $nota;
			}
			elseif( $nota < 9){
				echo ' Notable: ', $nota;
			}
			elseif( $nota <= 10){
				echo ' Sobresaliente: ', $nota;
			}
			elseif(($nota <= 0) or ($nota > 10)){
				echo ' Nota no valida,', $nota;
			};
				
		?>				
	</body>
</html>