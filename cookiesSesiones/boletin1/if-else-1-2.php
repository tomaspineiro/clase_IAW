<?php include "funciones.php"; ?>
<?php
/**
 * if ... else ... (1) 2 - if-else-1-2.php
 *
 * @author Tomás Piñeiro Alonso
 *
 */
?>
<?php 
  if ((isset($_REQUEST['reniciar'])) && ($_REQUEST['reniciar'] != "")) {
    
    $_REQUEST['renicaiar'] = "";
    
    setcookie('jugador1', 0, time()-60*60*2);
    setcookie('jugador2', 0, time()-60*60*2);
    setcookie('empates', 0, time()-60*60*2);
    setcookie('tiradas', 0, time()-60*60*2);
    
  }
  
  if (!isset($_COOKIE['tiradas'])) {
    
    setcookie('jugador1', 0, time()+60*60*2);
    setcookie('jugador2', 0, time()+60*60*2);
    setcookie('empates', 0, time()+60*60*2);
    setcookie('tiradas', 0, time()+60*60*2);
    
  }
  
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
      if ($resultadoTirado[0] == $resultadoTirado[1]) {
        
        $empates = $_COOKIE['empates'];
        $empates = $empates + 1;
        setcookie('empates',$empates, time() + 60*60*2);
      
      } elseif ($resultadoTirado[0] > $resultadoTirado[1]) {
          
        $jugador1 = $_COOKIE['jugador1'];
        $jugador1 = $jugador1 +1;
        setcookie('jugador1', $jugador1,time() + 60*60*2);
        
      } else {
        
        $jugador2 = $_COOKIE['jugador2'];
        $jugador2 =  $jugador2 + 1;
        setcookie('jugador2', $jugador2,time() + 60*60*2);
        
      }

      $tiradas = $_COOKIE['tiradas'];
      $tiradas =  $tiradas + 1;
      setcookie('tiradas', $tiradas, time()+60*60*2);

    ?> 
      
    <table>
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
        <th>Resultado</th>
      </tr>
      <tr>
        <td><img src="./img/<?= $resultadoTirado[0]; ?>.svg" alt=""></td>
        <td><img src="./img/<?= $resultadoTirado[1]; ?>.svg" alt=""></td>
        <td>
          <ul>
            <li>jugador1: <?= $_COOKIE['jugador1']; ?></li>
            <li>jugador2: <?= $_COOKIE['jugador2']; ?></li>
            <li>Empates: <?= $_COOKIE['empates']; ?></li>
            <li>Tiradas Total: <?= $_COOKIE['tiradas']; ?></li>
          </ul>  
        </td>
    </tr>
  </table>
  <form action="if-else-1-2.php" method="post">
    <p>
      <input type="submit" value="Tirar!" name="tirar" id="tirar"> 
      <input type="submit" value="Reniciar Partida" name="reniciar" id="reniciar">
    </p>
  </form>
</section>

  <footer>
    <p>Tomás Piñeiro Alonso</p>
  </footer>
</body>
</html>
