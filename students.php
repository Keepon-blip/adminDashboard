<?php
require_once('logics/connection.php');
require_once('logics/process-add.php');

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
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<h4>Students</span>
							<button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#addModal"><i class="fa fa-plus"></i>  Add Student</button>
						</div>
						<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
									<div class="modal-content">
										<div class="modal-header bg-dark text-white float-center">
											<h5 class="modal-title" id="addModalLabel">Add Student</h5>
											<button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
										</div>
										<div class="modal-body">
											<form action="students.php" method="POST">
												<div class="row">
														<div class="mb-3 col-lg-6">
															<label for="fullname" class="form-label text-dark" na><b>Full Name</b></label>
															<input type="text" name="fullname" class="form-control" placeholder="Enter Your Full Name" required>
														</div>
														<div class="mb-3 col-lg-6">
															<label for="phonenumber" class="form-label text-dark"><b>Phone Number</b></label>
															<input type="tel" name="phonenumber" class="form-control" placeholder="+2547..." required>
														</div>
												</div> 
												<div class="row">
														<div class="mb-3 col-lg-6">
															<label for="email" class="form-label text-dark"><b>E-mail</b></label>
															<input type="email" name="email" class="form-control" placeholder="Please Enter Your E-mail" required>
														</div>
														<div class="mb-3 col-lg-6">
															<label for="gender" class="form-label text-dark"><b>Gender</b></label>
															<select class="form-select mb-3" aria-label="" name="gender">
																<option selected>--Select gender--</option>
																<option value="Male">Male</option>
																<option value="Female">Female</option>
																<option value="Other">Other</option>
																<option value="Rather not say">Rather not say</option>
															</select>
														</div>
													</div> 
													<br>
													
													<div class="row">
														<label for="course" class="form-label text-dark"><b>Course</b></label>
														<select class="form-select mb-3" name="course">
															<option selected>--Select course--</option>
															<option value="Web Design">Web Design</option>
															<option value="Data Science">Data Science</option>
															<option value="Android Development">Android Development</option>
															<option value="Cyber Security">Cyber Security</option>
															<option value="AWS Certification">AWS Certification</option>
														</select>
													</div>
													<button type="submit" class="btn btn-primary" name="submitApplication">Submit Application</button>
											</form>
										</div>
									</div>
								</div>
								</div>
						<div class="card-body">
							<table class="table text-light table-striped table-hover table-dark" style="font-size:14px;">
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
									<?php $count = 1; while($fetchEnrollmentRecords = mysqli_fetch_array($sql)) {?>
									<tr>
										<th scope="row"><?php echo $count; ?></th>
										<td><?php echo $fetchEnrollmentRecords['fullname']; ?></td>
										<td><?php echo $fetchEnrollmentRecords['phonenumber']; ?></td>
										<td><?php echo $fetchEnrollmentRecords['email']; ?></td>
										<td><?php echo $fetchEnrollmentRecords['gender']; ?></td>
										<td><?php echo $fetchEnrollmentRecords['course']; ?></td>
										<td><?php echo $fetchEnrollmentRecords['created_at']; ?></td>
										<td>
											<a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecords['no'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
											<a href="view-enrollment.php?id=<?php echo $fetchEnrollmentRecords['no'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye text-white"></i></a>
											<a href="delete-enrollment.php?id=<?php echo $fetchEnrollmentRecords['no'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									<?php $count++; } ?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php require_once('includes/scripts.php') ?>
</body>
</html>