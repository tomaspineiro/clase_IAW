<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
if (isset($_SESSION["usuario"]) ){
    header("location: listado.php");
    exit;
} 
?>
<?php function formularioLogin() { ?>
    <form action="" method="GET" >
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="">
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Password: </label>
            <input type="text" class="form-control" id="password" name="password" value="">
        </div> 
        
        <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button>
    </form>
<?php } ?>

<?php include("inc/encabezado.php") ?>

<main class="container">
  
  <h1>Mis tareas</h1>
 
    <?php
        if (isset($_SESSION["usuario"]) ){
        
            echo "<h2>Conectado</h2>";
            echo '<a href="./listado.php" class="btn btn-secondary">Ver el listado</a>'; 

        } elseif (!isset($_REQUEST["btnEnviar"])) {

            formularioLogin();

        } elseif (isset($_REQUEST["btnEnviar"])) {
            
            $inPassword = recoge('password');
            $inUser = recoge('usuario');

            $rowUser = seleccionarUsuario($inUser);
            
            if ($rowUser['password'] == $inPassword ){

                $_SESSION["usuario"] = $rowUser['user'];

                header("location: listado.php");
                exit;
            
            } elseif  (recoge('error') == 1) {
    ?>
                <div class="alert alert-danger" role="alert">
                    <h1>Tienes que estar logueado para aceder a esa pagiona.</h1>
                </div>
    <?php
                formularioLogin();
            } else {
    ?>
                <div class="alert alert-danger" role="alert">
                    <h1>usuario o contraseña incorecta</h1>
                </div>
    <?php
                formularioLogin();
            } // comporbacion de que el usuario se loguedo    
        }// recoger y tratar los datos del form de login
    ?>
</main>
<?php include("inc/footer.php") ?>