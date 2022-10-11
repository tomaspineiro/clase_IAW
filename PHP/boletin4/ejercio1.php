<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 4 de PHP</title>
	</head>
	<body>
		<h1>Boletin 4 de PHP</h1>
		<h5>ejercio  1 </h5>
		<?php
			/*
				Crear un programa que escriba dos columnas de números, en la primera se
				colocan los números del 1 al 100, en la segunda los números del 100 al 1
			
				1 		100
				2		99
				3 		98
				.........
			*/
			
		?>		
		<?php 
			define('NUMmIN', 1);
			define('NUMmAX', 100);
			
			
		?>
		<?php 
			for ($i=NUMmIN; $i <= NUMmAX; $i++) {
				
				echo ' ' . $i . '		  ' . (NUMmAX - $i) . "</br>" ;
			};
				
		
		?>
		
	</body>
</html>