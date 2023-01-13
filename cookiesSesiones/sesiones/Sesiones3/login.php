<?php session_start(); ?>
<?php function formularioUsuario() { ?>
    <form action="comprobar.php" method="post">
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <label for="passwd">Contraseña: </label>
            <input type="password" name="passwd" id="passwd">
        </p>
        <p>
            <input type="submit" value="Entrar!">
        </p>
    </form>
<?php } ?>    
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
            <?php 
                if(isset($_REQUEST['error'])) {
                    $error = $_REQUEST["error"];

                    switch ($error) {

                        case 1:
                            echo "<p>usuario o password incorecta</p>";
                            break;
                    case 2:
                        echo "<p>Acceso restringido debes loguearte</p>";
                        break;
                    }
                }
            ?>

            <?php formularioUsuario(); ?>
            
        </article>
    </section>
</body>
</html>