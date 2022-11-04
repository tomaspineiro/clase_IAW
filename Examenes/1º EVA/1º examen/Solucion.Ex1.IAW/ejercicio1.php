<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejercicio 1. Función Pega al Final
	Tomás Piñiro Alonos 
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css" title="Color">
</head>

<body>
	<?php 
		
		function pegaAlFinal($num, $digito){
			#estaba mal 
			#return "El número $num con el dígito $digito al final es: " . $num . $digito;
			
			#esta es la solucion corecta 
			return $num * 10 + $digito;
		} 
		 
		$num = 125; 
		$digito = 8;
		
		$solucion = pegaAlFinal($num, $digito);
	?>
  <h1>Función Pega al Final</h1>

    <p>
		 El número <?= $num ?> con el dígito <?= $digito ?> al final es:  <?= $solucion ?>
	</p>
	
	
  <footer>
    <p>Tomás Piñiro Alonos</p>
  </footer>
</body>
</html>
