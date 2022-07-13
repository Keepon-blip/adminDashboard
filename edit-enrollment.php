<?php
    $message = '';
require_once('logics/connection.php');

$queryStudent = mysqli_query($conn, "SELECT * FROM enrollment WHERE no= '".$_GET['id']."' ");
while($fetchStudent = mysqli_fetch_array($queryStudent))
{
    $id = $fetchStudent['no'];
    $fullName = $fetchStudent['fullname'];
    $phone = $fetchStudent['phonenumber'];
    $email = $fetchStudent['email'];
    $gender = $fetchStudent['gender'];
    $course = $fetchStudent['course'];
}

require_once('logics/process-update.php');

?>

<!DOCTYPE html>
<html>

<?php require_once('includes/head.php') ?>

<body>
	<?php require_once('includes/navbar.php') ?>

	<?php require_once('includes/sidebar.php') ?>
	<div class="main-content">
		<div class="container p-5">
			<div class="row">
                <div class="col-lg-12">
                    <div class="card shadow rounded bg-light">
                        <div class="card-header text-center bg-dark text-white">
                            <h4>Edit Student <?php echo $fullName ?></h4>
                            <?php echo $message ?>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
                                    <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="fullname" class="form-label" na><b>Full Name</b></label>
                                            <input type="text" name="fullname" class="form-control" placeholder="Enter Your Full Name" value="<?php echo $fullName ?>">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="phonenumber" class="form-label"><b>Phone Number</b></label>
                                            <input type="tel" name="phonenumber" class="form-control" placeholder="+2547..." value="<?php echo $phone ?>">
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="email" class="form-label"><b>E-mail Address</b></label>
                                            <input type="email" name="email" class="form-control" placeholder="Please Enter Your E-mail" value="<?php echo $email ?>">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="gender" class="form-label"><b>Gender</b></label>
                                            <select class="form-select form-control mb-3" aria-label="" name="gender">
                                                <option selected><?php echo $gender ?></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <label for="course" class="form-label"><b>Course</b></label>
                                        <select class="form-select form-control mb-3" name="course">
                                            <option selected><?php echo $course ?></option>
                                            <option value="Web Design">Web Design</option>
                                            <option value="Data Science">Data Science</option>
                                            <option value="Android Development">Android Development</option>
                                            <option value="Cyber Security">Cyber Security</option>
                                            <option value="AWS Certification">AWS Certification</option>
                                        </select>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="updateEnrollment">Update Records</button>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
		</div>
	</div>
	
	<?php require_once('includes/scripts.php') ?>
</body>
</html>