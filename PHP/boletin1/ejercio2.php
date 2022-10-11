<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 1 de PHP</title>
	</head>
	<body>
		<h1>Boletin 1 de PHP</h1>
		<h5>ejercio 2 </h5>
		<?php	
			/*
				Un pintor necesita 0.2 litros de pintura por metro cuadrado. Tiene que pintar una
				pared de 15m x 5m. Cada lata de pintura de 1 litro vale 35€. Realiza un programa en
				PHP que calcule cuánto dinero debe gastar el pintor para pintar la pared. Debes usar
				las siguientes variables: $altoPared; $largoPared; $superficie; $precioLata; $total.
			*/
			define('PINTURAm2', 0.2);

			$altoParez = 5;
			$largoParez = 15;
			$precioLata = 35;


			$superficie = $largoParez * $altoParez;
			$latasNecesarias = $superficie * PINTURAm2;
			$total = $precioLata * $latasNecesarias;

			echo 'El coste de pintar la parez es ', $total;				
		?>		
	</body>
</html>