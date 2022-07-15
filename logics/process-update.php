<?php

require_once('logics/connection.php');

if( isset($_POST['updateEnrollment']))
{
    $fullName = $_POST['fullname'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    $updateRecords = mysqli_query($conn, "UPDATE enrollment SET fullname='$fullName', phonenumber='$phone', email='$email', gender='$gender', course='$course' WHERE no='".$_GET['id']."' ");

    if($updateRecords)
    {
        $message = "Records updated successfully!";
        header('location: students.php');
    }
    else
    {
        $message = "Error occurred while updating user info";
    }
}

?>