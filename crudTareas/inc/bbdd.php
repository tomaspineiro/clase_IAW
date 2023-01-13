<?php include("configuracion.php"); ?>

<?php

// Funcion para conenctarnos ala base de datos 
function conectarDB() {

    try {
       
        $con = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . ";charset=utf8", USER, PASSWORD);

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }catch(PDOException $e){

        echo "Error: Error al conectarse con la BD:  " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    return $con;

}




?>