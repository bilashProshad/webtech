<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tutor Finder</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        
    </style>

</head>
<body>
    <div class="header">
        <h1>Online Tutor Finder</h1>
        <h4>Learn Teach Earn</h4>
    </div>

    <nav>        
    
          <ul>
            <li><a  href="Dashboard.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="Dashboard.php">Dashboard</a></li>
             <li><a href="RegistrationReview.php">Registration Review</a></li>
            <li><a class="active" href="UpdateSystemInfo.php">Update Information</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="AdminNotification.php">Notification</a></li>
           <li><a href="profile.php">Admin</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
    
	<form  action="" method="POST" class="All-form">
	     <table>
            <tr>
                <th>
                    <h1 style="margin-bottom: 10px"><label for="">Update System Information Here</label></h1>
					</br>
                </th>
				</tr>
				</table>
				
				<table>
			 <tr>
			 <label for="">Update Website description :</label>
					<th>
				<textarea rows="4" cols="50"></textarea>
				</th>
				<td>
				<th align="right"><button type="submit" name="Update" >Update</button></th>
				</td>
            </tr>
			</table>
			<table>
            <tr>
			 <label for="">Update Support Contact :</label>
               <th>
                    <input type="text" name="txtPhoneNo" id="txtPhoneNo" placeholder="" autocomplete="off"><br>
                    <span id="userPhone"></span>
                </th>
				
				<td>
				<th align="right"><button type="submit" name="Update" >Update</button></th>
					</td>
				</tr>
				</table>
				<table>
				   <tr>
				   <label for="">Update Support Email :</label>
                <th>
                    <input type="text" name="txtEmail" id="txtEmail" placeholder="" autocomplete="off"><br>
                    <span id="userMail"></span>            
                </th>
				<td>
                <th align="right"><button type="submit" name="Update" >Update</button></th>
				</td>
            </tr>
        </table>
	
        </form>
        
        
    
        
</body>
</html>