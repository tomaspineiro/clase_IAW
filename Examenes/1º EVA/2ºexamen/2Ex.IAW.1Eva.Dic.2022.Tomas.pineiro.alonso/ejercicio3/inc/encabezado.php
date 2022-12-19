<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Inicio.
    Menús.
      </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css" title="Color">
</head>

<body>
  <header>
    <h1>Menús - Inicio</h1>

    <nav>
      <ul>
        <li><a href="index.php" class="<?php  if ($siteWeb == "index") { echo "active"; }; ?>">Inicio</a></li>
        <li><a href="conectar.php"class="<?php if ($siteWeb == "conectar") { echo "active"; }; ?>">Conectar</a></li>
        <li><a href="desconectar.php"class="<?php if ($siteWeb == "desconectar") { echo "active";}; ?>">Desconectar</a></li>
        <li><a href="restringido.php"class="<?php if ($siteWeb == "restringido") {
          echo "active";}; ?>">Restringido</a></li>
      </ul>
    </nav>
  </header>