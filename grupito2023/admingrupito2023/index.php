<?php session_start(); ?>
<?php
$titulo='Login'
?>
<?php include('inc/bbdd.php'); ?>
<?php include('inc/funciones.php'); ?>

<?php include('inc/head.php'); ?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
<?php
if (!isset($_REQUEST['btnEnviar'])) {

    login();

} else {

    $email = recoge('email');
    $inPassword = recoge('password');

    $rowUser = seleccionarUsuarios($email);

    if (!empty($rowUser) && password_verify($inPassword, $rowUser['password'])) {
        
        $_SESSION['user']['nombre'] = $rowUser['nombre'];
        $_SESSION['user']['idUser'] = $rowUser['idUser'];
        $_SESSION['user']['emial'] = $email;
        
        header("location: inicio.php");
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
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
