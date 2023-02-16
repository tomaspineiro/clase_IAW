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
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $user; ?>">
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
            <label for="tipo" class="form-label">Que tipo de Usuario eres?</label>
            <select id="tipo" name="tipo" class="form-select">
                <option>Cliente</option>
                <option>Vendedor</option>
                <!-- <option>Admin</option> -->
          </select>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Email: </label>
            <input type="email" class="form-control" id="mail" name="mail" value="">
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Password: </label>
            <input type="password" class="form-control" id="password2" name="password2" value="">
        </div> 
        <dev class='text-center'>
            <button type="submit" class="btn btn-primary" name="btnEnviar">Registrase</button>
            <a href='index.php' class="btn btn-primary" name="btnEnviar">Cancelar</a>
        </dev>
        <dev> <!--Para el cachap de google-->
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
        </dev>
    </form>
<?php } // cierre de funcion de registro?> 