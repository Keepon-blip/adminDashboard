<?php
require_once('connection.php');

if (isset($_POST['signUp']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $sqlUsername = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username' ");
    $checkUsername = mysqli_num_rows($sqlUsername);

    if($checkUsername !=0){
        $msg = "Username already exists";
    }
    elseif($checkEmail !=0){
        $msg  "Emai"
    }
}
?>