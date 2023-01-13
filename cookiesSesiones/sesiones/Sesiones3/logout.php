<?php session_start(); ?>
<?php
if (!isset($_SESSION['usuario'])){
    
    header("Location: login.php?error=2");
    exit;
} else {
    
    $usuario = $_SESSION['usuario'];
    unset($_SESSION['usuario']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <article>
            <h1>Logout</h1>
            <h2>Hasta pronto <?= $usuario; ?>!!</h2>
            <a href="login.php">Volver a entrar.</a>
        </article>
    </section>
</body>
</html>