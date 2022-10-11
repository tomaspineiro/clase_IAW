<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 4 de PHP</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<h1>Boletin 4 de PHP</h1>
		<h5>ejercio 4 </h5>
		<?php
			/*
			Crea un programa que rellene una tabla como la anterior pero con la suma de
			las celdas internas
			
					------------------
					 | + | 1 | 2 | 3 |
					------------------
					 | 1 | 2 | 3 | 4 |
					------------------
					 | 2 | 3 | 4 | 5 |
					------------------
					 | 3 | 4 | 5 | 6 |
					------------------
					 | 4 | 5 | 6 | 7 |
					------------------			
			*/

			define('FILAS', 4);
			define('COLUMAS', 3);
			
			$tabla='';

			for ($i = 0; $i <= FILAS; $i ++ ) {
				
				$tabla .= "<tr> \n ";
				
				for ($j = 0; $j <= COLUMAS; $j ++ ) {

					if ( ($i+$j)!= 0) {
						
						$tabla .= " <td> \n" . $i+$j . " </td> \n";

					}
					else {
						$tabla .= " <td> \n + </td> \n";

					};

			
				};

				$tabla .= "</tr> \n";
		
			};
		
			print "<h2> FILAS círculos </h2> \n";
			
			print "<table border=\"1\"> \n
					<tbody> \n
						$tabla						 
					</table> \n
				</tbody> \n ";
		?>		
		
			
	</body>
</html>