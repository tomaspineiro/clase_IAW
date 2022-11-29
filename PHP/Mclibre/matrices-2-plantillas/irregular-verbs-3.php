<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Irregular verbs 3. Matrices (2).
    Tomás Piñeiro Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <article>
    <h1>Irregular verbs 3</h1>
    <p>
    Escriba un programa que haga lo mismo que el del ejercicio anterior, pero que conste de una sola página:
    </p>
    <ul>
      <li>Se solicita una forma verbal, elegida al azar.</li>
      <li>Si se recibe una respuesta, se indica si es correcta o no.</li>
    </ul>

    <h6>Enuciado</h6>
    <p><a href="https://www.mclibre.org/consultar/php/ejercicios/con-formularios/matrices-2/index.html" target="_blank">Enuciados</a> </p>
  </article>
  <form action="irregular_verbs_3.php" method="get">
  <p>
        <label for="respuesta">¿Cuál es el <strong><?= $verboLista[0];?></strong> de <strong><?= $verboLista[1];?></strong>?</label>
        <input type="text" name="respuesta" id="respuesta">
      </p>
      <p>
        <input type="hidden" name="verboIngles" id="verboIngles" value="<?= $verboLista[2];?>">
        <input type="hidden" name="tiempoVerbal" id="tiempoVerbal" value='<?= $verboLista[0];?>'>
        <input type="hidden" name="spanisVerbal" id="spanisVerbal" value='<?= $verboLista[1];?>'>

      </p>
  <?php  
      $respuesta = recoge('respuesta');
      $tiempoVerbal = recoge("tiempoVerbal");
      $spanisVerbal = recoge("spanisVerbal");
      $verboIngles = recoge('verboIngles');

      if ($respuesta == $verboIngles) {
    ?>
      
      <p>¡Respuesta correcta!</p>

    <?php 
      } else {
    ?>
        <p>¡Respuesta incorrecta!</p>
    <?php
      }
    ?>
    <p>
      <input type="submit" value="Corregir">
      <input type="reset" value="Borrar">
    </p>
  </form>
  <?php  
  if ()
      $respuesta = recoge('respuesta');
      $tiempoVerbal = recoge("tiempoVerbal");
      $spanisVerbal = recoge("spanisVerbal");
      $verboIngles = recoge('verboIngles');

      if ($respuesta == $verboIngles) {
    ?>
      
      <p>¡Respuesta correcta!</p>

    <?php 
      } else {
    ?>
        <p>¡Respuesta incorrecta!</p>
    <?php
      }
    ?>
    <p>
      <input type="submit" value="Corregir">
      <input type="reset" value="Borrar">
    </p>
  </form>
  <p><a href="irregular-verbs-3.php"><button>Reiniciar</button></a></p>

  <footer>
    <p>Tomás Piñeiro Alonso</p>
  </footer>
</body>
</html>