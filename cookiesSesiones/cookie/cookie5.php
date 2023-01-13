<?php function formulario() { ?>
    <form action="">
        <p>
            <label for="color">color:</label>
            <select name="color" id="color" >
                <option value="red">rojo</option>
                <option value="black">negro</option>
                <option value="green">verder</option>
                <option value="white">Blanco</option>
                <option value="silver">gris</option>
            </select>
            <input type="submit" name="enviar" id="enviar" value="cambiar color ">
        </p>
    </form>
<?php } ?>
<?php 
    if (isset($_REQUEST['enviar'])){
        
        $color = $_REQUEST['color'];
        
    } elseif (isset($_COOKIE['color'])) {
        
        $color = $_COOKIE['color'];
        
    } else {
        
        $color = "white";
        
    }
    
    setcookie("color", $color, time() + 60 * 60 * 24 * 365);
    
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
                
                formulario();
                
                
                ?>   
            </p>
        </article>
    </section>
</body>
</html>