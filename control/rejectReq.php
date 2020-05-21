<?php
    include 'connection.php';
    session_start();
    $id = $_GET['id'];
    $q = "UPDATE `notification` SET `approve`= 2 WHERE `nid` =  $id";
    $query = mysqli_query($con,$q);
    $_SESSION['req'] = "reject";
    header('Location: ../notification.php');
?>