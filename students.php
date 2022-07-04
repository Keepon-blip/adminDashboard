<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'zalego';

$conn = mysqli_connect($server,$username,$password,$database);

$sql = mysqli_query($conn, "SELECT * FROM enrollment");

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
	<div class="header">
		<a href="index.php"><img src="images/zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle"></a>
	</div>
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="students.php">
						<span><i class="fa fa-group"></i></span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-folder-open"></i></span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-graduation-cap"></i></span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
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