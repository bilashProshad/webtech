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
            <li><a class="active" href="newsfeed.php">News Feed</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
	<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="All-form">
	     <table>
            <tr>
                <th
                    align="left" style="margin: 10px;font-size:150%"><label for="">Student</label>
					
                </th>
            </tr>
            <tr>
			</table>
			</br>
			<table>
			<tr>
			<th align="left"> Subject :
			
				</th>
			</tr>
			 <tr>
			<th align="left"> Class  &nbsp &nbsp :
					
                </th>
			</tr>
			<tr>
			<th align="left"> Medium :
				</th>
			</tr>
			<tr>
			<th align="left"> Salary  &nbsp :
				
                </th>
			</tr>
			<tr>
			<th align="left"> Location :
			
				</th>
			</tr>
			<tr>
			<th align="left"> Preferred Institution :
			
				</th>
			</tr>
				<tr>
			<th align="left"> Deadline :
			
				</th>
			</tr>
			</table>
			</br>
			<table>
	
			 <tr>
                <th align="left"><button type="submit" name="Apply Now" >Apply Now</button></th>
            </tr>
			
			</table>
			</form>

    

</body>
</html>