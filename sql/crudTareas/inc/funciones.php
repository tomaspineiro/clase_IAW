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
<?php
function formularioTarea($idTarea="", $nombre="", $descripcion="", $prioridad="") {
 ?>
    <form action="" method="GET" >
        <div class="mb-3">
            <label for="idTarea" class="form-label"><h5>Id Tarea:</h5></label>
            <input type="text" class="form-control" id="idTarea"name="idTarea" value="<?= $idTarea; ?>" readonly="readonly">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label"><h5>Nombre:</h5></label>
            <input type="text" class="form-control" id="nombre"name="nombre" value="<?= $nombre; ?>">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label"><h5>Descripción:</h5></label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $descripcion; ?>">
        </div>
        <div>
            <h5>Prioridad</h5>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prioridad" id="prioridad" value="baja"
                <?php if ($prioridad=="baja") { echo "checked='checked'"; } ?>>
                <label class="form-check-label" for="baja">baja</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prioridad" id="prioridad" value="media"
                <?php if ($prioridad=="media") { echo "checked='checked'"; } ?>>
                <label class="form-check-label" for="media">media</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prioridad" id="prioridad" value="alta"
                <?php if ($prioridad=="alta") { echo "checked='checked'"; } ?>>
                <label class="form-check-label" for="alta">alta</label>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button>
            <a href="./listado.php" class="btn btn-secondary">cancelar</a>
        </div>

        
    </form>
<?php } // montrar formularioTarea ?>
<?php function mostrarTarea($idTarea, $nombre, $descripcion, $prioridad) { ?>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripciï¿½</th>
        <th scope="col">Prioridad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?= $idTarea ?></th>
        <td><?= $nombre ?></td>
        <td><?= $descripcion ?></td>
        <td><?= $prioridad ?></td>
      </tr>
    </tbody>
  </table>

<?php } // cerrar fubncion mostrarTarea?>
<?php function formularioLogin() { ?>
    <form action="" method="POST" >
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="">
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Password: </label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div> 
        <dev class='text-center'>
            <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button> 
            <!-- 
            <button type="submit"  class="g-recaptcha btn btn-primary" data-sitekey="6Lftfj4kAAAAAPG3-QdXrCCLUP4PMehvNq464W3E"  data-callback='onSubmit' data-action='submit' name="btnEnviar" id="btnEnviar">Submit</button>
            -->

            <a href='login.php' class="btn btn-primary" name="registrase">Registrase</a>

        </dev>
        <!--captcha de google
        <div class="g-recaptcha" data-sitekey="6Lftfj4kAAAAAPG3-QdXrCCLUP4PMehvNq464W3E">
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
        </div>
        -->
    </form>
<?php } ?>
<?php function registro($user='') { ?>
    <form action="" method="POST">
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
        <dev class='text-center'>
            <button type="submit" class="btn btn-primary" name="btnEnviar">Registrase</button>
            <a href='index.php' class="btn btn-primary" name="btnEnviar">Cancelar</a>
        </dev>
        <dev> <!--Para el cachap de google-->
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
        </dev>
    </form>
<?php } // cierre de funcion de registro?> 
<?php 

