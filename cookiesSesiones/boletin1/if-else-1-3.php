<?php session_start(); ?>
<?php include "funciones.php"; ?>
<?php
/**
 * if ... else ... (1) 3 - if-else-1-3.php
 *
 * @author Tomás Piñeiro Alonso
 *
 */
?>

<?php 
$resultadoTirado = tiradaDados(4);
$TiradaJugador1 = $resultadoTirado[0] + $resultadoTirado[1];
$TiradaJugador2 = $resultadoTirado[2] + $resultadoTirado[3];
$jugador1 = $_SESSION['jugador1'];
$jugador2 = $_SESSION['jugador2'];
$tiradas = $_SESSION['tiradas'];
$empates = $_SESSION['empates'];

if ($TiradaJugador1 == $TiradaJugador2) {

  $empates++;
  $_SESSION['empates'] = $empates;

} elseif ($TiradaJugador1 > $TiradaJugador2 ) {

  $jugador1++;
  $_SESSION['jugador1'] = $jugador1;

} elseif ($TiradaJugador1 < $TiradaJugador2) {

  $jugador2++;
  $_SESSION['jugador2'] = $jugador2;

}

$tiradas++;
$_SESSION['tiradas'] = $tiradas;




?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dos dados más altos. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Tomás Piñeiro Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <section>

    <h1>Juego: Dos dados más altos</h1>
    
    <p>Actualice la página para mostrar una nueva tirada.</p>
    <a href="https://www.mclibre.org/consultar/php/ejercicios/sin-formularios/if-else-1/index.html#ejercicio-2#ejercicio-3">Enunciado</a>
  </section>
  <section>

  
    <table>
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
        <th>Resultado</th>
      </tr>
      <tr>
        <td bgcolor="blue">
          <img src="./img/<?= $resultadoTirado[0]; ?>.svg" alt="">
          <img src="./img/<?= $resultadoTirado[1]; ?>.svg" alt="">
        </td>
        <td bgcolor="red">
          <img src="./img/<?= $resultadoTirado[2]; ?>.svg" alt="">
          <img src="./img/<?= $resultadoTirado[3]; ?>.svg" alt="">
        </td>
        <td>
          <ul>
            <li>jugador1: <?= $jugador1; ?></li>
            <li>jugador2: <?= $jugador2; ?></li>
            <li>Empates: <?= $empates; ?></li>
            <li>Tiradas Total: <?= $tiradas; ?></li>
          </ul>  
        </td>
      </tr>
    </table>
    <form action="if-else-1-3.php" method="post">
      <p>
        <input type="submit" value="Tirar!" name="tirar" id="tirar"> 
        <input type="submit" value="reiniciar" name="reiniciar" id="reiniciar">
      </p>
    </form>
  </section>
    <footer>
      <p>Tomás Piñeiro Alonso</p>
    </footer>
  </body>
  </html>
  