<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejercio Clase de PHP</title>
		<?php 
			function esBisiesto($year){
				if((!($year%4) && ($year%100)) || !($year%400)){
					return TRUE;
				}else{
					return FALSE;
				}
			}
			
			function diasMes(int $m, int $a){
				
				$meses =array( 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
				
				if ( esBisiesto($a)) {
					
					$meses[1] = $meses[1] + 1;
					
				};
				
				return $meses[$m -1];
			}
			
			function imprimeCalendario(int $dias) {
				
				
				
				
				echo "<table border='1'> \n
						<tbody> \n";
				#cuerpo del caledario	
				
				#Cabecera del calendario 
				echo "<tr>  <th>L</th> <th>M</th> <th>M</th> <th>J</th> <th>V</th> <th>S</th>  <th>D</th> 
				</tr>
				";
				$cont = 0;
				for ( $i = 1; $i <= $dias; $i++){
					
					if ($cont == 0){
						echo  "<tr> \n ";
					}
						
					echo " <td>  $i </td> \n";
					$cont++;
					
					if ($cont == 7){
						echo "</tr> \n ";
						$cont = 0;
					}
				}
		
				echo "	</tbody>\n
					 </table>  \n ";					 
						

			}
		?>
	</head>
	<body>
		<h1>ejercio Clase de PHP</h1>
		<h5>ejercio Clase Calendario </h5>
		
		<?php
		
			$mes = rand(1,12);
			$anio = rand(1920, 2020);
			
			echo  $mes . ' ' . $anio;
			
			echo '</br>';
			echo '----------------------------------------------------';
			echo '</br>';
			
			 imprimeCalendario(diasMes($mes,$anio));
		?>		
			
	</body>
</html>