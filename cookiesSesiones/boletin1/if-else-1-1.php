<?php include "funciones.php"; ?>
<?php
/**
 * if ... else ... (1) 1 - if-else-1-1.php
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
    Dos dados.
    if .. elseif ... else ... (1). Sin formularios.
   Tomás Piñeiro Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <section>
    <article>

      <h1>Dos dados</h1>
      
      <p>Actualice la página para mostrar una nueva tirada.</p>
      <a href="https://www.mclibre.org/consultar/php/ejercicios/sin-formularios/if-else-1/index.html#ejercicio-2#ejercicio-1">Enunciado</a>

    </article>
  </section>
  <section>
    <article>
      <?php
      $resultadoTirado = tiradaDados(2);
      ?>
      <table>
        <tr>
          <td><img src="./img/<?= $resultadoTirado[0]; ?>.svg" alt=""></td>
          <td><img src="./img/<?= $resultadoTirado[1]; ?>.svg" alt=""></td>
        </tr>
      </table>
      <?php
        if ($resultadoTirado[0] == $resultadoTirado[1]) {
          
          echo "<p>As sacado una pareja de $resultadoTirado[0]</p>";
        
        } elseif ($resultadoTirado[0] > $resultadoTirado[1]) {
          
          echo "<p>El mayor es $resultadoTirado[0]</p>";
          
        } else {

          echo "<p>El mayor es $resultadoTirado[1]</p>";

        }
      ?> 

    </article>
  </section>



  <footer>
    <p>Tomás Piñeiro Alonso</p>
  </footer>
</body>
</html>
