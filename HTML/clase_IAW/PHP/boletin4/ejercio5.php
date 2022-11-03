<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 4 de PHP</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<h1>Boletin 4 de PHP</h1>
		<h5>ejercio 5 </h5>
		<?php
			/*
				Crea un programa que rellene una tabla como la anterior pero con el producto
				de las celdas internas.
					------------------
					 | * | 0 | 0 | 0 |
					------------------
					 | 0 | 1 | 2 | 3 |
					------------------
					 | 0 | 2 | 4 | 6 |
					------------------
					 | 0 | 3 | 6 | 9 |
					------------------
					 | 0 | 4 | 8 | 12 |
					------------------
			*/

			define('FILAS', 4);
			define('COLUMAS', 3);
			
			$tabla='';

			for ($i=0; $i <= FILAS; $i++) {

				$tabla .= "<tr> \n ";

				for ($j = 0; $j <= COLUMAS; $j++) {

					if (($i == 0) and ($j == 0)) {
						
						$tabla .= " <td> \n * </td> \n";
						
					}
					elseif (($i != 0) and ($j == 0))  {
						
						$tabla .= " <td> \n $i  </td> \n";

					}
					elseif (($i == 0) and ($j != 0)) {
						
						$tabla .= " <td> \n $j </td> \n";
						
					}
					elseif (($i != 0) and ($j != 0)) {

						$tabla .= " <td> \n " . $j * $i . " </td> \n";

					};

					#echo "el fayo esta en el if ";
				};

				$tabla .= "</tr> \n";
		
			};
		
			print "<h2> FILAS círculos </h2> \n";
			
			print "<table > \n
					<tbody> \n
						$tabla						 
					</table> \n
				</tbody> \n ";
			
		?>		
			
	</body>
</html>