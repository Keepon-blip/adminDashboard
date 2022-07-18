<?php
require_once('logics/connection.php');

$sqlFetchContact = mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");

while($fetchContact = mysqli_fetch_array($sqlFetchContact))
{
    $firstName = $fetchContact['firstname'];
    $lastName = $fetchContact['lastname'];
    $email = $fetchContact['email'];
    $phone = $fetchContact['phonenumber'];
    $message = $fetchContact['message'];
    $sentOn = $fetchContact['created_at'];
}

?>
<!DOCTYPE html>
<html>

<?php require_once('includes/head.php') ?>

<body>
	<?php require_once('includes/navbar.php') ?>

	<?php require_once('includes/sidebar.php') ?>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
                <div class="col-lg-6">
                    <div class="card rounded-3 shadow">
                        <div class="card-header text-center bg-dark  text-light">
                            <a href="contactus.php"><button class="btn btn-secondary float-start"><i class="fa fa-arrow-left float-start"></i></button></a>
                            <h4 class="card-title"><?php echo $firstName ?>'s Personal Info:</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">First Name: <span class="float-end badge bg-primary"><?php echo $firstName ?></span></li>
                                <li class="list-group-item">Last Name: <span class="float-end badge bg-primary"><?php echo $lastName ?></span></li>
                                <li class="list-group-item">Email: <span class="float-end badge bg-primary"><?php echo $email ?></span></li>
                                <li class="list-group-item">Phone Number: <span class="float-end badge bg-primary"><?php echo $phone ?></span></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card rounded-3 shadow">
                        <div class="card-header text-center bg-dark  text-light">
                            <h4 class="card-title">Message</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $message ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	
	<?php require_once('includes/scripts.php') ?>
</body>
</html>