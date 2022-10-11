<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 4 de PHP</title>
		<link rel="stylesheet" src="styles.css" type="text/css">
	</head>
	<body>
		<h1>Boletin 4 de PHP</h1>
		<h5>ejercio 3 </h5>
		<?php
			/*
			Crear un programa que rellene una tabla con las posiciones de cada una de las
			celdas como se muestra a con
					----------------------------
					 | 0-0 | 0-1 | 0-2 | 0-3 |
					----------------------------
					 | 1-0 | 1-1 | 1-2 | 1-3 |
					----------------------------
					 | 2-0 | 2-1 | 2-2 | 2-3 |
					----------------------------
					 | 3-0 | 3-1 | 3-2 | 3-3 |
					----------------------------
					 | 4-0 | 4-1 | 4-2 | 4-3 |
					----------------------------
			*/
			define('FILAS', 4);
			define('COLUMAS', 3);
			
			$tabla='';

			#echo '  i   j   ';

			for ($i = 0; $i <= FILAS; $i ++ ) {
				$tabla .= "<tr> \n ";
				for ($j = 0; $j <= COLUMAS; $j ++ ) {

					$tabla .= " <td> \n
									$i-$j
								 </td> \n";
			
				};
				$tabla .= "</tr> \n";
		
			};
		
			#print "<h2> FILAS círculos </h2> \n";
			
			print "<table> \n
					<tbody> \n
						$tabla	</tbody> \n 					 
					</table> \n";
				
		?>		
			
	</body>
</html>