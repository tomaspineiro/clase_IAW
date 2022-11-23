<?php include('funciones.php'); ?>
<?php function formulario($dni = '') { ?>
	<form action="" method="GET">
		<p>
			<label for="dni">DNI: </label>
			<input type="text" name='dni' id="dni" value="<?= $dni; ?>">
		</p>
		<p>
			<button type="submit" name="enviar" id="enviar">Enviar</button>
			<button type="submit" name="reset" id="reset">Borrar</button>
		</p>
	</form>
<?php } ?>
<?php
	function dniCorrecto($dni) {
		$letra = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E',);
		if ((strlen($dni) != 9)	or (in_array($dni[8],$letra) == 0)) {
			return false;
		}
		$dniCorto = substr($dni, 0, -1);
		$dniNum = (int)$dniCorto;
		$comprobador = $dniNum % 23; 
		if ($letra[$comprobador] == strtoupper($dni[8])){
			return true;
		} else {
			return false;
		}
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
			<h5>ejercio 1 </h5>
			<p>
				Pide al usuario que introduzca los números de su DNI y calcula su letra sabiendo que la letra se calcula. Tomamos el número completo de hasta 8 cifras de nuestro DNI, lo dividimos entre 23 y nos quedamos con el resto de dicha división, o dicho de otro modo, calculamos el módulo 23 del DNI
			</p>
		</article>
		<?php if (!isset($_REQUEST['enviar'])) {
				formulario();
		} else { 
			
			$dni = recoge('dni');	
			
			if (!dniCorrecto($dni)) {
				formulario();
		?>
			<p>
				esta mal 
			</p>
		<?php } else { ?>
			<p>esta bien</p>		
		<?php
			}
		}
		?>	
	</body>
</html>