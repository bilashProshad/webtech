<?php
    include 'connection.php';
    $id = $_GET['id'];
    $q = "UPDATE `user` SET `pending`= 0 WHERE `id` = $id";
    $query = mysqli_query($con,$q);
    header('Location: ../RegistrationReview.php');
?>