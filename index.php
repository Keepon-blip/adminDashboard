<?php
require_once('logics/connection.php');

$queryEnrolledStudents = mysqli_query($conn, "SELECT * FROM enrollment");
$countAllStudents = mysqli_num_rows($queryEnrolledStudents);

$queryEnrolledFemales = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='female' ");
$countAllFemales = mysqli_num_rows($queryEnrolledFemales);
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
					<div class="card-header bg-dark text-white text-center shadow">
						<span>Top content</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-end badge bg-dark"><?php echo $countAllStudents ?></span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Available Courses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-folder-open fa-3x"></i></span>
						<span class="float-right badge bg-dark"><?php echo $countAllFemales ?></span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Campuses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-graduation-cap fa-3x"></i></span>
						<span class="float-right badge bg-dark">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Users</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-user fa-3x"></i></span>
						<span class="float-right badge bg-dark">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student Analysis</span>
					</div>
					<span class="fa fa-line-chart fa-3x"></span>
				</div>
			</div>
		</div>
	</div>
	
	<?php require_once('includes/scripts.php') ?>
</body>
</html>