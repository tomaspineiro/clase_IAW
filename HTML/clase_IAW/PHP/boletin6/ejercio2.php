<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 6 de PHP</title>
		<?php include('funciones.php'); ?>
	</head>
	<body>
		<h1>Boletin 6 de PHP</h1>
		<h5>ejercio 2 </h5>
		<?php
			/*
			Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se debera introducir por teclado.	
			1 € = 166'386 pesetas
			*/
			$euros = '1.2';
			function eurosPesta($euros){
				
				define('PESETAS', 166.386);

				$euros = floatval($euros);
				
				$pesetas = $euros * PESETAS;
				
				$pesetas = round($pesetas, 2);

				return $pesetas;

			}
			
			echo eurosPesta($euros);
			
			
		?>		
			
	</body>
</html>