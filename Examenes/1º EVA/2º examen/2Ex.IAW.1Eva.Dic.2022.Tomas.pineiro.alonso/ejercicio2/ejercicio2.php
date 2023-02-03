<?php
$mano = [];

for ($i=0; $i < 6; $i++) {
  
  $mano[$i] = rand(1, 10);

}

$manoJugador1 = $mano[0] + $mano[1] + $mano[2];
$manoJugador2 = $mano[3] + $mano[4] + $mano[5];

if (isset($_COOKIE["jugador2"])) {
  
  $jugador1 = $_COOKIE['jugador1'];
  $jugador2 = $_COOKIE['jugador2'];

} else {

  $jugador1 = 0;
  $jugador2 = 0;

}



if ( ($manoJugador1 == 15) && ( $manoJugador2 == 15 ) ) {
  
  $resultado = "Empate";

} elseif (  ($manoJugador2 > 15) &&  ($manoJugador1 < 15)) {

  $jugador1 =  $jugador1 + 1;
  $resultado = "Haganado el jugador 1";

} elseif ( ($manoJugador1 > 15) &&  ($manoJugador2 < 15)) {

  $jugador2 = $jugador2 + 1;
  $resultado = "Haganado el jugador 2";

  
} elseif ( ( ($manoJugador1 > $manoJugador2 ) || ($manoJugador1 == 15)) || ($manoJugador2 > 15) ) {

  $jugador1 =  $jugador1 + 1;
  $resultado = "Haganado el jugador 1";

} elseif ( (($manoJugador1 < $manoJugador2 ) || ($manoJugador2 == 15 ) ) || ($manoJugador1 > 15)) {

  $jugador2 = $jugador2 + 1;
  $resultado = "Haganado el jugador 2";

  
} elseif (($manoJugador2 > 15) &&  ($manoJugador1 > 15)) {

  $resultado = "Pierden los dos";

}

setcookie('jugador1', $jugador1, time() + 3600);
setcookie('jugador2', $jugador2, time() + 3600);

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Juego del quince. Tomás Piñeiro Alonso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/estilos.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Juego del quince con COOKIES</h1>
	<h1>Tomás Piñeiro Alonso</h1>

    <p>Actualice la página para mostrar otra partida.</p>


    <table style="border-spacing: 10px;">
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
      </tr>
      <tr>
        <td style="border: black 2px solid; padding: 10px;">
					<img src="img/c<?= $mano[0]; ?>.svg" alt="<?= $mano[0]; ?>" height="200" />
					<img src="img/c<?= $mano[1]; ?>.svg" alt="<?= $mano[1]; ?>" height="200" />
					<img src="img/c<?= $mano[2]; ?>.svg" alt="<?= $mano[2]; ?>" height="200" />        
				</td>
        <td style="border: black 2px solid; padding: 10px;">
         <img src="img/c<?= $mano[3]; ?>.svg" alt="<?= $mano[3]; ?>" height="200" />
				 <img src="img/c<?= $mano[4]; ?>.svg" alt="<?= $mano[4]; ?>" height="200" />
				 <img src="img/c<?= $mano[5]; ?>.svg" alt="<?= $mano[5]; ?>" height="200" />        
				</td>
      </tr>
    </table>
		
		<p style="font-size: 200%;"><?= $resultado; ?></p>
		
		<h2>Estadísticas</h2>
			<ul>
				<li>Jugador 1: <?= $jugador1; ?> veces</li>
				<li>Jugador 2: <?= $jugador2; ?> veces</li>
			</ul>
    <footer>
      <p>Tomás Piñeiro Alonso</p>
    </footer>
  </body>
</html>