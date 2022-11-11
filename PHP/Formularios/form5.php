<?php include("funciones.php");?>
<?php // mostrarFormulario 
	function mostrarFormulario($nombre="", $password="", $edad="", $aficiones=[]) {
			
?>
		<form action="" method="GET">
			
			<p> <!-- nombre --> 
				<label for="nombre">Nombre: </label>
				<input type="text" name="nombre" id="nombre" value="<?= $nombre;?>" />
			</p>
			
			<p> <!-- password -->
				<label for="password">Password: </label>
				<input type="password" name="password" id="password" value="<?= $password;?>"/>
			</p>
			
			<p>Edad:
				<input type="radio" name="edad" id="menor" value="menor" 
					<?php if($edad=="menor") { echo "checked";};?>
				/>
				<label for="menor">menor de edad. </label>
					
				<input type="radio" name="edad" id="mayor" value="mayor" 
					<?php if($edad=="mayor") { echo "checked";};?>
				/>
				<label for="mayor">mayor de edad. </label>
			</p>
			
			<p>Aficiones:
				<input type="checkbox" name="aficiones[]" id="cine" value="cine" 
					<?php if(in_array("cine", $aficiones)) { echo "checkbox";};?>
				/>
				<label for="cine">cine: </label>					
				
				<input type="checkbox" name="aficiones[]" id="teatro" value="teatro" 
					<?php if(in_array("teatro", $aficiones)) { echo "checkbox";};?>
				/>
				<label for="teatro">teatro:</label>
						
				<input type="checkbox" name="aficiones[]" id="deporte" value="deporte" 
					<?php if(in_array("deporte", $aficiones)) { echo "checkbox";};?>
				/>
				<label for="deporte">deporte: </label>
						
			</p>
					
			<p> <!-- enviar y limpia -->
				<button type="submit" name="enviar" value="enviar">Enviar datos</button> 
				<button type="reset" name="reset" value="Limpiar" >Boorrar datos</button>
			</p>
		
		</form>
<?php
	} // cierro el formulario
?>

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
				
			if (!isset($_GET['enviar']) ) {
				
				 mostrarFormulario();
				
			} elseif(isset($_REQUEST['limpiar'])) {

					$_REQUEST=[];
					mostrarFormulario();
					
			} else {					
				
				$nombre=recoge('nombre');
				$password=recoge('password');
				$edad=recoge('edad');
				$aficiones=recoge('aficiones',[]);
				
				$errores = "";
				
				if ($nombre == ""){
					
					$errores .= "<li>Debes introducir un nombre </li>";
					
					
				} 
				
				if ($password == ""){ // si no a puesto passsword
					
					$errores .= "<li>Debes introducir un password </li>";
					
				} elseif (strlen($password) <= 8) { // si la passsword es de masiado corta
					
					$errores .= "<li>La passsword debe ser minimo de 8 caracteres</li>";
					$password = "";
					
				}
				
				if ($edad == ""){
					
					$errores .= "<li>Debes introducir un edad </li>";
					
				}
				
				if (empty($aficiones)){ # estp es iun array y esta mal 
				
					$errores .= "<li>Debes introducir un aficiones </li>";
					
				}
				
				if ($errores != "") { //mostrara todos los errores
					
					echo "<lu>$errores</lu>";
					mostrarFormulario($nombre, $password, $edad, $aficiones);
					
				} else {
		?>
					<arcticle>	
						<p>Nombre: <?= $nombre; ?> </p>

						<p>Password: <?= $password; ?></p>

						<p>Edad: <?= $edad; ?></p>

						<p>Aficiones:
							<?php
							
								foreach ($aficiones as $aficion ){
									
									echo $aficion . ' ';
									
								} // fin de foreach de aficiones

							?>
						</p>
					</arcticle>
		
			
		<?php
				} // fin del if de mostrar los errores o no 
			
			} // fin del mostrar formulario 
			
		?>		
			
	</body>
</html>