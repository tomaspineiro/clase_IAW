<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejercio Clase de PHP</title>
	</head>
	<body>
		<h1>ejercio Clase de PHP</h1>
		<h5>ejercio Clase 2 array </h5>
		<?php
			//
			
			$compra = array('libreria' => array('lapices', 'bolis'), 'carniceria' => array('chuleta', 'carne picada', 'pollo'), 'fruteria' => array('platano','samdia'));
			/*
			echo "</br>";
			echo "---------------------------------------------";
			echo "</br>";
			
			print_r($compra);
			
			echo "</br>";
			echo "---------------------------------------------";
			echo "</br>";
			
			foreach($compra as $i => $v){
				
				echo "La tienda $i </br>";
				print_r($compra[$i]);
				#print_r($compra[$v]);
				print($v);
				#print($compra[$i]);
				#echo $compra[$i];
				#echo $v;
				echo "</br>";
			};			
			echo "</br>";
			echo "---------------------------------------------";
			echo "</br>";
			
			
			foreach($compra as $i){
				
				echo "La tienda $i </br>";
				print_r($compra[$i]);
				#print_r($compra[$v]);
				print($v);
				#print($compra[$i]);
				#echo $compra[$i];
				#echo $v;
				echo "</br>";
			};			
			echo "</br>";
			echo "---------------------------------------------";
			echo "</br>";
			
			foreach($compra as $i  => $v ){
				
				echo "$i:";
				
				foreach($compra[$i] as $j  => $l){
				
					echo "</br>";
					echo "&nbsp&nbsp&nbsp&nbsp · " . $compra[$i][$j];				
					
				}
				echo "</br>";
				echo "</br>";
			};			
			echo "</br>";
			echo "---------------------------------------------";
			echo "</br>";
			*/
			/*
				<ol>
					<lu> titulo </lu>
					<li>txt</li>
					...
					<li> txt
						<ol>
							<li>txt</li>
							...
						</ol>
					</li>
					<li></li>
					...
				</ol>
			*/
			echo "</br>";
			echo "---------------------------------------------";
			echo "</br>";
			echo '<ol>';
			echo '<h6> LISTA DE LA COMPRA </h6>';
			foreach($compra as $i  => $v ){
				
				echo "<li>$i:";
					echo '<ol>';
					foreach($compra[$i] as $j  => $l){
					
						echo "<li> " . $compra[$i][$j] . '</li>';				
						
					}
						echo '</ol>';
				echo "</li>";

			};
			echo '</ol>';			
			
			echo "</br>";
			echo "---------------------------------------------";
			echo "</br>";
			
		?>		
			
	</body>
</html>