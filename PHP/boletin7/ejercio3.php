<?php include("funciones.php");?>
<?php
	function formulario($contador = 0, $totalImpar = 0, $contImpar = 0, $maxPar = 0) {
?>
		<form action="" method='GET'>
			<p>
				<label for="numero">Numero: </label>
				<input type="number" name="numero" id="numero"/>
			</p>
			<p>
				<input type="hidden" name="contador" id="contadar" value="<?= $contador; ?>">
				<input type="hidden" name="totalImpar" id="totalImpar" value="<?= $totalImpar; ?>">
				<input type="hidden" name="contImpar" id="contImpar" value="<?= $contImpar; ?>">
				<input type="hidden" name="maxPar" id="maxPar" value="<?= $maxPar; ?>">
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
	function parOImpar($numero) { // esto funcion es para saber que nuemros son pares o impares
		
		if ( ($numero%2) == 0) {
			
			//entra aqui si es par
			return TRUE;
	
		}

		//  Impar 
		return FALSE;

	}

	function procesoDatos() { // Esta es una funcion para procesar los datos. 
		
		#proceso de datos 
		$numero = (int)recoge('numero');
		$contador = (int)recoge('contador');
		$totalImpar = (int)recoge('totalImpar');
		$contImpar = (int)recoge('contImpar');
		$maxPar = (int)recoge('maxPar');
	
		$lista = ['numero' => $numero, 'totalImpar' => $totalImpar, 'contImpar' => $contImpar,'maxPar' => $maxPar, 'contador' => $contador ];

		return $lista;
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
				
				$lista = procesoDatos();

				if (parOImpar($lista['numero']) && ($lista['numero'] > $lista['maxPar'])) {
					
					$lista['maxPar'] = $lista['numero'];
			
				} elseif (!parOImpar($lista['numero'])){
			
					$lista['contImpar']++;
					$lista['totalImpar'] += $lista['numero'];

				}
				
				formulario($lista['contador'], $lista['totalImpar'], $lista['contImpar'], $lista['maxPar']);

			} elseif (isset($_REQUEST['enviar']) && (int)recoge('numero') < 0 ) {

				$lista = procesoDatos();
	 
		?>
				<article>
					<h1>Resultado</h1>
					<ul>
						<li> La media de los impares: <?= $lista['totalImpar'] / $lista['contImpar'] ?> </li>
						<li> El mayor de los pares: <?= $lista['maxPar'] ?> </li>
						<li> Se an introducido un total de numeros: <?= $lista['contador'] ?> </li>
					</ul>
				</article>
		<?php
			}
		?>
	</body>
</html>