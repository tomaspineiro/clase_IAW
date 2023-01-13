<?php session_start(); ?>
<?php
$_SESSION['nombre'] = 'tomas';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $color;?>;">
    <section>
        <article>
            <h1>Holy, jiji</h1>
            
            <a href="sesiones1b.php">Entrar a la web</a> 
            
        </article>
    </section>
</body>
</html>