<!DOCTYPE html>
<html>
<?php require_once('includes/head.php') ?>
<body>
    <div class="header navbar bg-dark text-white">
        <nav>
            Zalego Training | Admin Log in
        </nav>
    </div>
    <div class="container pt-5 text-center">
        <img src="images/zalego.jpg" alt="" height="100">
    </div>
    <div class="container p-5">
        <form action="register.php" method="POST">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" placeholder="">
                </div>
            </div>
            <button class="btn btn-primary">Submit</button>
            <p>Have an account? Sign up <a href="">here</a></p>
        </form>
    </div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>