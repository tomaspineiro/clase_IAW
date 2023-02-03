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

            if (($password1!=$password2)) {

                $errores.= '<li>la contraseña tiene que ser la misma.</li>';

            }

            if (($password2 == "") || ($password1 == "")) {

                $errores.= '<li>Los campos de contraseña tiene que estar cubiertos.</li>';

            }

            if (seleccionarUsuario($user)) {
                
                $errores.= '<li>El usuario ya existe</li>';
            
            } elseif ($user == "" ) {

                $errores.= '<li>El campo usuario no puede ir vacio.</li>';


            }

        

            if ($errores) {

                echo "<lu>$errores</lu>";
                
                registro();
            
            } else {
                
                $password = password_hash($password1, PASSWORD_DEFAULT);

                $dato = instarUsuario($user, $password);

                header("location: index.php?user=<?= $user; ?>");
                exit;
                
            }

           
        }
    ?>
    
</main>

<?php include("inc/footer.php") ?>
