<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
    function formulario() {
 ?>
    <form action="" method="GET" >
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre"name="nombre" value="">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">descripcion</label>
            <input type="text" class="form-control" id="prioridad" name="descripcion" value="">
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="prioridad" id="prioridad" value="baja">
            <label class="form-check-label" for="baja">baja</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="prioridad" id="prioridad" value="media">
            <label class="form-check-label" for="media">media</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="prioridad" id="prioridad" value="alta">
            <label class="form-check-label" for="alta">alta</label>
        </div>
        <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button>
    </form>
<?php } ?>

<?php include("inc/encabezado.php") ?>
<h1>Insertar tareas</h1>

<?php
if (!isset($_REQUEST["btnEnviar"])) {

    formulario();

}  else {
    $nombre = recoge("nombre");
    $descripcion = recoge("descripcion");
    $prioridad = recoge("prioridad");

    $errores = "";

    if ($nombre=="") {
        $errores .= "<li>la tarea tiene que tener un nombre</li>";
    }
    if ($descripcion=="") {
        $errores .= "<li>la tarea tiene que tener una descripcion</li>";
    }
    if ($prioridad=="") {
        $errores .= "<li>la tarea tiene que tener una prioridad</li>";
    }

    if ($errores!="") {
    ?>
        <div class="alert alert-danger" role="alert">
            <h1>Errores: </h1>
            <ul><?= $errores; ?></ul>
        </div>
    <?php
        formulario();
    
    } else {

        $idTarea = instarTarea($nombre, $descripcion, $prioridad);
        
        if ($idTarea) {
        ?>
            <div class="alert alert-success" role="alert">
                <h2> Se a inssertado corectamente con el id: <?= $idTarea; ?></h2>
            </div>
            <button type="button" class="btn btn-light"><a href="./listado.php">Tabla</a>  </button>

        <?php
        }
?>
<?php
    }//else de insercion del campo. 
}// de comprobacion del formulario
?>
<?php include("inc/footer.php") ?>