<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 5 de PHP</title>
		<?php include("funciones.php") ?>
	</head>
	<body>
		<h1>Boletin 5 de PHP</h1>
		<h5>ejercio  </h5>
		<?php
			/*
			Escribe un programa que genere 15 números aleatorios y que los almacene en un array. Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente, muestra el contenido del array.
			*/
			$numero = arrayNumeros(15);

			print_r($numero);
			/*
			foreach ($numero as $i => $v) {
				
			}
			echo '</br>';
			$long =  count($numero);
			for ($i=0 ; $i < ($long-1); $i++) { 
				$trnasito = $numero[$i + 1];
				$numero[$i + 1] = $numero[$i ];
				$numero[$i] = $trnasito;
				#print_r($numero);
				#echo '</br>';
			}
			*/

			echo '</br>';
			$long =  count($numero);
			for ($i=0 ; $i < ($long-1); $i++) { 
				$trnasito = $numero[$i + 1];
				$numero[$i + 1] = $numero[$i ];
				$numero[$i] = $trnasito;
		
			}
			echo '</br>';
			print_r($numero);
		?>		
			
	</body>
</html>