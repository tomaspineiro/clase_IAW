<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 5 de PHP</title>
	</head>
	<body>
		<h1>Boletin 5 de PHP</h1>
		<h5>ejercio 1 </h5>
		
		<?php
			/*
			Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas. 
			*/
			$numero = array();
			$cuadrado = array();
			$cubo = array();
			
			for ($i = 0;$i < 20; $i++){
				
				$numero[$i] = rand(0, 100);
				
			};
			
			
			foreach($numero as $i => $v ){
				#echo "$i  $v ";
				#print($i. ' </br>');
				$cuadrado[] = $v ** 2;
			};
			
			foreach($numero as $i ){
				
				#print($i. ' </br>');
				$cubo[] = $i ** 3;
			};
			/*
			print('Los nuneros en el array numeros son: ');
			print_r($numero);
			echo '</br> </br> ';
			
			print('Los nuneros en el array cuadrado son: ');
			print_r($cuadrado);
			echo '</br> </br>';
			
			print('Los nuneros en el array cubo son: ');
			print_r($cubo);
			echo '</br> </br>';
			*/
			
			echo "<table border=\" black solid 1px \" > \n
					<tbody> \n
						<tr> 
							<th>Posición</th> <th>Numero</th> <th>Cuadrado</th> <th>Cubo</th>
						</tr>";
					
			for ($i = 0; $i < 20; $i++){
				echo '<tr>';
					echo " <td>$i</td> <td>$numero[$i]</td> <td>$cuadrado[$i]</td> <td>$cubo[$i] </td>";
				echo '</tr>';
			}
			echo "</table> \n
					</tbody> \n ";
		?>		
			
	</body>
</html>