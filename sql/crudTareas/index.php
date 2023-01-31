<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
if (isset($_SESSION["usuario"]) ){
    header("location: listado.php");
    exit;
} 
?>

<?php include("inc/encabezado.php") ?>

<main class="container">
  
  <h1>Mis tareas</h1>
 
    <?php
      
        if (!isset($_REQUEST["btnEnviar"])) {
        
            if  (recoge('error') == 1) {
        
        ?>
                <div class="alert alert-danger" role="alert">
                    <h1>Tienes que estar logueado para aceder a esa pagiona.</h1>
                </div>
        <?php
            }

            formularioLogin();

        } elseif (isset($_REQUEST["btnEnviar"])) {
            
            $inPassword = recoge('password');
            $inUser = recoge('usuario');

            $rowUser = seleccionarUsuario($inUser);

            if (($rowUser) && password_verify($inPassword, $rowUser['password']) &&  ($inPassword != '')){

                $_SESSION["usuario"] = $rowUser["user"];

                header("location: listado.php");
                exit;
                
            } 
            
        } else {
    ?>
                <div class="alert alert-danger" role="alert">
                    <h1>usuario o contraseña incorrecta</h1>
                </div>
    <?php
                formularioLogin();
        } // comporbacion de que el usuario se loguedo    
       
    ?>
</main>
<?php include("inc/footer.php") ?>