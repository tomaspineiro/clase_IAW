<?php include "funciones.php"; ?>
<?php
/**
 * if ... else ... (1) 2 - if-else-1-2.php
 *
 * @author Tomás Piñeiro Alonso
 *
 */
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dado más alto. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Tomás Piñeiro Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <section> 
    <article>
      <h1>Juego: Dado más alto</h1>
      
      <p>Actualice la página para mostrar una nueva tirada.</p>
      <a href="https://www.mclibre.org/consultar/php/ejercicios/sin-formularios/if-else-1/index.html#ejercicio-2#ejercicio-2">Enunciado</a>
    </article>
    <hr>
  </section>
  <section>
    <?php $resultadoTirado = tiradaDados(2); ?>
    <?php 
<<<<<<< HEAD
      
      $reiniciar = FALSE;

      if (isset($_REQUEST['reiniciar'])) {
        $reiniciar = ($_REQUEST['reiniciar'] == "reiniciar") ? TRUE : FALSE;

      }

      if (!isset($_COOKIE['tiradas']) || ($reiniciar == TRUE)) {
=======
      if (!isset($_COOKIE['tiradas']) || ($_REQUEST['reiniciar'] == "reiniciar")) {
>>>>>>> cookiesSesiones
        
        setcookie('jugador1', 0, time()+60*60*2);
        setcookie('jugador2', 0, time()+60*60*2);
        setcookie('empates', 0, time()+60*60*2);
        setcookie('tiradas', 0, time()+60*60*2);
        ?>
      <form action="">
        <input type="hidden" value="" name="reiniciar" id="reiniciar">
        <input type="submit" value="Empezar a jugar. " name="jugar" id="jugar">
      </form>
    <?php
      } else {
        
        $empates = $_COOKIE['empates'];
        $jugador1 = $_COOKIE['jugador1'];
        $jugador2 = $_COOKIE['jugador2'];
        $tiradas = $_COOKIE['tiradas'];

        if ($resultadoTirado[0] == $resultadoTirado[1]) {
          
          
          $empates++;
          setcookie('empates',$empates, time() + 60*60*2);
        
        } elseif ($resultadoTirado[0] > $resultadoTirado[1]) {
            
         
<<<<<<< HEAD
          $jugador1++;
=======
          $jugador1 = $jugador1 +1;
>>>>>>> cookiesSesiones
          setcookie('jugador1', $jugador1,time() + 60*60*2);
          
        } else {
          
          
<<<<<<< HEAD
          $jugador2++;
=======
          $jugador2 =  $jugador2 + 1;
>>>>>>> cookiesSesiones
          setcookie('jugador2', $jugador2,time() + 60*60*2);
          
        }

     
<<<<<<< HEAD
        $tiradas++;
=======
        $tiradas =  $tiradas + 1;
>>>>>>> cookiesSesiones
        setcookie('tiradas', $tiradas, time()+60*60*2);
    ?> 
    <table>
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
        <th>Resultado</th>
      </tr>
      <tr>
        <td bgcolor="blue">
          <img src="./img/<?= $resultadoTirado[0]; ?>.svg" alt="">
        </td>
        <td bgcolor="red">
          <img src="./img/<?= $resultadoTirado[1]; ?>.svg" alt="">
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
  <form action="if-else-1-2.php" method="post">
    <p>
      <input type="submit" value="Tirar!" name="tirar" id="tirar"> 
      <input type="submit" value="reiniciar" name="reiniciar" id="reiniciar">
<<<<<<< HEAD

=======
>>>>>>> cookiesSesiones
    </p>
  </form>
  <?php } ?>
</section>

  <footer>
    <p>Tomás Piñeiro Alonso</p>
  </footer>
</body>
</html>
