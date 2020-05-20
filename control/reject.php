<?php
    include 'connection.php';
    $id = $_GET['id'];
    $q = "DELETE FROM `login` WHERE `userfk` = $id";
    $query = mysqli_query($con,$q);
    $q = "DELETE FROM `user` WHERE `id` = $id";
    $query = mysqli_query($con,$q);
    header('Location: ../RegistrationReview.php');
?>