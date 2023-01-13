<?php include("./inc/bbdd.php"); ?>

<?php 

/*
// probar conexion a BD 
$con = conectarDB();

if ($con) {
    echo "conectados okkey";

} else {
    
    echo "NO conectados!! KO!!";

}

// insertar datos
$nombre = "tarea nueba";
$descripcion = "no olvides hacer las tareas";
$prioridad = "media";

$idTarea = instarTarea($nombre, $descripcion, $prioridad);

if ($idTarea) {
    
    echo "Tarea $idTarea se a insetado corectamente la tarea <br/>";
    
} else {
    
    echo "Tarea $idTarea, no se a insetado corectamente la tarea <br/>";
    
}

//actualizar datos 
$idTareas = 5;
$nombre = "tarea ";
$descripcion = "actualizar tarea";
$prioridad = "bajo";

$filasModificadas =  actualizarTarea( $idTareas, $nombre, $descripcion, $prioridad);

if ($filasModificadas) {
    
    echo "Tarea $filasModificadas, se a modificada ninguna fila <br/>";
    
} else {
    
    echo "Tarea $filasModificadas, no se a modificado ninguna fila <br/>";
    
}


//selecionamos una tarea 
$idTareas = 1;

$selectTarea =  seleccionarTarea( $idTareas);

if ($selectTarea) {
    
    print_r($selectTarea);
    
} else {
    
    echo "no se hizo la seleccion $selectTarea <br/>";
    
}

//selecionamos una Tabla

$selectTabla =  seleccionarTabla();

if ($selectTabla) {
  
    foreach ($selectTabla as $row) {
        
        print_r($row);
        echo "<br/>";
        
    }
    
} else {
    
    echo "no se hizo la seleccion $selectTabla <br/>";
    
}

*/
//Borrar una row
$idTareas = 5;

$borrarTarea =  delecteTarea( $idTareas);

if ($borrarTarea) {

    echo "se boraron, $borrarTarea";
    
} else {
    
    echo "no borado ninguna row, $borrarTarea <br/>";
    
}
?>