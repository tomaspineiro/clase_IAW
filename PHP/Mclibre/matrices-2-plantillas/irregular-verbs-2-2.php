<?php include 'funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Irregular verbs 2 (Resultado). Matrices (2).
    Tomás Piñeiro Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>
<body>
  <article>
    <h1>Irregular verbs 2 (Resultado)</h1>
    <p>
      Escriba un programa que conste de dos páginas para practicar los verbos irregulares ingleses:
    </p>
    <ul>
      <li>
        En la primera página se solicita una forma verbal, elegida al azar.
      </li>
      <li>
        En la segunda página se indica si se ha contestado correctamente.
      </li>
    </ul>

    <h6>Enuciado</h6>
    <p>
      <a href="https://www.mclibre.org/consultar/php/ejercicios/con-formularios/matrices-2/index.html" target="_blank">Enuciados</a>
    </p>
  </article>
  <article>
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

    <p>El <strong><?= $tiempoVerbal;?></strong> de <strong><?= $spanisVerbal;?></strong> es <strong><?= $verboIngles; ?></strong>.</p>
    
    <p><a href="irregular-verbs-2-1.php">Volver al formulario.</a></p>
  
  </article>

  <footer>
    <p>Tomás Piñeiro Alonso</p>
  </footer>
</body>
</html>