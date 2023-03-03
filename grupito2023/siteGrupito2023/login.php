<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
$nameSite = "Login";
if (isset($_SESSION['user'] ) ) {
    
    $nombre = $_SESSION['user']; 
    
}
?>
<?php include("inc/header.php") ?>

<main class="container">
 
    <h1 class="col-md-3 offset-md-3">Login</h1>
    <?php
        if (!isset($_REQUEST['btnEnviar'])) {

            login();

        } else {

            $email = recoge('email');
            $inPassword = recoge('password1');

            $rowUser = seleccionarUsuarios($email);

            if (!empty($rowUser) && password_verify($inPassword, $rowUser['password'])) {
                
                $_SESSION['user']['nombre'] = $rowUser['nombre'];
                $_SESSION['user']['emial'] = $email;
                
                header("location: index.php");
                exit;
            
            } else {
                ?>
            <div class="alert alert-danger" role="alert">
                <h1>usuario o contraseña incorrecta</h1>
            </div>
            <?php
                login();
            } // comporbacion de que el usuario se loguedo          
            
        }
    ?>
    
</main>

<?php include("inc/footer.php") ?>
