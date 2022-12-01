<?php include "funciones.php"; ?>
<?php function formulario($tiempoVerbal, $spanisVerbal, $verboIngles, $verbosLista) { ?>
  <form action="irregular-verbs-4.php" method="get">
    <div>
      <label for="respuesta">¿Cuál es <strong><?= $tiempoVerbal; ?></strong> de <strong><?= $spanisVerbal;?></strong>?</label>
      <p>
        <input type="radio" name="respuesta" id="respuesta" value="<?= $verbosLista[0]; ?>">
        <label for="<?= $verbosLista[0]; ?>"><?= $verbosLista[0]; ?></label>
      </p>
      <p>
        <input type="radio" name="respuesta" id="respuesta" value="<?= $verbosLista[1]; ?>">
        <label for="<?= $verbosLista[1]; ?>"><?= $verbosLista[1]; ?></label>
      </p>
      <p>
        <input type="radio" name="respuesta" id="respuesta" value="<?= $verbosLista[2]; ?>">
        <label for="<?= $verbosLista[2]; ?>"><?= $verbosLista[2]; ?></label>
      </p>
    </div>
    <p>
      <input type="hidden" name="verboIngles" id="verboIngles" value="<?=  $verboIngles;?>">
      <input type="hidden" name="tiempoVerbal" id="tiempoVerbal" value='<?= $tiempoVerbal;?>'>
      <input type="hidden" name="spanisVerbal" id="spanisVerbal" value='<?= $spanisVerbal;?>'>
    </p>
    <p>
      <input type="submit" value="Corregir" id="Corregir" name="Corregir">
      <input type="reset" value="Borrar">
    </p>
  </form>
<?php } ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Irregular verbs 4. Matrices (2).
    Tomás Piñeiro Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <section>
    <article>
      <h1>Irregular verbs 4</h1>
      <h4>Enuciado</h4>
      <p>Escriba un programa para practicar los verbos irregulares ingleses.</p>
      <ul>
        <li>Se pide una forma verbal elegida al azar mostrando las tres formas verbales del verbo y se pregunta cuál es la correcta.</li>
        <li>Si se recibe una respuesta, se indica si es correcta o no.</li>
      </ul>

      <p><a href="https://www.mclibre.org/consultar/php/ejercicios/con-formularios/matrices-2/index.html#ejercicio-4" target="_blank">Enuciados</a> </p>
    </article>
    <article>
      <?php
      if (!isset($_REQUEST['Corregir'])) {
        
        $verbos = tiemposVerboIngles(4);
        formulario($verbos[0], $verbos[1], $verbos[2], $verbos[3]);

      } else {

        $respuesta = recoge('respuesta');
        $tiempoVerbal = recoge("tiempoVerbal");
        $spanisVerbal = recoge("spanisVerbal");
        $verboIngles = recoge('verboIngles');
        ?>
        <?php solcuion($respuesta, $verboIngles, $tiempoVerbal, $spanisVerbal); ?>
        <?php
        $verbos = tiemposVerboIngles(4);
        formulario($verbos[0], $verbos[1], $verbos[2], $verbos[3]);
        ?>
      <?php } ?>
      <p><a href="irregular-verbs-4.php"><button>Reiniciar</button></a></p>
    </article>
  </section>

  <footer>
    <p>Tomás Piñeiro Alonso</p>
  </footer>
</body>
</html>