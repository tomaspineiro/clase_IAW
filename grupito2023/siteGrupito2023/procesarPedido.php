<?php session_start(); ?>

<?php
$nameSite = "Registro";

include("inc/bbdd.php");
include("inc/funciones.php");
include("inc/header.php");

if (!isset($_SESSION['carrito'] ) ) {

    header("location: index.php");
    exit;
    
} 
?>
<!-- Header-->
<header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Tu Compra</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <?php
        if(!isset($_SESSION['user'])){
        ?>
            <h2 class="py-5">Tienes que estar logeado ara confrimar pedido.</h2>
            <a class="btn" href="login.php">Login</a>
        <?php 
        } else {

            $idUsuario = $_SESSION['user']['idUser'];

            $carrito = $_SESSION['carrito'];
            
            $total = $_SESSION['total'];
        
            $idPedidio = insertarPedido($idUsuario, $carrito, $total);

            if($idPedidio){
            ?>
                    <h2 class='py-5'>Tu pedido <?= $idPedidio; ?> ha sido procesado correctamente.</h2>
                    <a class="btn btn-outline-dark" href="index.php">Home</a>
            <?php
                unset($_SESSION['carrito']);
                unset($_SESSION['tatal']);
            } else {
            ?>
                <h2 class="py-5 alert alert-danger"> Tu pedido NO se ha producido. Vuelve a intentarlo.</h2>
                <a class="btn btn-outline-dark" href="carrito.php">Volver a intentar</a>

            <?php
            }
        }
        ?>
    </div>
</section>
<?php include("inc/footer.php"); ?>