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
<body>
    <div class="header">
        <h1>Online Tutor Finder</h1>
        <h4>Learn Teach Earn</h4>
    </div>

    <nav>        
    
        <ul>
            <li><a  href="newsfeed.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="newsfeed.php">News Feed</a></li>
            <li><a class="active"  href="search.php">Search</a></li>
            <li><a href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>

	<form  action="control/updatepass.php" method="POST" class="All-form">
	     <table>
            <tr>
                <th>
                    <h1 style="margin-bottom: 10px"><label for="">Update your Password Here</label></h1>
					</br>
                </th>
				</tr>
				</table>
				
				<table>
			 <tr>
                <th>
                    <input type="password" name="oldPass" id="old_password" placeholder="Enter Old Password"><br>            
                </th>
            </tr>
				<tr>
					<th>
                    <input type="password" name="newPass" id="new_Password" placeholder="Enter New Password"><br>
						</th>
				</tr>
				<tr>
					<th>
                    <input type="password" name="conPass" id="con_Password" placeholder="Confirm your Password"><br>
						</th>
				</tr>
					</table>
					<br>
					<table>
				<tr>	
				
                <th align="right"><button type="submit" name="submit" >Update</button></th>
            </tr>
        </table>
	
		</form>
	
</body>
</html>