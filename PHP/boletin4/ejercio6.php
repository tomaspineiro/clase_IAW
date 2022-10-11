<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 4 de PHP</title>
	</head>
	<body>
		<h1>Boletin 4 de PHP</h1>
		<h5>ejercio 6 </h5>
		<?php
			/*
				Crear un programa que a partir de un número entero cree un cuadrado de
				arrobas (@) con ese tamaño. Las arrobas sólo se verán en el borde del 
				cuadrado, no en el interior.
			*/
			
			
			define('NUMmIN',1);
			define('NUMmAX', 10);
			
			$lado = rand(NUMmIN,NUMmAX);
			
			$tabla='';

			for ($i=0; $i <= $lado; $i++) {

				$tabla .= "<tr> \n ";

				for ($j = 0; $j <= $lado; $j++) {

					if ($i == 0) {
						
						$tabla .= " <td> \n @ </td> \n";
						
					}
					elseif ($j == 0) {

						$tabla .= " <td> \n @ </td> \n";

					}
					elseif ($j == $lado) {

						$tabla .= " <td> \n @ </td> \n";

					}
					elseif ($i == $lado) {

						$tabla .= " <td> \n @ </td> \n";

					}
					else {
						$tabla .= " <td> \n &nbsp </td> \n";
						
					};

					#echo "el fayo esta en el if ";
				};

				$tabla .= "</tr> \n";
		
			};
		
			print "<h2> FILAS círculos </h2> \n";
			
			print "<table class=\"conborde\"> \n
					<tbody> \n
						$tabla						 
					</table> \n
				</tbody> \n ";
		?>		
			
	</body>
</html>