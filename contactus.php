<?php 
require_once('logics/connection.php');

$queryContact = mysqli_query($conn, "SELECT * FROM contactus");
 ?>

<!DOCTYPE html>
<html lang="en">
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
                            <h3>Messages</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark table-hover table-striped table-responsive" style="font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Message</th>
                                        <th>Sent on...</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($fetchMessages = mysqli_fetch_array($queryContact)) {?>
                                        <tr>
                                            <th><?php echo $fetchMessages['no']; ?></th>
                                            <td><?php echo $fetchMessages['firstname']; ?></td>
                                            <td><?php echo $fetchMessages['lastname']; ?></td>
                                            <td><?php echo $fetchMessages['email']; ?></td>
                                            <td><?php echo $fetchMessages['phonenumber']; ?></td>
                                            <td><?php echo $fetchMessages['message']; ?></td>
                                            <td><?php echo $fetchMessages['created_at']; ?></td>
                                        </tr>
                                    <?php } ?>
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