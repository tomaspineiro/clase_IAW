<?php session_start(); ?>
<?php include('inc/bbdd.php'); ?>
<?php include('inc/funciones.php'); ?>
<?php
$nameSite="Carrito";
$titulo = "tu Compra";
?>
<?php include("inc/header.php"); ?>
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
        <?php if(isset($carrito)) { ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" colspan="3">Productos</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $carrito = $_SESSION['carrito'];
            $total = 0;
            ?>
            <?php foreach ($carrito as $idProducto => $cantidad) { ?>
                <?php
                $producto = seleccionarProductoCarrito($idProducto);
                $nombre = $producto['nombre'];
                $precioOferta = $producto['precioOferta'];
                $subTotal = $cantidad * $precioOferta;
                $total += $subTotal;
                ?>
                <tr>
                    <th scope="row">·</th>
                    <td colspan="3" ><?= $nombre; ?></td>
                    <td><a class="btn" href="procesarCarrito.php?id=<?= $idProducto; ?>&op=add">+</a><?= $cantidad; ?><a class="btn" href="procesarCarrito.php?id=<?= $idProducto; ?>&op=remove">-</a></td>
                    <td><?= $precioOferta; ?></td>
                    <td><?= $subTotal; ?></td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="6">Total:</th>
                    <td><?= $total; ?></td>
                </tr>
            </tfoot>
        </table>
        <div class="d-flex">
            <a class="btn btn-outline-dark" href="#">FINALIZAR</a>
            <a class="btn btn-outline-dark" href="procesarCarrito.php?op=empty">
                BORRAR
            </a>
        </div>
        <?php } else { // mostramos todos los prudos ?>
            <h1>No teien ningun producto en su carrito.</h1>
        <?php } // cierre del if del carrito?>
    </div>
</section>
<?php include("inc/footer.php"); ?>