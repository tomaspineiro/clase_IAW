<?php include "funciones.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Irregular verbs 2 (Formulario).Matrices (2).
    Tomás Piñeiro Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <article>
    <h1>Irregular verbs 2 (Formulario)</h1>
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
      <a href="https://www.mclibre.org/consultar/php/ejercicios/con-formularios/matrices-2/index.html#ejercicio-2" target="_blank">Enuciados</a>
    </p>
  </article>
  <article>
    <?php $verboLista = tiemposVerboIngles(); ?>
    <form action="irregular-verbs-2-2.php" method="get">
      <p>
        <label for="respuesta">¿Cuál es el <strong><?= $verboLista[0];?></strong> de <strong><?= $verboLista[1];?></strong>?</label>
        <input type="text" name="respuesta" id="respuesta">
      </p>
      <p>
        <input type="hidden" name="verboIngles" id="verboIngles" value="<?= $verboLista[2];?>">
        <input type="hidden" name="tiempoVerbal" id="tiempoVerbal" value='<?= $verboLista[0];?>'>
        <input type="hidden" name="spanisVerbal" id="spanisVerbal" value='<?= $verboLista[1];?>'>

      </p>
      <p>
        <input type="submit" value="Corregir">
        <input type="reset" value="Borrar">
      </p>
    </form>
  </article>

  <footer>
    <p>Tomás Piñeiro Alonso</p>
  </footer>
</body>
</html>