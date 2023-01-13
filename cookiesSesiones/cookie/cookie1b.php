<?php

$nombre = $_REQUEST["nombre"];
    
setcookie("nombre", $nombre, time()+60*60);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar</title>
</head>
<body>

    <a href="cookie1c.php">Verificar</a>
    
</body>
</html>