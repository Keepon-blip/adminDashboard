<?php
require_once('logics/connection.php');

$queryEnrolledStudents = mysqli_query($conn, "SELECT * FROM enrollment");
$countAllStudents = mysqli_num_rows($queryEnrolledStudents);

$queryEnrolledFemales = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='female' ");
$countFemales = mysqli_num_rows($queryEnrolledFemales);

$queryEnrolledMales = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='male' ");
$countMales = mysqli_num_rows($queryEnrolledMales);

$queryEnrolledOther = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='other' ");
$countOther = mysqli_num_rows($queryEnrolledOther);
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
						<div class="card-header bg-dark text-white text-center shadow">
							<span>Top content</span>
						</div>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Students</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-group fa-3x"></i></span>
							<span class="float-end badge bg-dark"><?php echo $countAllStudents ?></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Males</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-folder-open fa-3x"></i></span>
							<span class="float-end badge bg-dark"><?php echo $countMales ?></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Females</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-graduation-cap fa-3x"></i></span>
							<span class="float-end badge bg-dark"><?php echo $countFemales ?></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Other</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-user fa-3x"></i></span>
							<span class="float-end badge bg-dark"><?php echo $countOther ?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Student Analysis</span>
						</div>
						<span class="fa fa-line-chart fa-3x"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php require_once('includes/scripts.php') ?>
</body>
</html>