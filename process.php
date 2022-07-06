<?php
require_once('logics/connection.php');

if (isset($_POST['signUp']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $sqlUsername = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username' ");
    $checkUsername = mysqli_num_rows($sqlUsername);

    $sqlEmail = mysqli_query($conn, "SELECT * FROM account WHERE email = '$email' ");
    $checkEmail = mysqli_num_rows($sqlEmail);

    if($checkUsername !=0){
        $msg = "Username already exists";
    }
    elseif($checkEmail !=0){
        $msg= "Email already in use. Please try a different e-mail address.";

    }
    elseif($password != $confirmpassword){
        $msg = "Passwords do not match";
    }
    else
    {
        $sql = mysqli_query($conn, "INSERT INTO account(username,email,password)VALUES('$username', '$email', '$password')");

        if($sql)
        {
            $msg = "Data submitted successfully";
        }
        else
        {
            $msg = "Error";
        }
    }
}
?>