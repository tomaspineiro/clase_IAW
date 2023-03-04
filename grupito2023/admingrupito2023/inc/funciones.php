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
function login() {
?>
    <form class="user">
        <div class="form-group">
            <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
        </div>
        <div class="form-group">
            <input type="password" name="password" id='password' class="form-control form-control-user" placeholder="Password">
        </div>
        
        <dev class='text-center'>
            <button type="submit" class="btn btn-primary btn-user btn-block" name="btnEnviar">Registrase</button>
        </dev>
        <hr>
    </form>
<?php 
}
?>