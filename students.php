<?php
require_once('logics/connection.php');

$sql = mysqli_query($conn, "SELECT * FROM enrollment");

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
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">E-mail</th>
									<th scope="col">Gender</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Enrolled on</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php while($fetchEnrollmentRecords = mysqli_fetch_array($sql)) {?>
									<tr>
                                    <th scope="row"><?php echo $fetchEnrollmentRecords['no']; ?></th>
									<td><?php echo $fetchEnrollmentRecords['fullname']; ?></td>
									<td><?php echo $fetchEnrollmentRecords['phonenumber']; ?></td>
									<td><?php echo $fetchEnrollmentRecords['email']; ?></td>
									<td><?php echo $fetchEnrollmentRecords['gender']; ?></td>
									<td><?php echo $fetchEnrollmentRecords['course']; ?></td>
									<td><?php echo $fetchEnrollmentRecords['created_at']; ?></td>
									<td>
									<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
									<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
									</td>
                                </tr>
								<?php } ?>
								
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
		</div>
	</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>