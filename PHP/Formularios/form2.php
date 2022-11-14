<!DOCTYPE html>
<html lang="es">
	<head>
		<title>formulario de PHP</title>
	</head>
	<body>
		<h1>formulario  2</h1>
		
		<p> formulario en el que los dats se muestran en el mismo archivo </br> no se valida si quedan en blanco </p>
		
		<?php
			//if (empty($_GET)){
				
			if (!isset($_GET['enviar'])) {
		?>
		<form action="" method="GET">
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
		
		
		<?php

			}else {
				
		?>
		
		<arcticle>	
			<p>Nombre: <?php echo $_REQUEST['nombre']; ?> </p>

			<p>Password: <?php echo $_REQUEST['password']; ?></p>

			<p>Edad: <?php echo $_REQUEST['edad']; ?></p>

			<p>Aficiones:
				<?php 
					foreach ($_REQUEST['aficiones'] as $i ){
						echo $i . ' ';
					}
				?>
			</p>
		</arcticle>
		<?php
			
			}
			
		?>		
			
	</body>
</html>