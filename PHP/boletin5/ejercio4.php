<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 5 de PHP</title>
		<?php include("funciones.php") ?>
	</head>
	<body>
		<h1>Boletin 5 de PHP</h1>
		<h5>ejercio 4 </h5>
		<?php
			/*
			Realiza un programa que rellene un array con la temperatura media (aleatoria)  que ha hecho en cada mes de un determinado año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras del diagrama se pueden dibujar a base de la concatenación de una imagen.
			*/

			$temperaturas = arrayNumeros(12, 13, 28);
			$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
			
			$clima = ordenKeyValor($meses, $temperaturas);
			#print_r($clima);
			
			echo "
			<table border=\" black solid 1px \" > \n
				<tbody> \n";
			

			foreach ($clima as $mes => $temperatura) {
				
				echo '<tr>';
				echo " <th>$mes</th> ";
				
				for ($i=0; $i < $temperatura ; $i++) { 
					echo "<td>#</td>";
				};
				
				/*
				for ($i=$temperatura; $i < ($temperatura + 10); $i++) { 
					
					echo '<td>&nbsp</td>';
					
				}
				*/
				echo '</tr>';
			}

			echo "
				</tbody> \n
			</table> \n ";
		/*
			echo '</br>';
			print_r($temperatura);
			echo '</br>';
			echo '</br>';
			print_r($meses);
		*/

		?>		
			
	</body>
</html>