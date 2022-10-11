<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 1 de PHP</title>
	</head>
	<body>
		<h1>Boletin 1 de PHP</h1>
		<h5>ejercio 1 </h5>
		<?php
			//Suponiendo que el valor de un producto con IVA es de 19.99€, calcula su valor SIN IVA y muéstralo por pantalla.
			
			define('IVA', 0.21);

			$precioProducto = 19.99;

			$precioSinIva = $precioProducto * (1 - IVA );

			echo 'el producto sin iva cuesta ', round($precioSinIva,2);
		?>		
	</body>
</html>