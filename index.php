<?php
include 'control/connection.php';
$date = date("Y-m-d");
$q = "DELETE FROM `post` WHERE `deadline` <= '$date'";
$query = mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tutor Finder</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="header">
        <h1>Online Tutor Finder</h1>
        <h4>Learn Teach Earn</h4>
    </div>
    
    <nav>        
        <ul>
            <li><a class="active" href="index.php"><img align="center" src="image/home.png"></a></li>            
        </ul>

        <ul class="r">
            <li><a href="login.php">Login</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
    
    </nav>

    <table>
        <tr>
            <td>
                <table>
                <tr>
                    <td>
                        <form action="" class="index-form">
                            <table >
                                <tr>
                                    <td>
                                        <h2>LOOKING FOR A</h2>
                                        <h1>TUTOR?</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Create your profile and</p>
                                        <p>find the best tutor for you!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="100" align="center"><a class="index-register-btn" href="registration.php">Register Now!!</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        Already have an account? <br>
                                        <a class="index-login-btn" href="login.php">Login</a>
                                    </td>            
                                </tr>
                            </table>
                        </form>
                    </td>
                    <td>
                        <form action="" class="index-form">
                            <table >
                                <tr>
                                    <td>
                                        <h2>LOOKING FOR A</h2>
                                        <h1>TUTION?</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Create your profile and</p>
                                        <p>find the best tutor for you!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="100" align="center"><a class="index-register-btn" href="registration.php">Register Now!!</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        Already have an account? <br>
                                        <a class="index-login-btn" href="login.php">Login</a>
                                    </td>            
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                    <?php
	                    include 'control/connection.php';
		                $q = "SELECT * FROM `systeminfo`";
                        $query = mysqli_query($con,$q);
                        while($res = mysqli_fetch_array($query)){
                    ?>
                        <td align="center">
                            <form action="" class="index-form-contract">
                                <h1>Contract Us:</h1>
                                <h3>Hotline: <?php echo $res['contract'] ?></h3>
                                <p>E-mail us at-</p>
                                <p><?php echo $res['email'] ?></p>
                            </form>
                        </td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <td align="center">
                            <form action="" class="index-form-about">
                                <a style="color: #aaa; font-size:20px" href="Terms&Condition.php">About Us!</a>
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
    

</body>
</html>