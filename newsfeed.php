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
            <li><a href="logout.php">Logout</a></li>
        </ul>
    
    </nav>
	
	<?php
		$i = 5;
		while($i>0){
	?>

	<form  action="#" method="POST" class="newsfeed-form">
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
			<th align="left"> Subject </th>
			<th align="left">: &nbsp; &nbsp</th>
			<th align="left">Math</th>
			</tr>
			 <tr>
			<th align="left"> Class 
					
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"> Eight </th>
			</tr>
			<tr>
			<th align="left"> Medium 
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left">English</th>
			</tr>
			<tr>
			<th align="left"> Salary 
				
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left">5000tk</th>
			</tr>
			<tr>
			<th align="left"> Location 		
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left">Dhaka</th>
			</tr>
			<tr>
			<th align="left"> Preferred Institution &nbsp;			
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left">BUET</th>
			</tr>
				<tr>
			<th align="left"> Deadline 			
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left">12/12/12</th>
			</tr>
			</table>
			</br>
			<table>
	
			 <tr>
                <th align="left"><button type="submit" name="Apply Now" >Apply Now</button></th>
            </tr>
			
			</table>
	</form>
		

	<?php
		$i--;
		}
	?>

</body>
</html>