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
			
			#$numero = array(8, 7, 9,5 , 4, 3, 6, 1, 0, 2);
			#$compro = $numero;
			
			print_r($numero);
			echo '</br>';

			$long = count($numero);
			
			foreach($numero as $i){
				
				for ($j=0; $j < ($long - 1); $j++) {
					
					if ($numero[$j] > $numero[$j + 1]) {
						
						$guardar = $numero[$j];
						$numero[$j] = $numero[$j + 1]; 
						$numero[$j + 1] = $guardar;
						
					};					
				};			
			};
			
			print_r($numero);
			echo '</br>';
			
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

			foreach($numero as $i => $v){
				
				#echo '</br>' . $i . '  ' . $v . '</br>';
				
				$cont=0;
				for ($j=0; $j < count($numero); $j++) { 
					if ($numero[$j] < $v) {
						$cont = $cont + 1;
					};					
				};
				$mover = $numero[$cont];
				echo '</br> '. $mover . '  ' . $cont . ' ' .' </br> ';
			
				$numero[$cont] = $v;
				echo '</br>';
				print_r($numero);
			
				$numero[$i] = $mover;
				echo '</br>';
				print_r($numero);
			
			};
			*/
			
			/*
			$numero[0]= 1;
			echo '</br></br></br>';
			echo count($numero);
			*/
			
			/*
			echo '<p>Solucion sencialla que no vale, pero me sirve para comparar mas facil.</p>';
			
			sort($compro);
			print_r($compro);
			*/
		?>		
			
	</body>
</html>