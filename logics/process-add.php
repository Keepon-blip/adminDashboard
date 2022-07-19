<?php

if ( isset($_POST['submitApplication']) )
{
    $fullName = $_POST['fullname'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    $insertData = mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)VALUES('$fullName', '$phone', '$email', '$gender', '$course')");

    if($insertData)
    {
        $response = "Data Submitted Successfully.";
    }
    else
    {
        $response = "Error occurred" .mysqli_error($conn);
    }
}


?>