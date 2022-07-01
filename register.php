<?php
$msg = '';
require_once('process.php')

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header navbar bg-dark text-white">
        <nav>
            Zalego | Admin Register
        </nav>
    </div>
    <div class="container pt-5 text-center">
        <img src="images/zalego.jpg" alt="" height="100">
    </div>
    
    <div class="container p-5">
        <form action="register.php" method="POST">
        <span class="alert alert-success">
            <?php
                if($msg){
                    include ('response.php');
                };
            ?>
        </span>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" name="username" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="confirmpassword" class="form-label">Confirm Password:</label>
                    <input type="password" class="form-control" placeholder="" name="confirmpassword">
                </div>
            </div>
            <button type="submit" name="signUp" class="btn btn-primary">Submit</button>
            <p>Have an account? Sign in <a href="">here</a></p>
        </form>
    </div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>