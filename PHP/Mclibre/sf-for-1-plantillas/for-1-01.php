<?php
/**
 * for (1) 1 - for-1-01.php
 *
 * @author Tomás Piñeiro
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculos en fila.
    for (1). Sin formularios.
    Tomás Piñeiro
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculos en fila</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php
		
		define('NUMmIN', 1);
		define('NUMmAX', 10);
		
		$numCirculo = rand(NUMmIN, NUMmAX);
		$circulos = '';
		
		for ($i = 1; $i <= $numCirculo; $i ++ ) {

			$circulos .= " <td> 
							<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\"> \n 
								<circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"black\"></circle> \n
							</svg> \n 
						 </td>";
	
		};
	
		print "<h2> $numCirculo círculos </h2> \n";
		
		print "<table class=\"conborde\"> \n
				<tbody> \n
					<tr> \n 
						$circulos
					</tr> \n 
				</table> \n
			</tbody> \n ";
?>

  <footer>
    <p>Tomás Piñeiro</p>
  </footer>
</body>
</html>
