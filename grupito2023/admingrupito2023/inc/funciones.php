<?php 
function login() {
?>
    <form class="user">
        <div class="form-group">
            <input type="email" class="form-control form-control-user"
                id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="Enter Email Address...">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user"
                id="exampleInputPassword" placeholder="Password">
        </div>
        <a href="index.php" class="btn btn-primary btn-user btn-block">
            Login
        </a>
        <hr>
    </form>

<?php } ?>