<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    <?= $pagina ?>.
    Menús.
      </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css" title="Color">
</head>

<body>
  <header>
    <h1>Menús - SOLUCIÓN - <?= $pagina ?> </h1>

    <nav>
      <ul>
        <li><a href="index.php" <?php if($pagina=="Inicio"){echo 'class="active"';} ?>>Inicio</a></li>
        <li><a href="conectar.php" <?php if($pagina=="Conectar"){echo 'class="active"';} ?>>Conectar</a></li>
        <li><a href="desconectar.php" <?php if($pagina=="Desconectar"){echo 'class="active"';} ?>>Desconectar</a></li>
        <li><a href="restringido.php" <?php if($pagina=="Restringido"){echo 'class="active"';} ?>>Restringido</a></li>
      </ul>
    </nav>
  </header>