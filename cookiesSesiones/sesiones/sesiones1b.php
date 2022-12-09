<?php session_start(); ?>

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
            <p>
            hola tu nombre de usauaro es: <?= $_SESSION['nombre'];?>
            </p>
        </article>
    </section>
</body>
</html>