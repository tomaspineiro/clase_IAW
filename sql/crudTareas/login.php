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
  
    <h1>Registro</h1>
    <?php
        if (!isset($_REQUEST['btnEnviar'])) {

            registro();

        } else {

            $user= recoge('usuario');
            $password1= recoge('password1');
            $password2= recoge('password2');
            
            $errores = '';

            if (($password1!=$password2) && ($password2 == "") && ($password1 == "")) {

                $errores.= '<li>la contraseña tiene que ser la misma.</li>';

            }

            if (seleccionarUsuario($user)) {
                $errores.= '<li>El usuario ya existe</li>';
            }

            if ($errores) {

                echo "<lu>$errores</lu>";
                
                registro();
            
            } else {

                $dato = instarUsuario($user, $password2);

                header("location: index.php");
                exit;
                
            }

           
        }
    ?>
    
</main>

<?php include("inc/footer.php") ?>
