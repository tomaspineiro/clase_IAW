<?php include('funciones.php'); ?>
<?php function formulario($hora = "", $minutos = "") {?>
	<form action="" method="GET">
		<p>
			<label for="hora">Hora:</label>
			<input type="number" name="hora" id="hora" value="<?= $hora; ?>">
		</p>
		<p>
			<label for="minutos">Minutos:</label>
			<input type="number" name="minutos" id="minutos" value="<?= $minutos; ?>">
		</p>
		<p>
			<button type="submit" name="enviar" id="enviar">Enviar</button>
		</p>
	</form>
<?php } ?>
<?php
	function mediaNocheEn($hora, $minutos){
		define('HMEDIANOCHE', 24);
		define('MINenHORA', 60);

		$horasFaltan = HMEDIANOCHE - $hora;
		$minFaltan = MINenHORA - $minutos;
		
		return horasASegundos($horasFaltan) + minASegundos($minFaltan);
	}
	function horasASegundos($horas){
		
		define('SEGenHORA', 3600);
		
		$segundos = $horas * SEGenHORA;
		
		return $segundos; 
	}
	function minASegundos($minutos){
		
		define('SEGenMIN', 60);
		
		
		$segundos = $minutos * SEGenMIN;
		
		return $segundos;
	} 
?>		
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 6 de PHP</title>
	</head>
	<body>
		<h1>Boletin 6 de PHP</h1>
		<article>
			<h5>ejercio 5 </h5>
			<p>
				Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche.
			</p>
		</article>
		<article>
			<?php if (!isset($_REQUEST['enviar'])) { 
				formulario();
			} else {
				$hora = recoge('hora');
				$minutos =recoge('minutos');
				
				$errores = "";

				if ($hora == "" ) {

					$errores .= "<li> Tines que introducir una hora </li>";

				}
				if ($minutos == "") {

					$errores .= "<li> Tines que introducir los minutos </li>";
				
				}
				if (((int)$hora >= 0) && ((int)$hora <= 24)) {
					
					$errores .= "<li> Las horas no pueden ser menores de 0 o mas de 24 </li>";
				
				}
				if (((int)$minutos >= 0) && ((int)$minutos <= 60)) {
					
					$errores .= "<li> los minutos no pueden ser menores de 0 o mas de 60 </li>";
				
				}
				

				if ($errores != "") {
					
					echo "<lu>$errores</lu>";
					formulario($hora, $minutos);

				} else {
					
					$segundos = mediaNocheEn((int)$hora, (int)$minutos)	
					
					?>
			<p>
				Este es el total de segundos <?= $segundos; ?>
			</p>
			<?php  } 
			} ?>
		
		</article>
	</body>
</html>