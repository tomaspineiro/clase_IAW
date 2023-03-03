<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
$nameSite = "Registro";
if (isset($_SESSION['user'] ) ) {

    $nombre = $_SESSION['user']; 
    
} 
?>
<?php include("inc/header.php") ?>

<main class="container">
  
    <h1 class="col-md-3 offset-md-3">Registro</h1>
    <?php
        if (!isset($_REQUEST['btnEnviar'])) {

            registro();

        } else {

            $nombre= recoge('nombre');
            $password1= recoge('password1');
            $password2= recoge('password2');
            $email= recoge('email');
            $direccion= recoge('direccion');
            $apellidos= recoge('apellidos');
            $telefono= recoge('telefono');

            $errores = '';

            
            if ($email == '') {
                
                $errores.= '<li>Tiene que haber un email</li>';

            }

            if ($email == '') {

                $errores.= '<li>Tiene que haber un email</li>';

            }

            if ($apellidos == '') {
                
                $errores.= '<li>Tiene que haber un apellidos</li>';
                
            }
            
            if ($telefono == '') {
                
                $errores.= '<li>Tiene que haber un telefono</li>';
                
            }
            
            if (($password2 == "") || ($password1 == "")) {
                
                $errores.= '<li>Los campos de contraseña tiene que estar cubiertos.</li>';
                
            }
            
            if (($password1!=$password2)) {

                $errores.= '<li>la contraseña tiene que ser la misma.</li>';

            }

            if ($errores) {

                echo "<lu>$errores</lu>";
                
                registro();
            
            } else {
                
                $password = password_hash($password1, PASSWORD_DEFAULT);

                $idUser = instarUsuario($nombre, $password, $apellidos, $direccion, $telefono, $email);

                header("location: login.php?idUser=$idUser");
                exit;

            }
           
        }
    ?>    
</main>

<?php include("inc/footer.php") ?>
