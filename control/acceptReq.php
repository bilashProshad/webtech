<?php
    include 'connection.php';
    session_start();
    $id = $_GET['id'];
    $q = "UPDATE `notification` SET `approve`= 1 WHERE `nid` =  $id";
    $query = mysqli_query($con,$q);
    $_SESSION['req'] = "accept";
    header('Location: ../notification.php');
?>