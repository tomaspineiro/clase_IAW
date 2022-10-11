<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio 2  </h5>
		<?php
			//Realiza ahora un programa para los Euromillones. Deberá mostrar 5 números al azar entre 1 y 50 y además 2 números (estrellas) entre 1 y 9.
			define('NUMmIN',1);
			define('NUMmAX', 50);
			define('NUMmAX2',9);
			
			$num1 = rand(NUMmIN,NUMmAX);
			$num2 = rand(NUMmIN,NUMmAX);
			$num3 = rand(NUMmIN,NUMmAX);
			$num4 = rand(NUMmIN,NUMmAX);
			$num5 = rand(NUMmIN,NUMmAX);
			$num6 = rand(NUMmIN,NUMmAX);
			
			$numEstrela1 = rand(NUMmIN,NUMmAX2);
			$numEstrela2 = rand(NUMmIN,NUMmAX2);
			
			echo 'el número premiedo hoy es el ', $num1, ' ', $num2, ' ', $num3, ' ', $num4, ' ', $num5, '. Los números estella hoy ', $numEstrela1, ' ', $numEstrela2, '.</br> </br> Henorabuna a los premiedos. </br> </br>  Recuerda, juega con resposabilidad';
		
		?>		
	</body>
</html>