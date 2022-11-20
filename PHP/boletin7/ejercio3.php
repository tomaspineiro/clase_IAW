<?php include("funciones.php");?>
<?php 
	function formulario($contador = 0, $numTotal = 0) {  // formulario
?>
		<form action="" method="GET">
			<p>
				<label for="numero">Numero: </label>
				<input type="namber" name="numero" id="numero"/>
			</p>
			<p>
				<input type="hidden" nume='contador' id='contador' value='<?= $contador; ?>'>
				<input type="hidden" nume='numTotal' id='numTotal' value='<?= $numTotal; ?>'>
			</p>
			<p>
				<button type="submit" name="enviar" value="enviar">Enviar datos</button> 
				<button type="reset" name="reset" value="Limpiar" >Boorrar datos</button>
			</p>
		</form>

<?php
	}; // cerramos el formulario
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
		
			formulario();
			
		?>		
			
	</body>
</html>