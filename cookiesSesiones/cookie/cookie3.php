<?php function formulario() { ?>
    <form action="coo">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <input type="submit" name="enviar" id="enviar" value="enviar">
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
<body>
    <section>
        <article>
            <h1>Holy, jiji</h1>
            <p>
                <?php
                if (isset($_COOKIE['fecha'])) {
                    
                    $contador = $_COOKIE['contador'] + 1;
                    echo "que alegrai volverte a ver, la ultma vez que entraste fue: {$_COOKIE['fecha']} y es ru visita numero $contador";
                    
                } else {
                    $contador = 1;
                    echo "que alegria tenerte aqui por primera vez.";
                    
                }
                
                $fecha = date("d/m/Y|H:i:s");

                setcookie("fecha", $fecha, time() + 60 * 60 * 24 * 365);
                setcookie('contador', $contador, time() + 60 * 60 * 24 * 365);
                ?>   
            </p>
            <p>
                
            </p>
        </article>
    </section>
</body>
</html>