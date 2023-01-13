<?php session_start(); ?>
<?php
if (!isset($_SESSION['usuario'])){
    
    header("Location: login.php?error=2");
    exit;
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
            <h1>Pagina Pribada</h1>
            <p>Bienveid@ <?= $_SESSION['usuario'] ?></p>
            <p>Solo acceso a usuarios autorizados. Contenido privado</p>

            <p>
                <a href="logout.php">Salir de la sessión</a>
            </p>
        </article>
    </section>
</body>
</html>