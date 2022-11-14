<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario 1</title>
	</head>
	<body>
		<h1>Formulario 1</h1>
		<p>Formulario que envia los datos al archivo procesa1.php para mostrarlos</p>
		
		<form action="procesa1.php" method="GET">
			<p>
				<label for="nombre">Nombre: </label>
				<input type="text" name="nombre" id="nombre" />
			</p>
			<p>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password" />
			</p>
			<p>Edad:
				<input type="radio" name="edad" id="menor" value="menor" />
				<label for="menor">menor de edad. </label>
				
				<input type="radio" name="edad" id="mayor" value="mayor" />
				<label for="mayor">mayor de edad. </label>
			</p>
			<p>Aficiones:
			
				<input type="checkbox" name="aficiones[]" id="cine" value="cine" />
				<label for="cine">cine: </label>
				
				<input type="checkbox" name="aficiones[]" id="teatro" value="teatro" />
				<label for="teatro">teatro:</label>
				
				<input type="checkbox" name="aficiones[]" id="deporte" value="deporte" />
				<label for="deporte">deporte: </label>
				
			</p>
			
			<p>
				<button type="submit" name="enviar" value="enviar">Enviar datos</button> 
				<button type="reset" name="reset" value="Limpiar" >Boorrar datos</button>
			</p>
		</form>
		
	</body>
</html>