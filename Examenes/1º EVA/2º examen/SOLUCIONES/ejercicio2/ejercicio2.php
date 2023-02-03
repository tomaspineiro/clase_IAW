<?php 	
	if(!isset($_COOKIE['marcJug1'])){
		$marcJug1=0;
		$marcJug2=0;
	}else{
		$marcJug1=$_COOKIE['marcJug1'];
		$marcJug2=$_COOKIE['marcJug2'];
	}
	
	$totJug1=0;
	$totJug2=0;
	
	for($i=0;$i<3;$i++){
		$jug1[]=rand(1,10);
		$totJug1+=$jug1[$i];
		$jug2[]=rand(1,10);
		$totJug2+=$jug2[$i];
	}
	
	if(($totJug1==$totJug2) || ($totJug1>15 && $totJug2>15)){
		$msj="NO gana ninguno :-(";
	}elseif(($totJug1>15) || (($totJug2>$totJug1)&&($totJug2<=15))){
		$msj="Gana jugador 2";
		$marcJug2++;
	}elseif(($totJug2>15) || (($totJug1>$totJug2)&&($totJug1<=15))){
		$msj="Gana jugador 1";
		$marcJug1++;
	}
	
	setCookie('marcJug1', $marcJug1, time()+3600);
	setCookie('marcJug2', $marcJug2, time()+3600);
	
	
?>
	

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Juego del quince. SOLUCIÓN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/estilos.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Juego del quince con COOKIES</h1>
	<h1>SOLUCIÓN</h1>

    <p>Actualice la página para mostrar otra partida.</p>


    <table style="border-spacing: 10px;">
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
      </tr>
      <tr>
        <td style="border: black 2px solid; padding: 10px;">
		<?php
			for($i=0; $i<3; $i++){
		?>
				<img src="img/c<?= $jug1[$i] ?>.svg" alt="<?= $jug1[$i] ?>" height="200" />
		<?php
			}					      
		?>	
		</td>
        <td style="border: black 2px solid; padding: 10px;">
         <?php
			for($i=0; $i<3; $i++){
		?>
				<img src="img/c<?= $jug2[$i] ?>.svg" alt="<?= $jug2[$i] ?>" height="200" />
		<?php
			}					      
		?>	       
		</td>
      </tr>
    </table>
		
		<p style="font-size: 200%;"><?= $msj ?></p>
		
		<h2>Estadísticas</h2>
			<ul>
				<li>Jugador 1: <?= $marcJug1 ?> veces</li>
				<li>Jugador 2: <?= $marcJug2 ?> veces</li>
			</ul>
    <footer>
      <p>SOLUCIÓN</p>
    </footer>
  </body>
</html>