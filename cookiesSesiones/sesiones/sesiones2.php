<?php session_start(); ?>
<?php
if (!isset($_SESSION['nombre'])) {
    
    $_SESSION['nombre'] = 'tomas';
    $_SESSION['contador'] = 1;

}  else {
    
    $_SESSION['contador'] = $_SESSION['contador'] + 1;

} 
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
            
            <p>Hola!, tu nombre de usauaro es: <?= $_SESSION['nombre'];?></p>
            <p>Has estado en esta pagina un total de <?= $_SESSION['contador']; ?>.</p>
        </article>
    </section>
</body>
</html>