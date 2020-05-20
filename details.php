<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tutor Finder</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body class="outer">
    <div class="header">
        <h1>Online Tutor Finder</h1>
        <h4>Learn Teach Earn</h4>
    </div>

    <nav>        
        <?php
            if($_SESSION['status']==0){
        ?>
            <ul>
            <li><a  href="Dashboard.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="Dashboard.php">Dashboard</a></li>
             <li><a href="RegistrationReview.php">Registration Review</a></li>
            <li><a href="UpdateSystemInfo.php">Update Information</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="AdminNotification.php">Notification</a></li>
           <li><a class="active" href="profile.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
            
        <?php
            } 
            else{
        ?>
        <ul>
            <li><a  href="newsfeed.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="newsfeed.php">News Feed</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a class="active" href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <?php
            }
        ?>
    </nav>
    
    <?php
    include 'control/connection.php';
        $id = $_GET['id'];
		$q = "SELECT * FROM `user` WHERE `id` = $id";
		$query = mysqli_query($con,$q);

		while($res = mysqli_fetch_array($query)){
	?>
        <form action="" class="inner" style="width: 300px">
            <table>
                <tr>
                    <h1><label for="">User Information</label></h1>
                </tr>
            </table>
            <table>
            <tr>
            <th >
                    <?php
                        if(isset($res['image'])){
                    ?>
                    <img align="center" style="border-radius: 50%;" src="<?php echo $res['image']; ?>" width="150px" height="150px" align="center" id="ProfileDisplay">                 
                    <?php
                        }
                        else{
                    ?>
                    <img align="right" style="border-radius: 50%;" src="placeholder.png" width="150px" height="150px" align="center" id="ProfileDisplay">
                    <?php
                        }
                    ?>
                </th>
        </tr>
            </table>
            <table>    
                <tr>
                    <th align="left"><Label>Name</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['name']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>Email</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['email']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>Phone No</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['contact']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>User Type</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['usertype']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>Gender</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['gender']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>Address</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['address']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>Institution</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['institution']; ?></Label></th>
                </tr>

            </table>
            

        </form>
    
    <?php 
        }
    ?>
            
	<script src="js/script.js"> </script>
</body>
</html>