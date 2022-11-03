<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 4 de PHP</title>
	</head>
	<body>
		<h1>Boletin 4 de PHP</h1>
		<h5>ejercio 7 </h5>
		<?php
			/*
			Crear el programa que a partir de un número entero cree una pirámide de arrobas. Por ejemplo con el 4, el resultado sería:
			
						@
					   @@@
					 @@@@@
					@@@@@@@
			*/
			define('NUMmIN',5);
			define('NUMmAX', 20);
				
			$tabla='';
			
			do {
				$base = rand(NUMmIN,NUMmAX);

				if ($base%2 == 1){
				
					$centro = round(($base / 2),0) -1;

					for ($i=0; $i < $centro; $i++) {
	
						$tabla .= "<tr> \n ";
			
						for ($j = 0; $j < $base; $j++) {
							
							#for ($k=0; $k < ; $k++) { 
								
								if ( ($j <= ($centro + $i)) and (($centro - $i) <= $j) ){
									
									$tabla .= " <td>  @ </td> \n";
									
								}
								else {
									
									$tabla .= " <td>  &nbsp </td> \n";
									
								};
							#};

						};

						$tabla .= "</tr> \n";
					};
				
					echo "Esto marcha bien.  $centro  , $base ";

				};
			} while ($base%2 == 0);			
			/*
				do {
					$base = rand(NUMmIN,NUMmAX);

					if ($base%2 == 1){
					
						$centro = round(($base / 2),0);				
						echo "Esto marcha bien.  $centro  , $base ";

					};
					
				} while ($base%2 == 0);	
			*/

			echo "\n e salido";	

			print "<h2> FILAS círculos </h2> \n";
			
			print "<table class=\"conborde\"> \n
					<tbody> \n
						$tabla						 
					</table> \n
				</tbody> \n ";
		?>		
			
	</body>
</html>