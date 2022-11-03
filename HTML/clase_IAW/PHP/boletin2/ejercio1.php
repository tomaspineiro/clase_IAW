<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio 1 </h5>
		<?php
			//Realiza un programa que genere los resultados del juego de la primitiva, es decir que muestre 6 números aleatorios entre 1 y 49.
			define('NUMmIN',1);
			define('NUMmAX', 49);
			
			$num1 = rand(NUMmIN,NUMmAX);
			$num2 = rand(NUMmIN,NUMmAX);
			$num3 = rand(NUMmIN,NUMmAX);
			$num4 = rand(NUMmIN,NUMmAX);
			$num5 = rand(NUMmIN,NUMmAX);
			$num6 = rand(NUMmIN,NUMmAX);
			
			echo 'el número premiedo hoy es el ', $num1, ' ', $num2, ' ', $num3, ' ', $num4, ' ', $num5, ' ', $num6,'.</br> </br> Henorabuna a los premiedos. </br> </br>  Recuerda, juega con resposabilidad';
		
		?>		
	</body>
</html>