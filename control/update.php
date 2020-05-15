<?php
    include 'control/connection.php';

    $name = $_POST[''];

    $q = "SELECT * FROM `login` WHERE `email`='$txtEmail'";
    $query = mysqli_query($con,$q);
?>