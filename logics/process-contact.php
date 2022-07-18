<?php

require_once('logics/connection.php');

if( isset($_POST['editContact']) )
{
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $message = $_POST['message'];

    $updateContact = mysqli_query($conn, "UPDATE contactus SET firstname='$firstName', lastname='$lastName', email='$email', phonenumber='$phone', message='$message' WHERE no='".$_GET['id']."' ");

    if($updateContact)
    {
        $messageSuccess = "Records updated successfully!";
    }
    else
    {
        $messageSuccess = "Error occurred while updating user info";
    }
}

?>