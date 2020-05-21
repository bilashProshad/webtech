<?php
    include 'connection.php';
    session_start();
    $id = $_GET['id'];
    $reqId = $_SESSION['id'];
    $userId = "";

    $q = "SELECT * FROM `notification` WHERE `postId` = $id";
    $query = mysqli_query($con,$q);

    if ($query->num_rows > 0) {   
        $_SESSION['apply'] = "duplicate";
        header('Location: ../newsfeed.php');
    }
    else{
        $q = "SELECT `userIdFk` FROM `post` WHERE `id` = $id";
		$query = mysqli_query($con,$q);
		while($res = mysqli_fetch_array($query)){
            $userId = $res['userIdFk'];
        }
    
        $q = "INSERT INTO `notification`(`postId`, `userId`, `reqId`, `approve`) VALUES ($id,$userId,$reqId,0)";
        $query = mysqli_query($con,$q);
        $_SESSION['apply'] = "success";
        header('Location: ../newsfeed.php');
    }
    header('Location: ../newsfeed.php');
?>