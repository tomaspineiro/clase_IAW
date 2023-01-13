<?php
/**
 * if ... else ... (1) 2 - if-else-1-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<?php
$jug1 = rand(1, 6);
$jug2 = rand(1, 6);

if (isset($_COOKIE['jugador1'])){
  
  $jugador1 = $_COOKIE['jugador1'];
  $jugador2 = $_COOKIE['jugador2'];

} else {
  
  $jugador1 = $jugador2 = 0;

}

//calcular resultado
if ($jug1 > $jug2) {
 
  $resultado = "Ha ganado el jugador 1";
  $jugador1++;

} elseif ( $jug2 > $jug1 ) {

  $resultado = "Ha ganado el jugador 2";
  $jugador2++;
  
} else {

  $resultado = "Empate";

}

//actulaizar cookies con los martcadores 
setcookie('jugador1', $jugador1, time() + 3600);
setcookie('jugador2', $jugador2, time() + 3600);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dado más alto. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Juego: Dado más alto</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <table>
    <tr>
      <td colspan="3"><h2>Marcador: <?= $jugador1; ?> - <?= $jugador2; ?></h2></td>
    </tr>
    <tr>
      <th>Jugador 1</th>
      <th>Jugador 2</th>
      <th>Resultado</th>
    </tr>
    <tr>
      <td style="background-color: blue;">
        <img src="img/<?= $jug1; ?>.svg" alt="<?= $jug1; ?>">
      </td>
      <td style="background-color: red;">
        <img src="img/<?= $jug2; ?>.svg" alt="<?= $jug2; ?>">
      </td>
      <td>
        
        <h2><?= $resultado; ?></h2>
      </td>
    </tr>
  </table>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
