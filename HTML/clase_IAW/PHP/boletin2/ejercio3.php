<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio 3 </h5>
		<?php
			//Realizar un programa para averiguar si alguien puede conducir a partir de los valores de dos variables $edad y $tieneCarnet. 
			define('EDADmIN',0);
			define('EDADmAX',99);
			
			$edad = rand(EDADmIN, EDADmAX);
			$tieneCarnet = rand(0,1);
			// si es 0 es que no tiene carnet y si es 1 es que si tiene
			echo 'edad: ', $edad, '</br>', 'carnet: ', $tieneCarnet;
			if ($edad >= 18 & $tieneCarnet == 1){
				
				echo '</br> </br> puede conducir';							
			};
		?>		
	
	</body>
</html>