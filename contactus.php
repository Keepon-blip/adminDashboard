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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1;
                                    while($fetchMessages = mysqli_fetch_array($queryContact)) {?>
                                        <tr>
                                            <th><?php echo $count ?></th>
                                            <td><?php echo $fetchMessages['firstname']; ?></td>
                                            <td><?php echo $fetchMessages['lastname']; ?></td>
                                            <td><?php echo $fetchMessages['email']; ?></td>
                                            <td><?php echo $fetchMessages['phonenumber']; ?></td>
                                            <td><?php echo $fetchMessages['message']; ?></td>
                                            <td><?php echo $fetchMessages['created_at']; ?></td>
                                            <td>
                                                <a href="edit-contact.php?id=<?php echo $fetchMessages['no'] ?>" class="btn btn-primary btn-sm text-white"><i class="fa fa-pencil"></i></a>
                                                <a href="view-contact.php?id=<?php echo $fetchMessages['no'] ?>" class="btn btn-info btn-sm text-white"><i class="fa fa-eye"></i></a>
                                                <a href="delete-contact.php?id=<?php echo $fetchMessages['no'] ?>" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></a>
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