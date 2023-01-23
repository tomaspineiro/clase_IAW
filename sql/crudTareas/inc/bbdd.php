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
// function desconectar BD
function desconectarBD($con){

    $con = NULL;
    return $con;

}
// funcion instarTarea
function instarTarea($nombre, $descripcion, $prioridad){

    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "INSERT INTO tareas (nombre, descripcion, prioridad) VALUES (:nombre, :descripcion, :prioridad)";

        // Creamos y preparamos la senteica para compilarla 
        $stmt = $con->prepare($sql);

        // Vinculamos los valores 
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':prioridad', $prioridad);

        //Ejecutamos la sentencia
        $stmt->execute();
    
    }catch(PDOException $e){

        echo "Error: Error al insertar en la BD: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    // si ha fallado la insercion debuelbe 0
    return $con->lastInsertId();

}
// funcion actualizar los datos de una Tareas
function actualizarTarea( $idTarea, $nombre, $descripcion, $prioridad){
    
    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "UPDATE tareas SET  nombre=:nombre, descripcion=:descripcion, prioridad=:prioridad WHERE idTarea=:idTarea";

        // Creamos y preparamos la senteica para compilarla 
        $stmt = $con->prepare($sql);

        // Vinculamos los valores 
        $stmt->bindParam(':idTarea', $idTarea);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':prioridad', $prioridad);

        //Ejecutamos la sentencia
        $stmt->execute();
    
    }catch(PDOException $e){

        echo "Error: Error al insertar en la BD: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    //Ejecutamos la sentcaia
    return $stmt->rowCount();

}
//funcion seleccionar Tarea
function seleccionarTarea($idTarea) {

    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "SELECT * FROM tareas WHERE idTarea=:idTarea";

        // Creamos y preparamos la senteica para compilarla 
        $stmt = $con->prepare($sql);

        // Vinculamos los valores 
        $stmt->bindParam(':idTarea', $idTarea);
        
        //Ejecutamos la sentencia
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    }catch(PDOException $e){

        echo "Error: Error al selecionar una row: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    //Ejecutamos la sentcaia
    return $row;
}
//funcion seleccionar 
function seleccionarTodasTareas() {

    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "SELECT * FROM tareas";

       
        //Ejecutamos la sentencia
        $stmt = $con->query($sql);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll para cuendo biene mas de una varible 
    
    }catch(PDOException $e){

        echo "Error: Error al selacionar la tabla: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    //Ejecutamos la sentcaia
    return $rows;
}
// funcion borrar una tarea (fila de la tabla)
function delecteTarea( $idTarea){
    
    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "DELETE FROM tareas WHERE idTarea=:idTarea";

        // Creamos y preparamos la senteica para compilarla 
        $stmt = $con->prepare($sql);

        // Vinculamos los valores 
        $stmt->bindParam(':idTarea', $idTarea);
        
        //Ejecutamos la sentencia
        $stmt->execute();
    
    }catch(PDOException $e){

        echo "Error: Error al borrar una row de la tabla de la BD: " . $e->getMessage();

        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;

    }

    //Ejecutamos la sentcaia
    return $stmt->rowCount();

}

//funcion seleccionar Tarea
function seleccionarUsuario($user) {

    $con = conectarDB();
    
    try {

        //creamos la sentiecia sql
        $sql = "SELECT * FROM usuarios WHERE user=:user";

        // Creamos y preparamos la senteica para compilarla 
        $stmt = $con->prepare($sql);
        
        // Vinculamos los valores 
        $stmt->bindParam(':user', $user);
        
        //Ejecutamos la sentencia
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
    }catch(PDOException $e){
        
        echo "Error: Error al selecionar una row: " . $e->getMessage();
        
        file_put_contents("PDOErrors.txt", "\r\n" . date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);

        exit;
        
    }
    
    //Ejecutamos la sentcaia
    return $row;
}
?>