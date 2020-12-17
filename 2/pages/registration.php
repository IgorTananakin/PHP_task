<h1>Registration</h1>
<hr />
<?php
    if(!isset($_POST['regbtn'])) {
?>
    <form action="index.php?page=4" method="POST" class="mt-4">
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" class="form-control">
        </div>

        <div class="form-group">
            <label for="pass1">Password</label>
            <input type="password" id="pass1" name="pass1" class="form-control">
        </div>

        <div class="form-group">
            <label for="pass2">Confirm password</label>
            <input type="password" id="pass2" name="pass2" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary" name="regbtn">Register</button>
    </form>
<?php 
    }
    else {
        register($_POST['login'], $_POST['pass1'], $_POST['email']);
    }
?>