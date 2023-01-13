<?php session_start(); ?>
<?php
$usuarioOK = 'admin';
$passOK = 'abc123.';

// Datos que viene del formulario login.php
$usuario = isset($_REQUEST['nombre']) ? $_REQUEST["nombre"] : "";
$pass = isset($_REQUEST['passwd']) ? $_REQUEST["passwd"] : "";

if(($usuario == "") || ($pass == "")){
    
    header("Location: login.php?error=2");
    exit;
}

if (($usuarioOK != $usuario) || ($passOK != $pass)){
    
    header("Location: login.php?error=1");
    exit;
}
    
$_SESSION['usuario'] = $usuario;



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
            <h1>Acceso privado</h1>
            <?php 
                if (isset($_SESSION['usuario'])){
                    
                    echo "<p>Tienes acceso a la parte privada</p>";
                    echo "<p><a href='privado.php'>Acceso web</a></p>";
                
                }
            ?>
            
        </article>
    </section>
</body>
</html>