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
		
			#print_r($numero);
			
			$max = 0;
			$min = $numero[0];

			foreach($numero as $i){
				
				if ($i > $max) {
					$max = $i;
				}
				
				if ($i < $min) {
					$min = $i;
				}

			};
			
			echo 'max: ' . $max . ' min: ' . $min .'</br>';
			echo '</br>';

			/*
				$orenada = arrayOrden($numero);
				#print_r($orenada);
				

				echo ' esto es para comprobar que funcina todo bien </br>';
				$p1 = max($numero);
				$p2 = min($numero);
				
				echo'max: ' . $p1  . ' min: ' . $p2 .'</br>';
			*/
		?>		
			
	</body>
</html>