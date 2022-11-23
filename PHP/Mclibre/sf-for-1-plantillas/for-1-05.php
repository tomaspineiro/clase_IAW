<?php
/**
 * for (1) 5 - for-1-05.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculos de colores numerados y girados.
    for (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculos de colores numerados y girados</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php

	
		define('NUMmIN', 1);
		define('NUMmAX', 10);
		
		$numCirculo = rand(NUMmIN, NUMmAX);
		$circulos = '';
		
		for ($i = 1; $i <= $numCirculo; $i ++ ) {
			
			$color = substr(md5(rand()), 0, 3);
			$num = rand(NUMmIN, (NUMmAX - 1));
			$ratacion = rand();
			
			#echo $color, ' - ', $num,' | ';			
			
			
			$circulos .= "<td> \n
							<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\"  font-size=\"45\"> \n 
								<circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"#$color\"/>\n
								 <text x=\"35\" y=\"50\" text-anchor=\"middle\"".'transform="rotate(-9 35 35)" >'.$num."</text>
							</svg> \n 
						 </td> \n";
	
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
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
