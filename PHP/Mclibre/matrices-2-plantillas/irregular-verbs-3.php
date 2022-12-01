<?php include 'funciones.php'; ?>
<?php function formulario($tiempoVerbal, $verboIngles, $spanisVerbal) { ?>
  <form action="irregular-verbs-3.php" method="get">
    <p>
      <label for="respuesta">¿Cuál es el <strong><?= $tiempoVerbal;?></strong> de <strong><?= $spanisVerbal;?></strong>?</label>
      <input type="text" name="respuesta" id="respuesta">
    </p>
    <p>
      <input type="hidden" name="verboIngles" id="verboIngles" value="<?=  $verboIngles;?>">
      <input type="hidden" name="tiempoVerbal" id="tiempoVerbal" value='<?= $tiempoVerbal;?>'>
      <input type="hidden" name="spanisVerbal" id="spanisVerbal" value='<?= $spanisVerbal;?>'>
    </p>
    <p>
      <input type="submit" name='Corregir' id="Corregir"value="Corregir">
      <input type="reset" value="Borrar">
    </p>
  </form>
<?php } ?>    
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
    <h6>Enuciado</h6>
    <p>
    Escriba un programa que haga lo mismo que el del ejercicio anterior, pero que conste de una sola página:
    </p>
    <ul>
      <li>Se solicita una forma verbal, elegida al azar.</li>
      <li>Si se recibe una respuesta, se indica si es correcta o no.</li>
    </ul>

    <p><a href="https://www.mclibre.org/consultar/php/ejercicios/con-formularios/matrices-2/index.html#ejercicio-3" target="_blank">Enuciados</a> </p>
  </article>
  <article>
    <?php  
      if (!isset($_REQUEST['Corregir'])) {
        
        $verboLista =  tiemposVerboIngles();
        formulario($verboLista[0], $verboLista[2], $verboLista[1]);

      } else {
        $respuesta = recoge('respuesta');
        $tiempoVerbal = recoge("tiempoVerbal");
        $spanisVerbal = recoge("spanisVerbal");
        $verboIngles = recoge('verboIngles');

        ?>
    <?php if ($respuesta == $verboIngles) { ?>
        <p>¡Respuesta correcta!</p>
      
    <?php } else { ?>

        <p>¡Respuesta incorrecta!</p>
    <?php } ?>
      <p>
        El <strong><?= $tiempoVerbal;?></strong> de <strong><?= $spanisVerbal;?></strong> es <strong><?= $verboIngles; ?></strong>.
      </p>
      <?php
        $verboLista =  tiemposVerboIngles();
        formulario($verboLista[0], $verboLista[2], $verboLista[1]);
      ?>
    <p><a href="./irregular-verbs-3.php"><button>Reiniciar</button></a></p>
  <?php } ?>  
  </article>
  <footer>
    <p>Tomás Piñeiro Alonso</p>
  </footer>
</body>
</html>