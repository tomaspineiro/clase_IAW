<?php
/**
 * for (1) 2 - for-1-02.php
 *
 * @author Tomás Piñerio
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculos en columna.
    for (1). Sin formularios.
    Tomás Piñerio
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculos en columna</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>


	<?php
			
			define('NUMmIN', 1);
			define('NUMmAX', 10);
			
			$numCirculo = rand(NUMmIN, NUMmAX);
			$circulos = '';
			
			for ($i = 1; $i <= $numCirculo; $i ++ ) {

				$circulos .= "<tr> \n 
								<td> \n
									<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\"> \n 
										<circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"black\"></circle> \n
									</svg> \n 
								 </td> \n
							</tr> \n";
		
			};
		
			print "<h2> $numCirculo círculos </h2> \n";
			
			print "<table class=\"conborde\"> \n
					<tbody> \n
						$circulos						 
					</table> \n
				</tbody> \n ";
	?>


  <footer>
    <p>Tomás Piñerio</p>
  </footer>
</body>
</html>
