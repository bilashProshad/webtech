<?php
session_start();
include 'connection.php';

$error = "";

if (isset($_POST['submit'])){
    $email=$_POST['txtEmail'];
    $password=$_POST['txtPassword'];

    $q = "SELECT * FROM `login` WHERE `email`='$email' and `password` = '$password'";
    $query = mysqli_query($con,$q);

    if ($query->num_rows > 0) {   
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
    }
    else{
        $error = "Invalid email or password";
    }
}
?>