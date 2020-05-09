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
            <li><a  href="Dashboard.php"><img align="center" src="image/home.png"></a></li>
            <li><a class="active" href="Dashboard.php">Dashboard</a></li>
            <li><a href="RegistrationReview.php">Registration Review</a></li>
            <li><a href="UpdateSystemInfo.php">Update Information</a></li>
            
            
        </ul>

        <ul class="r">
            <li><a href="AdminNotification.php">Notification</a></li>
            <li><a href="Profile.php">Admin</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
	<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="All-form">
	     <table>
            <tr>
                <th>
                  <h1  align="left" style="margin: 10px;font-size:150%"><label for="">Registration Review</label></h1>
					
                </th>
            </tr>
            <tr>
			</table>
	
			<table>
			<tr>
			<td>
			<label for="">Tutor A  </label>
			</th>
			
			</td>
			<td>
	
			
                <th align="left"><button type="submit" name="Details" >Details </button></th>
            
			<td>
			
                <th align="left"><button type="submit" name="Accept" >Accept</button></th>
            
			</td>
			<td>
			
                <th align="left"><button type="submit" name="Reject" >Reject</button></th>
            
			</td>
			</tr>
			</table>
			</form>

    

</body>
</html>