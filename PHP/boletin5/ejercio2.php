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

			/*
			foreach($numero as $i => $v){
				echo '</br>' . $i . '  ' . $v . '</br>';
				
				foreach($numero as $j => $n){
					if (($n < $v) and ($n != $v)) {
						unset($numero[$j]);
						array_push($numero, $v);
					};					
				};
			};
			
			foreach($numero as $i => $v){
				echo '</br>' . $i . '  ' . $v . '</br>';
				
				for ($j=0; $j < count($numero); $j++) { 
					if ($numero[$j]  $v) {
						unset($numero[$j]);
						array_push($numero, $v);
					};					
				};
			};
			*/

			foreach($numero as $i => $v){
				
				#echo '</br>' . $i . '  ' . $v . '</br>';
				
				$cont=0;
				for ($j=0; $j < count($numero); $j++) { 
					if ($numero[$j] < $v) {
						$cont++;
					};					
				};
				
				$numero[$cont]= $v;
			};
			print_r($numero);
			
			
			
			
			
		?>		
			
	</body>
</html>