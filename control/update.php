<?php
    include 'connection.php';
    session_start();    
    $id = $_SESSION['id'];
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

    $q = "UPDATE `user` SET `name`='$name',`email`='$email',`contact`='$phoneNo', `gender`= '$gender', `image`= null,`address`= '$address',`institution`= '$institution' WHERE `id` = $id";
    $query = mysqli_query($con,$q);
    $_SESSION['result'] = "Updated";
    header('Location: ../profile.php');
?>