<?php include("configuracion.php"); ?>
<?php
##############################################################################
##### funciones para conectar y desconectarnos de la BBDD de grupito2023 #####
##############################################################################
// Funcion para conenctarnos a la base de datos 
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
// function desconectar BD
function desconectarBD($con){

    $con = NULL;
    return $con;

}

###########################################
##### funciones de la tabla productos #####
###########################################
// con esta funcion selecionamos todo los productos espara porbar que funcina todo corecto y luego ya vamos haciendo limieza 
function seleccionarTodasProductos() {

    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "SELECT * FROM productos";

       
        //Ejecutamos la sentencia
        $stmt = $con->query($sql);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll para cuendo biene mas de una varible 
    
    }catch(PDOException $e){

        echo "Error: Error al selacionar la tabla: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    //cerramos la sesion
    desconectarBD($con);

    //devilvemos las tareas. 
    return $rows;
}

function selectProdSiteProducto($idProducto) {

    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "SELECT idProducto, imagenG, nombre, precio, precioOferta, intoDescripcion, Descripcion FROM productos WHERE idProducto=:idProducto";

        // Creamos y preparamos la senteica para compilarla 
        $stmt = $con->prepare($sql);

        // Vinculamos los valores 
        $stmt->bindParam(':idProducto', $idProducto);
        
        //Ejecutamos la sentencia
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    }catch(PDOException $e){

        echo "Error: Error al selecionar una row: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    //cerramos la sesion
    desconectarBD($con);

    //devilvemos la tarea. 
    return $row;
}

//funcion cuantas Productos tenemos en la vase de datos hay
function listaProductosOnlen() {

    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "SELECT idProducto FROM productos WHERE online=1";

       
        //Ejecutamos la sentencia
        $stmt = $con->query($sql);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll para cuendo biene mas de una varible 
    
    }catch(PDOException $e){

        echo "Error: Error al selacionar la tabla: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    //cerramos la sesion
    desconectarBD($con);

    //devilvemos las tareas. 
    return $rows;
}

// funcion de de ver las  paginadas 
function seleccionarProductosPaginadas($offset, $row_count) {

    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "SELECT idProducto, nombre, imagenP, precio, precioOferta FROM productos WHERE online=1 LIMIT :offset, :row_count";

        // Creamos y preparamos la senteica para compilarla 
        $stmt = $con->prepare($sql);

        // Vinculamos los valores 
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindParam(':row_count', $row_count, PDO::PARAM_INT);
        
        //Ejecutamos la sentencia
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll para cuendo biene mas de una varible 
        
    }catch(PDOException $e){

        echo "Error: Error al selacionar la tabla: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    //cerramos la sesion
    desconectarBD($con);

    //devolvemos las tareas, de la pagina que queramos. 
    return $rows;

}

//funcion cuantas Productos tenemos en la vase de datos hay
function cantidadProductosOnlen() {

    $con = conectarDB();
    
    try {
 
        //creamos la sentiecia sql
        $sql = "SELECT COUNT(*) AS numRow FROM productos WHERE online=1";

       
        //Ejecutamos la sentencia
        $stmt = $con->query($sql);

        $row = $stmt->fetch(PDO::FETCH_ASSOC); // fetchAll para cuendo biene mas de una varible 
    
    }catch(PDOException $e){

        echo "Error: Error al selacionar la tabla: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    //cerramos la sesion
    desconectarBD($con);

    //devilvemos las tareas. 
    return $row;
    
}

##########################################
##### funciones de la tabla usuarios #####
##########################################





?>