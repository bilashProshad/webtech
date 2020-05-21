<?php
    include 'connection.php';
    $id = $_GET['id'];
    $q = "DELETE FROM `post` WHERE `id` = $id";
    $query = mysqli_query($con,$q);
    header('Location: ../Dashboard.php');
?>