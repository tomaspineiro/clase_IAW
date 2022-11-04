<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejercicio 2. Cajero
    Tomás Piñiro Alonos 
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css" title="Color">
</head>

<body>
	<?php 
		function cajero($saldo, $cantidad, $opcion) {
			
			#este esta mal por que no me acordaba como se escribia la plabra eresebada break 
			
			/*
			esta opcion esta bien pero es muy repetitivo 
			switch($opcion){
				case 1; # ingreso 
					echo "Saldo antes: $saldo €, saldo después: " . $saldo + $cantidad ." €";
					break;
				case 2; # retirada 
					echo "Saldo antes: $saldo €, saldo después: " . $saldo - $cantidad ." €";
					break;
				default; # la opcion no exite 
					echo "Saldo antes: $saldo €, ¡¡¡ Error !!! saldo después: $saldo €";
			}
			*/
			
			# esta seria una solucion mas limpia 
			echo "Saldo antes: $saldo €,";
			switch($opcion){
				case 1; # ingreso 
					$saldo = $saldo + $cantidad ;
					break;
				case 2; # retirada 
					$saldo = $saldo - $cantidad ;
					break;
				default; # la opcion no exite 
					echo " ¡¡¡ Error !!! ";
					
			}
			echo "saldo después: $saldo € ";
		}
	?>
  <h1>Función Cajero</h1>

    <p>
		<?= cajero(125, 25, 5);?>
		</br>
		<?= cajero(125, 25, 1);?>
		</br>
		<?= cajero(125, 25, 2);?>
	</p>    
	
  <footer>
    <p>Tomás Piñiro Alonos</p>
  </footer>
</body>
</html>
