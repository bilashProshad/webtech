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
    
    </nav>
	
    <form name="search_form_results"  action="#" method="POST" class="timeline">
    <table class="proTable">
        <tr>
            <th><label for="timeline">Timeline</label></th>
        </tr>
        <tr>
            <th><button onclick="profileBtn();" type="submit" name="btnPersonalInfo" >Personal Information</button></th>
        </tr>
        <tr>
            <th><button onclick="tutioninfoBtn();" type="submit" name="btnTutionInfo">Tution Information</button></th>
        </tr>
        <tr>
            <th><button onclick="acSetBtn();" class="active" type="submit" name="btnAccountSet">Account Settings</button></th>
        </tr>
    </table>
    </form>

    <form  action="" method="POST" class="inner">
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
                    <input type="password" name="old_password" id="old_password" placeholder="Enter Old Password"><br>
                    <span id="old_password"></span>            
                </th>
            </tr>
				<tr>
					<th>
                    <input type="password" name="new_Password" id="new_Password" placeholder="Enter New Password"><br>
                    <span id="new_Password"></span>
						</th>
				</tr>
				<tr>
					<th>
                    <input type="password" name="con_Password" id="con_Password" placeholder="Confirm your Password"><br>
                    <span id="con_Password"></span>
						</th>
				</tr>
					</table>
					<br>
					<table>
				<tr>	
				
                <th align="right"><button type="submit" name="Update" >Update</button></th>
            </tr>
        </table>
	
		</form>
            
	<script src="js/script.js"> </script>
</body>
</html>