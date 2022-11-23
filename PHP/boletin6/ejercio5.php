<?php include('funciones.php'); ?>
<?php function formulario() {?>
	<form action="" method="GET">
		<p>
			<label for="hora">Hora:</label>
			<input type="number" name="hora" id="hora">
		</p>
		<p>
			<label for="minutos">Minutos:</label>
			<input type="number" name="minutos" id="minutos">
		</p>
		<p>
			<button type="submit" name="enviar" id="enviar">Enviar</button>
		</p>
	</form>
<?php } ?>
<?php
	function mediaNocheEn($hora, $minutos){
		return horasASegundos($hora) + minASegundos($minutos);
	}
	function horasASegundos($hora){
		define('HMEDIANOCHE', 24);
		define('SEGenHORA', 3600);
		$horasFaltan = HMEDIANOCHE - $hora;
		$segundos = $horasFaltan * SEGenHORA;
		
		return $segundos; 
	}
	function minASegundos($minutos){
		define('MINenHORA', 60);
		define('SEGenMIN', 60);
		
		$minFaltan = MINenHORA - $minutos;
		$segundos = $minFaltan * SEGenMIN;
		
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
				$hora = (int)recoge('hora');
				$minutos = (int)recoge('minutos');
				$segundos = mediaNocheEn($hora, $minutos)	
			?>
			<p>
				Este es el total de segundos <?= $segundos; ?>
			</p>
			<?php  } ?>
		</article>
	</body>
</html>