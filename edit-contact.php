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
            <div class="card">
                <div class="card-header bg-dark text-white text-center"><h4>Edit Contact</h4><?php echo $messageSuccess ?></div>
                <div class="card-body">
                    <form action="edit-contact.php?=<?php echo $id ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="First Name..." value="<?php echo $firstName ?>">
                            </div>
                            <div class="col-lg-6">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name..." value="<?php echo $lastName ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email..." value="<?php echo $email ?>">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" name="phonenumber" class="form-control" placeholder="Phone Number..." value="<?php echo $phone ?>">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" cols="30" rows="10" class="form-control"><?php echo $message ?></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="editContact">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('includes/scripts.php') ?>
</body>
</html>