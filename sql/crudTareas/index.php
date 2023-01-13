<?php include("./inc/bbdd.php"); ?>

<?php 

// probar conexion a BD 

$con = conectarDB();

if ($con) {
    echo "conectados okkey";

} else {
    
    echo "NO conectados!! KO!!";

}


?>