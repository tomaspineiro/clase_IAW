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
		
		if ((strlen($dni) != 8)) {
			return FALSE;
		}
		
		return TRUE;
		
	}
	function digitosDNICorectos($dni){

		$dni = (int)$dni;
		$comprobador = $dni % 23; 

		if (($comprobador >= 0) && ($comprobador < 23)) {
			
			return TRUE;
		}

		return FALSE;

	}

	function letraDNI($dni) {
		$letra = 'TRWAGMYFPDXBNJZSQVHLCKE';

		$dni = (int)$dni;
		$comprobador = $dni % 23; 
	
		return $letra[$comprobador];
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
			
			$errores = "";
				
			if ($dni == "") {
					
					$errores .= "<li>Debes introducir un dni </li>";
						
			} 
			if (!dniCorrecto($dni)) {
			
				$errores .= "<li>El dni tiene 8 digitos </li>";
			
			}
			if (!digitosDNICorectos($dni)) {
				$errores .= "<li>Los digitos del dni no son corectos </li>";
			}
		
			if ($errores != "") {
				
				echo "<lu>$errores</lu>";
				formulario();
			
		 	} else { ?>

			<p> El DNi con digitos <?= $dni ?>tiene una letra <?= letraDNI($dni)?></p>		

			<?php
			}
		}
		?>	
	</body>
</html>