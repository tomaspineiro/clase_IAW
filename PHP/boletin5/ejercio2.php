<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 5 de PHP</title>
	</head>
	<body>
		<h1>Boletin 5 de PHP</h1>
		<h5>ejercio  2 </h5>
		<?php
			/*
			Escribe un programa que rellene un array con 10 números aleatorios y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
			*/
			
			$numero = array();
		
			
			for ($i = 0;$i < 10; $i++){
				
				$numero[$i] = rand(0, 100);
				
			};
			
			#print_r($numero);
			
			foreach($numero as $i){
				
				
			};
		?>		
			
	</body>
</html>