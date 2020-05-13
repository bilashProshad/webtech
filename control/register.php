<?php
session_start();
include 'connection.php';
if(isset($_POST['done'])){
    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtPhoneNo = $_POST['txtPhoneNo'];
    $txtPassword = $_POST['txtPassword'];
    $userType = $_POST['userType'];
    $gender = $_POST['gender'];
    $status = 0;
    $pending = 0;

    if($userType == "student"){
        $status = 1;
        $pending = 0;
    }
    else if($userType == "teacher"){
        $status = 2;
        $pending = 1;
    }
   
    $q = "INSERT INTO `user`(`name`, `email`, `contact`, `password`, `usertype`, `gender`, `status`, `pending`, `image`) VALUES ('$txtName','$txtEmail','$txtPhoneNo','$txtPassword','$userType','$gender', $status, $pending, null)";
    $query = mysqli_query($con,$q);
    if($query){
        $last_id = mysqli_insert_id($con);
    }
    else{
        echo "failed";
    }

    $q = "INSERT INTO `login`(`email`, `password`, `userfk`) VALUES ('$txtEmail','$txtPassword',$last_id)";
    $query = mysqli_query($con,$q);

    $_SESSION['msg'] = "Registration Successful";

    $con->close();
    header('location:http://localhost/webtech/registration.php');
}
?>