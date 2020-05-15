<?php
    include 'control/connection.php';

    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $phoneNo = $_POST['txtPhoneNo'];
    $gender = $_POST['gender'];
    $address = "";
    $institution = "";
    
    if(isset($_POST['txtAddress'])){
        $address = $_POST['txtAddress'];
    }
    else{
        $address = null;
    }
    if(isset($_POST['txtInstitution'])){
        $institution = $_POST['txtInstitution'];
    }
    else{
        $institution = null;
    }

    $q = "SELECT * FROM `login` WHERE `email`='$txtEmail'";
    $query = mysqli_query($con,$q);
?>