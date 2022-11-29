<?php include "funciones.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Irregular verbs 1 (Formulario). Matrices (2).
    Tomás Piñeiro Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <article>
    <h1>Irregular verbs 1</h1>
    <p>
      Escriba un programa de una página que muestre formas verbales de los verbos irregulares ingleses, elegida al azar. Cada vez que se actualice la página, se mostrará una forma verbal distinta.
    </p>
    <h6>Enuciado</h6>
    <p>
      <a href="https://www.mclibre.org/consultar/php/ejercicios/con-formularios/matrices-2/index.html" target="_blank">Enuciados</a>
    </p>
  </article>
  
  <article>
    <?php $verboLista = tiemposVerboIngles(); ?>
    <p>El <strong><?= $verboLista[0]; ?></strong> de <strong><?= $verboLista[1]; ?></strong> es <strong><?= $verboLista[2]; ?></strong>.</p>
    <p>
      <a href="irregular-verbs-1.php">
        <button>Mostrar otro</button>
      </a>
    </p>
  </article>

  <footer>
    <p>Tomás Piñeiro Alonso</p>
  </footer>

</body>
</html>