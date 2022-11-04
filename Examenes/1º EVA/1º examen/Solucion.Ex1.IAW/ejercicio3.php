<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejercicio 3. Día Siguiente
    Tomás Piñiro Alonos
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css" title="Color">
    <?php include("include/funciones.php"); ?>
</head>

<body>
	<?php 
		function diaSiguiente(int $dia, int $mes, int $anio){
			$fechaIncial = "$dia/$mes/$anio";
			
			#este array esta mal por que julio y agosto tiene los dos 31 dias 
			#$meses =array( 31, 28,31, 30, 31, 30,31,30,31,30,31,30);
			
			# este arrray esta bien 
			$meses =array( 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
			
			if ( esBisiesto($anio)) {
				#echo "el año es Bisesto ";
			
				$meses[1] = $meses[1] + 1;
				
				#esto era para comprobar si  estaba funcionado bien o mal. Y estaba funcionando bien, meti un año mal puse 1922 que no es bisieto en lugar de 1992 que si era bisieto. 
				#print_r($meses);
				#echo "</br>";
				
			};
			
			#print_r($meses);
			#echo "</br>";
			
			# el error esta en esta linia es (12 > $mes) que tenia que ser 
			if (($dia == $meses[$mes - 1]) and (12 > $mes)){
				#Pasamos al siguinetd mes 
				$dia = 1;
				$mes = $mes + 1;
				
			}elseif (($dia == $meses[$mes - 1]) and (12 == $mes)){
				
				#cambiamos de año
				$dia = 1;
				$mes = 1;
				$anio = $anio + 1;
				
			# esta operacion logica es al reves 
			# }elseif ($dia > $meses[$mes -1]) { :: esta linea esta mal 
			}elseif ($dia < $meses[$mes -1]) {
				# es el mismo mes y año, solo cambia el dia
				$dia = $dia + 1;
			};
			
			$fechaFinal = "$dia/$mes/$anio";
			
			return "El dia siguiente al $fechaIncial es el $fechaFinal";
		}
	
		
		
	?>
  <h1>Función Día Siguiente</h1>

    <p>
		<?php 
			echo diaSiguiente(13, 5, 2022);
			echo "</br>";
			
			echo diaSiguiente(28,2,1992);
			echo "</br>";
			
			echo diaSiguiente(28,2,2022);
			echo "</br>";
			
			echo diaSiguiente(31,12,2022);
			echo "</br>";
			
		?>
	</p>    
	
  <footer>
    <p>Tomás Piñiro Alonos</p>
  </footer>
</body>
</html>
