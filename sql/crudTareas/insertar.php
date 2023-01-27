<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php include("inc/encabezado.php") ?>
<?php
if (!isset($_SESSION["usuario"]) ){
    header("location: index.php?error=1");
    exit;
} 
?>
<main class="container">
    <h1>Insertar tareas</h1>
    <?php
    if (!isset($_REQUEST["btnEnviar"])) {

        formulario();
        
        echo '<a href="./listado.php" class="btn btn-light">cancelar</a>';

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
            formulario($nombre, $descripcion, $prioridad);
            echo '<a href="./listado.php" class="btn btn-light">cancelar</a>';
            
        } else {

            $idTarea = instarTarea($nombre, $descripcion, $prioridad);
            
            if ($idTarea) {
            ?>
                <div class="alert alert-success" role="alert">
                    <h2> Se ha insertado corectamente con el id: <?= $idTarea; ?></h2>
                </div>
                <button type="button" class="btn btn-light"><a href="./listado.php">Valber al listado</a>  </button>

            <?php
            }
        }//else de insercion del campo. 
    }// de comprobacion del formulario
    ?>
</main>
<?php include("inc/footer.php") ?>