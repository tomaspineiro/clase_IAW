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
            $password1 = recoge('password1');
            
            $errores = '';

            if ($password1 == "") {

                $errores .= '<li>Los campos de contraseña tiene que estar cubiertos.</li>';

            }

            if (!seleccionarUsuarios($email)) {
                
                $errores .= '<li>El usuario no existe</li>';
            
            } elseif ($email == "" ) {

                $errores .= '<li>El campo email no puede ir vacio.</li>';

            }

            if ($errores) {

                echo "<lu>$errores</lu>";
                
                login();
            
            } else {

                $row = seleccionarUsuarios($email);

                if ($row['password'] == $password1) {
                    
                    $_SESSION['user'] = $row['nombre'];
                    
                    header("location: index.php");
                    exit;
                
                }
                           
            }

           
        }
    ?>
    
</main>

<?php include("inc/footer.php") ?>
