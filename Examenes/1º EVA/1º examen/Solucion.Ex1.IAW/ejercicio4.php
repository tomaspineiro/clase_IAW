<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejercicio 4. Reverse
    Tomás Piñiro Alonos
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css" title="Color">

</head>

<body>
	<?php 
		$lista = array(91, 18, 83, 50, 72, 99, 71, 22, 81, 49);
		
		
		function reverse(array $array) {
			/*
			esto esta mal por que estoy  usando un array  auxiliar 
			$arrayR = array();
			
			for ($i=0 , $j=(count($array) -1); $i < count($array) AND $j >= 0 ;$i++, $j--) {
				
				$arrayR[$i] = $array[$j];
				
				$arrayR[]=$array[$j];
				
			}
			print_r($arrayR);
			
			#return $arrayR;
			*/
			# La solucion correcta seria esta:
			
			# UN condicional simplificado que el que tengo seria $i < $j 
			
			for ($i=0 , $j=(count($array) -1); $i < count($array) AND $j >= (count($array)/2);$i++, $j--) {
				
				$auxiliar = $array[$j];
				$array[$j] = $array[$i];
				$array[$i] = $auxiliar;
				
			}
			
			return $array;
			
		}
	
	?>
  <h1>Función Reverse</h1>

    <p>
		<?php
		
			print_r($lista);
			
			echo "</br>";
			echo "</br>";
			
			print_r(reverse($lista));
			
		?>
	</p>    
	
  <footer>
    <p>Tomás Piñiro Alonos</p>
  </footer>
</body>
</html>
