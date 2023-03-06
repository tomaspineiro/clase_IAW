<?php
if (isset($_SESSION['carrito'])) {
    $carrito = count($_SESSION['carrito']);
} else {

    $carrito = 0;
}
if (isset($_SESSION['user'] ) ) {
    
    $nombre = $_SESSION['user']['nombre']; 
    
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content=" Pagina para clase de ejemplo" />
        <meta name="author" content="piñeiro.alonso.tomas@iesrodeira.gal"/>
        <title>Grupito2023 - <?= $nameSite; ?></title> <!-- if aqui -->
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column min-vh-100">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Mi Grupito</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link <?php if($nameSite=="home"){ echo "active";} ?>" aria-current="page" href="index.php">Home</a></li> <!-- if aqui -->
                        <li class="nav-item"><a class="nav-link <?php if($nameSite=="productos"){ echo "active";} ?>" href="productos.php">Productos:</a></li> <!-- if aqui -->
                        <li class="nav-item"><a class="nav-link <?php if($nameSite=="nosotros"){ echo "active";} ?>" href="#!">Nosotros:</a></li> 
                    </ul>
                    <div class="d-flex">
                        <?php // if de si esta logedo el usuario o no. 
                            if (isset($nombre)) {
                        ?>
                            <h4>Hola <?= $nombre; ?></h4>
                            <a class="btn btn-outline-dark" href="logout.php">Logout</a>
                            
                        <?php
                            } else {
                        ?>
                            
                            <h4>Bien venido</h4>
                            <a class="btn btn-outline-dark" href="login.php">Login</a>
                            <a class="btn btn-outline-dark" href="registry.php">registry</a>
                        <?php } ?>

                        <a class="btn btn-outline-dark" href='carrito.php'>
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?= $carrito; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>