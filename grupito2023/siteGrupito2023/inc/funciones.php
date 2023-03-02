<?php
function recoge($var, $m = "")  {
	
    $tmp = is_array($m) ? [] : "";
    if (isset($_REQUEST[$var])) {
        if (!is_array($_REQUEST[$var]) && !is_array($m)) {
            $tmp = trim(htmlspecialchars($_REQUEST[$var]));
        } elseif (is_array($_REQUEST[$var]) && is_array($m)) {
            $tmp = $_REQUEST[$var];
            array_walk_recursive($tmp, function (&$valor) {
                $valor = trim(htmlspecialchars($valor));
            });
        }
    }
    return $tmp;
}
?>
<!-- Funcion para registrar los usuarios -->
<?php function registro($user='') { ?>
    <form  class="col-md-3 offset-md-3" action="" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $user; ?>">
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos: </label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="">
        </div> 
        <div class="mb-3">
            <label for="password1" class="form-label">Password: </label>
            <input type="password" class="form-control" id="password1" name="password1" value="">
        </div> 
        <div class="mb-3">
            <label for="password2" class="form-label">Password: </label>
            <input type="password" class="form-control" id="password2" name="password2" value="">
        </div> 
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono: </label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="">
        </div> 
        <div class="mb-3">
            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-control" id="email" name="email" value="">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección: </label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="">
        </div> 
        <dev class='text-center'>
            <button type="submit" class="btn btn-primary" name="btnEnviar">Registrase</button>
            <a href='index.php' class="btn btn-primary" name="btnEnviar">Cancelar</a>
        </dev>
        <dev> <!--Para el cachap de google-->
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
        </dev>
    </form>
<?php } // cierre de funcion de registro ?> 

<?php function mostrarVariosProductos($productos) { ?>
<!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach($productos as $producto) { ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="<?= $producto['imagenP']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $producto['nombre']; ?></h5>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through"><?= $producto['precio']; ?></span>
                                        <?= $producto['precioOferta']; ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="producto.php?idProducto=<?= $producto['idProducto']; ?>">Más info..</a></div>
                                </div>
                            </div>
                        </div>
                    <?php } // cierre del for de itens de ?>
                </div>
            </div>
        </section>




<?php } // finde de la funcion mostrarVariosProductos ?>

<!-- Funcion para registrar los usuarios -->
<?php function login() { ?>
    <form  class="col-md-3 offset-md-3" action="" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-control" id="email" name="email" value="">
        </div>
        <div class="mb-3">
            <label for="password1" class="form-label">Password: </label>
            <input type="password" class="form-control" id="password1" name="password1" value="">
        </div> 
        <dev class='text-center'>
            <button type="submit" class="btn btn-primary" name="btnEnviar">Login</button>
        </dev>      
    </form>
<?php } // cierre de funcion de registro ?> 