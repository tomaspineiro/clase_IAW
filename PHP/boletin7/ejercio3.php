<?php include("funciones.php");?>
<?php
	function formulario($contador = 0, $totalImpar = 0, $contInpar = 0, $maxPar = 0) {
?>
		<form action="" method='GET'>
			<p>
				<label for="numero">Numero: </label>
				<input type="number" name="numero" id="numero"/>
			</p>
			<p>
				<input type="hadden" name="contador" id="contadar" value="<?= $contador; ?>">
				<input type="hadden" name="totalImpar" id="totalImpar" value="<?= $totalImpar; ?>">
				<input type="hadden" name="contInpar" id="contInpar" value="<?= $contInpar; ?>">
				<input type="hadden" name="maxPar" id="maxPar" value="<?= $maxPar; ?>">
			</p>
			<p>
				<button type='submit' name='enviar' value='enviar' > Enviar Formulario</button>
				<button type="reset" name="reset" value='reset'>Borrar</button>	
			</p>
		</form>
<?php
	} //fin Formulario
?>
<?php
	function parOImpar($numero) {
		if ( ($numero%2) == 0) {
			return TRUE;
		}
		return FALSE;
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 7 de PHP</title>
	</head>
	<body>
		<h1>Boletin 7 de PHP</h1>
		<article>
			<h5>ejercio 3 </h5>
			<p>
				Realiza un programa que vaya pidiendo números hasta que se introduzca un número negativo y nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye en el cómputo.
			</p>
		</article>
		
		<?php  
			if (!isset($_REQUEST['enviar'])) {
				formulario();
			} elseif (((int)recoge('numero') > 0 ) 	&& (isset($_REQUEST['enviar']))) {
				$numero = (int)recoge('numero');
				$totalImpar = (int)recoge('totalImpar');
				$contImpar = (int)recoge('contImpar');
				$maxPar = (int)recoge('max$maxPar');


				formulario($contador, $totalImpar, $contInpar, $maxPar);

			}
		?>
		
			
			
			
	</body>
</html>