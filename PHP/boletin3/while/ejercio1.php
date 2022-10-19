<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 1 (while) </h5>
		<?php
			//Realiza un programa que genere los resultados del juego de los Euromillones, es decir, que muestre 5 números aleatorios entre 1 y 50, más 2 estrellas entre 1 y 9 utilizando bucles.
			
			define('NUMmIN', 1);
			define('NUMmAX', 50);
			define('ESTRELAmAX', 9);
			
			
			$numPremiado = '';
			
			$contador = 0;
			while($contador < 5) {
				
				$num = rand(NUMmIN, NUMmAX);
				$numPremiado .= "$num ";
				$contador++;
				
			}
			$numPremiado .= " - ";
			
			$contador = 0;
			while($contador < 2) {
				
				$num = rand(NUMmIN, ESTRELAmAX);
				$numPremiado .= "$num ";
				$contador++;
			
			}
			
			echo $numPremiado;
			
		?>		
			
	</body>
</html>