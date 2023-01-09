<?php session_start(); ?>
<?php
/**
 * Chinos - chinos.php
 *
 * @author Tomas Pineiro Alonso
 *
 */
?>
<?php
  
  $monedas = [];
  $prediciones = [];

  for ($i=0; $i < 2; $i++) {

    $monedas[$i] = rand(0, 3);
    $prediciones[$i] = rand(0, 6);

  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Los chinos.
    Tomas Pineiro Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Los chinos</h1>

  <p>Actualice la página para mostrar otra partida.</p>

  <table>
    <thead>
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
        <th>Marcador </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117.97 107.3" width="200">
            <g stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path fill="#ccc" stroke="#ccc" d="M23.8 6l78 5.4c8.4 0 15.2 6.7 15.2 15L112.2 74c0 8.3-5.4 14.4-13.8 14.4l-17 .3 4 17.6L60 89l-26 .8c-8.3 0-19-7.5-19-16L7 24c0-8.4 8.2-18 16.6-18z"/>
              <path fill="#fff" stroke="#000" d="M17.5 1l78 5.6c8.5 0 15.2 6.7 15.2 15L106 69.2c0 8.5-5.4 14.6-13.8 14.6l-17 .3 4 17.6L54 84.3 28 85c-8.6 0-19.5-7.5-19.5-16L1 19C1 10.4 9 1 17.5 1z"/>
              <text x="60" y="65" text-anchor="middle" style="font-size: 70px"><?= $prediciones[0]; ?></text>
            </g>
          </svg>
        </td>
        <td>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117.97 107.3" width="200">
            <g stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path fill="#ccc" stroke="#ccc" d="M23.8 6l78 5.4c8.4 0 15.2 6.7 15.2 15L112.2 74c0 8.3-5.4 14.4-13.8 14.4l-17 .3 4 17.6L60 89l-26 .8c-8.3 0-19-7.5-19-16L7 24c0-8.4 8.2-18 16.6-18z"/>
              <path fill="#fff" stroke="#000" d="M17.5 1l78 5.6c8.5 0 15.2 6.7 15.2 15L106 69.2c0 8.5-5.4 14.6-13.8 14.6l-17 .3 4 17.6L54 84.3 28 85c-8.6 0-19.5-7.5-19.5-16L1 19C1 10.4 9 1 17.5 1z"/>
              <text x="60" y="65" text-anchor="middle" style="font-size: 70px"><?= $prediciones[1]; ?></text>
            </g>
          </svg>
        </td>
      </tr>
      <tr>
        <td>
          <img src="img/chinos-<?= $monedas[0]?>.svg" alt="chinos-<?= $monedas[0]?>">
        </td>
        <td>
          <img src="img/chinos-<?= $monedas[1]?>.svg" alt="chinos-<?= $monedas[1]?>">
        </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3"> Ha ganado </td>
      </tr>
    </tfoot>

  </table>
  <footer>
    <p>Tomas Pineiro Alonso</p>
  </footer>
</body>
</html>
