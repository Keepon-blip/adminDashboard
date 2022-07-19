<?php 
$messageSuccess='';
require_once('logics/connection.php');

$queryContact = mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
while($fetchContact = mysqli_fetch_array($queryContact))
{
    $id = $fetchContact['no'];
    $firstName = $fetchContact['firstname'];
    $lastName = $fetchContact['lastname'];
    $email = $fetchContact['email'];
    $phone = $fetchContact['phonenumber'];
    $message = $fetchContact['message'];
}

require_once('logics/process-contact.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/head.php') ?>

<body>
    <?php require_once('includes/navbar.php') ?>
    <?php require_once('includes/sidebar.php') ?>
  
    <div class="main-content">
        <div class="container">
            <div class="card shadow">
                <div class="card-header bg-dark text-white text-center"><a href="contactus.php"><button class="btn btn-secondary float-start"><i class="fa fa-arrow-left float-start"></i></button></a><h4>Edit Contact</h4><?php echo $messageSuccess ?></div>
                <div class="card-body">
                    <form action="edit-contact.php?id=<?php echo $id ?>" method="POST">
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="firstname" class="form-label"><b>First Name</b></label>
                                <input type="text" name="firstname" class="form-control shadow" placeholder="First Name..." value="<?php echo $firstName ?>">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="lastname" class="form-label"><b>Last Name</b></label>
                                <input type="text" name="lastname" class="form-control shadow" placeholder="Last Name..." value="<?php echo $lastName ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="email" class="form-label"><b>Email</b></label>
                                <input type="email" name="email" class="form-control shadow" placeholder="Email..." value="<?php echo $email ?>">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="phone" class="form-label"><b>Phone Number</b></label>
                                <input type="tel" name="phonenumber" class="form-control shadow" placeholder="Phone Number..." value="<?php echo $phone ?>">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <label for="message" class="form-label"><b>Message</label>
                                <textarea name="message" cols="30" rows="10" class="form-control shadow text-break"><?php echo $message ?></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary shadow mb-3" name="editContact">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('includes/scripts.php') ?>
</body>
</html>