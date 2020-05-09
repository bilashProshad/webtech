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
            <li><a href="UpdateSystemInfo.php">Update Information</a></li>
            
            
        </ul>

        <ul class="r">
            <li><a href="AdminNotification.php">Notification</a></li>
            <li><a class="active" href="profile.php">Profile</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
	<form name="search_form_results"  action="AdminProfileUpdate.php" method="POST" class="Timeline-form">
	<table>
	<tr>
                <th>
                    <h3 style="margin-bottom: 5px"><label for="">Timeline</label> </h3>
                </th>
            </tr>
	   <tr>
                <th>
                    <hr>
                </th>
            </tr>
			  </tr>
			
            <tr>
				<th align="center"><button type="submit" name="Update Tution Information" >Update Personal Information</button></th>
            </tr>
			  </tr>
			  </table>
	
			<table>
            <tr>
                <th align="center"><button type="submit" name="Admin Account Settings"onclick="AdminAccountSettings();">Account Settings</button></th>
            </tr
			
			</table>

			</form>
				<script src="script.js"> </script>
</body>
</html>