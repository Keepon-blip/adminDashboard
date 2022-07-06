<?php
require_once('logics/connection.php');

$queryStudent = mysqli_query($conn, "SELECT * FROM enrollment WHERE no= '".$_GET['id']."' ");
while($fetchStudent = mysqli_fetch_array($queryStudent))
{
    $fullName = $fetchStudent['fullname'];
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-white">
                            <h4>Edit Student <?php echo $fullName ?></h4>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	
	<?php require_once('includes/scripts.php') ?>
</body>
</html>