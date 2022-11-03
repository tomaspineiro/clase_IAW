<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 4 de PHP</title>
	</head>
	<body>
		<h1>Boletin 4 de PHP</h1>
		<h5>ejercio 8 </h5>
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
				
			$tabla = '';
			$cont = 1;
			do {
				$base = rand(NUMmIN,NUMmAX);

				if ($base%2 == 1){
				
					$centro = round(($base / 2),0) -1;

					for ($i=0; $i < $base; $i++) {
	
						$tabla .= "<tr> \n ";

						for ($j = 0; $j < $base; $j++) {
							
							if ($i < $centro){ 
								
								if ( ($j <= ($centro + $i)) and (($centro - $i) <= $j) ){
									
									$tabla .= " <td>  @ </td> \n";
									
								} else {
									
									$tabla .= " <td>  &nbsp </td> \n";
									
								};

							} elseif ($i == $centro ) {

								$tabla .= " <td>  @ </td> \n";
							
							} else {	

								if ( ($cont  <=  $j) and ( $j <= ($base - $cont-1)) ){
									
									$tabla .= " <td>  @  </td> \n";
									
								} else {
									
									$tabla .= " <td>  &nbsp </td> \n";
									
								};	
								
							};

						};

						if ($i > $centro) {

							$cont++;
							
						};

						$tabla .= "</tr> \n";
					};
				
					echo "Esto marcha bien.  $centro  , $base.  ";

				};
			} while ($base%2 == 0);			
			
			print "<table> \n
					<tbody> \n
						$tabla						 
					</table> \n
				</tbody> \n ";
		?>		
			
	</body>
</html>