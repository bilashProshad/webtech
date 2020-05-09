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
           <li><a href="AdminProfile.php">Admin</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
	<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="All-form">
	     <table>
		 <tr>
                <th>
                    <h1 style="margin-bottom: 30px "><label for="">Admin Dashboard</label></h1>
                </th>
            </tr>
            <tr>
                <th
                    align="left" style="margin: 5px;font-size:130%"><label for="">Student</label>
					
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
                <td><th align="right" ><button type="submit" name="Details" >Details</button></th></td>
               <td> <th align="right"><button type="submit" name="Hide" >Hide</button></th></td>
                <td><th align="right"><button type="submit" name="Delete" >Delete</button></th></td>
            </tr>
			
			</table>
			</form>

    

</body>
</html>