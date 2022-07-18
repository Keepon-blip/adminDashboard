<?php
    require_once('logics/connection.php');

    $sqlDelete = mysqli_query($conn, "DELETE FROM contactus WHERE no='".$_GET['id']."' ");
    if($sqlDelete)
    {
        echo "User deleted successfully!";
        header('location:contactus.php');
    }
    else 
    {
        echo "Error occurred";
    }
?>