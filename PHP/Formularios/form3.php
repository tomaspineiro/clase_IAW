<?php include("funciones.php");?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>formulario de PHP</title>
	</head>
	<body>
		<h1>formulario  3</h1>
		
		<p> formulario en el que los dats se muestran en el mismo archivo, Pero se limpian la enrea de datos con la funcion recoge() que hay en el archivo funcones.php </br> no se valida si quedan en blanco, aun que ahora ya no da error.  </p>
		
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
				
				$nombre=recoge('nombre');
				$password=recoge('password');
				$edad=recoge('edad');
				$aficiones=recoge('aficiones',[]);
				
		?>
		
		<arcticle>	
			<p>Nombre: <?= $nombre; ?> </p>

			<p>Password: <?= $password; ?></p>

			<p>Edad: <?= $edad; ?></p>

			<p>Aficiones:
				<?php
				
					foreach ($aficiones as $aficion ){
						echo $aficion . ' ';
					}

				?>
			</p>
		</arcticle>
		
		<?php
			
			}
			
		?>		
			
	</body>
</html>