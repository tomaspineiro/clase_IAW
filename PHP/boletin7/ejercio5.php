<?php include("funciones.php");?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 7 de PHP</title>
	</head>
	<body>
		<h1>Boletin 7 de PHP</h1>
		<article>
			<h5>ejercio 5 </h5>
			<p>
				Adivina un número. Realiza un script en php que te permita adivinar un número aleatorio entre 1 y 100 en un máximo de 5 intentos. Cada vez que el usuario introduce un número, el programa debe darle una pista de si el número que tiene que adivinar es mayor o menor.
			</p>
		</article>
		<form action="" method="GET">
			<p>
				<label for="numUser">Numero: </label>
				<input type="text" name="numUser" id="numUser" value="">
			</p>
			<p>
				<button type="submit" name="submit" id="submit">Enviar</button>
				<button type="reset" name="reset" id="reset">Borrar</button>
			</p>

		</form>		
			
	</body>
</html>