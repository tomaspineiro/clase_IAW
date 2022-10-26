<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 5 de PHP</title>
		<?php include("funciones.php") ?>
	</head>
	<body>
		<h1>Boletin 5 de PHP</h1>
		<h5>ejercio  2 </h5>
		<?php
			/*
			Escribe un programa que rellene un array con 10 números aleatorios y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
			*/
			
			$numero = arrayNumeros(10);
		
			print_r($numero);
			echo '</br>';

			
			
			foreach($numero as $i){
				echo $i . '</br>';
				if (
			};
			
			print_r($numero);
			echo 'max: ' . $max . ' min: ' . .'</br>';
			
		?>		
			
	</body>
</html>