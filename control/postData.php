<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){
$userid = $_SESSION['id'];
$class = $_POST['class'];
$lowSal = $_POST['salRangeLow'];
$highSal = $_POST['salRangeHigh'];
$prefIns = $_POST['prefIns'];
$prefTime = $_POST['prefTime'];
$deadLine = $_POST['deadLine'];
$location = $_POST['location'];
$prefSub = "";
$medium = "";

    if(!empty($_POST['prefSub'])) {
        foreach($_POST['prefSub'] as $check) {
            $prefSub .= $check . ", "; 
        }
    }

    if(!empty($_POST['medium'])) {
        foreach($_POST['medium'] as $check) {
            $medium .= $check . ", "; 
        }
    }

    $q = "INSERT INTO `post`(`medium`, `subject`, `class`, `location`, `lowSal`, `highSal` , `institution`, `preftime`, `deadline`, `userIdFk`) VALUES ('$medium','$prefSub','$class','$location', $lowSal, $highSal,'$prefIns','$prefTime','$deadLine',$userid)";
    $query = mysqli_query($con,$q);
    if($query){
        $_SESSION['result'] = "Post Successfull";
    }
    else{
        $_SESSION['result'] = "Post Failed";
    }

    

    header('Location: ../post.php');
}
?>