<?php include("inc/funciones.php"); ?>
<?php
	function mostrarFormulario($peso="", $altura=""){
?>
		<form action="" method="get">
			<p>Escriba su peso en kilogramos y su altura en cm para calcular su índice de masa corporal.</p>
			
			<p><label for="peso">Peso: </label><input type="text" name="peso" id="peso" value="<?= $peso ?>"/>Kg</p>
			<p><label for="altura">Altura: </label><input type="text" name="altura" id="altura" value="<?= $altura ?>"/>cm</p>	
			
			<p>
			  <input type="submit" name="enviar" value="Calcular">
			  <input type="reset" value="Borrar">
			</p>
		</form>
<?php
	}
?>

<?php 
	function imc($peso, $altura){
		$altura = $altura/100;
		$imc=$peso/(pow($altura,2));
		return round($imc);
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Índice de masa corporal.
    SOLUCIÓN
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link href="css/estilos.css" rel="stylesheet" type="text/css" title="Color" />  
</head>

<body>
  <h1>Índice de masa corporal</h1>
  <h2>SOLUCIÓN</h2>
<?php
	if(!isset($_REQUEST['enviar'])){
		mostrarFormulario();
	}else{
		$peso=recoge('peso');
		$altura=recoge('altura');
		
		$errores="";
		
		if(($peso=="") OR ($peso<=0)){
			$errores.="<li>Debe introducir un peso válido</li>";
		}
		
		if(($altura=="") OR ($altura<=0)){
			$errores.="<li>Debe introducir una altura válido</li>";
		}
		
		if($errores != ""){
			echo "<ul>$errores</ul>";	
			mostrarFormulario($peso, $altura);	
		}else{
			$imc=imc($peso, $altura);
?>  
		  <h2>Su IMC</h2>
			<p>Con un peso de <strong><?= $peso ?> kg</strong> y una altura de <strong><?= $altura ?> cm</strong>, su índice de masa corporal es <strong><?= $imc ?></strong>.</p>

			<p>Un imc muy alto indica obesidad. Los valores "normales" de imc están entre 20 y 25, pero esos límites dependen de la edad, del sexo, de la constitución física, etc.</p>
	<?php
		}
	}
	
?>
	<footer>
		<p>SOLUCIÓN</p>
	</footer>
</body>
</html>
