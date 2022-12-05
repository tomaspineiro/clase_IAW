<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (!empty($_COOKIE['nombre'])) {
            echo "La cookie contiene el valor: {$_COOKIE['nombre']}"; 
        }   else {
            echo "No existe esa  cookie";
        } 
    ?>
    <p>
        <a href="cookie1a.html">Loguear</a> 
        <br>
        <a href="cookie1d.php">Salir del sistema</a>
    </p>
</body>
</html>