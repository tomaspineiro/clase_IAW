<?php session_start(); ?>
<?php include('inc/bbdd.php'); ?>
<?php include('inc/funciones.php'); ?>
<?php
$nameSite="home";
// ESCOGIENDO LOS PRODUCTOS PARA MOSTRAR EN MEJORES OFERTAS
$offset = 0;
$row_count = 8;
$productos = seleccionarProductosPaginadas($offset, $row_count);
?>
<?php include("./inc/header.php"); ?>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Ofertas Grupito</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <?php
        // MOSATRAMOS LOS PRODUCTOS EN PEQUEÑO
        mostrarVariosProductos($productos); 
        ?>
 <?php include("inc/footer.php"); ?>