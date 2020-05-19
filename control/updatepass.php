<?php
    include 'connection.php';
    session_start();

    if(isset($_POST['submit'])){
        $email = $_SESSION["email"];
        $oldPass = $_POST['oldPass'];
        $newPass = $_POST['newPass'];
        $conPass = $_POST['conPass'];
        $pass = "";

        $q = "SELECT `password` FROM `login` WHERE `email` = '$email'";
		$query = mysqli_query($con,$q);

		while($res = mysqli_fetch_array($query)){
            $pass = $res['password'];
        }
        if($oldPass == $pass){
            if($newPass == $conPass){
                $q = "UPDATE `login` SET `password`='$newPass' WHERE `email` = '$email'";
                $query = mysqli_query($con,$q);
                $_SESSION['msg'] = "Password have changed";
            }
            else{
                $_SESSION['msg'] = "Password is not maching";
            }
        }
        else{
            $_SESSION['msg'] = "You have entered wrong password";
        }
    }
    header('Location: ../accountSettings.php');
    
?>