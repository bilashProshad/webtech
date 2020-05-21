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
            <li><a href="Dashboard.php">Dashboard</a></li>
            <li><a class="active" href="RegistrationReview.php">Registration Review</a></li>
            <li><a href="UpdateSystemInfo.php">Update Information</a></li>
            
            
        </ul>

        <ul class="r">
            <li><a href="Profile.php">Admin</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
	<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="inner">
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
            <?php
	        include 'control/connection.php';
		    $q = "SELECT * FROM `user` WHERE `pending`= 1";
		    $query = mysqli_query($con,$q);

		    while($res = mysqli_fetch_array($query)){
	        ?>
            <td>
			<label for=""> <?php echo $res['name'] ?> &nbsp;&nbsp;&nbsp; </label>
			</th>
			
			</td>
			<td>
                <th align="left"><button > <a style="color:white;" href="details.php?id=<?php echo $res['id']; ?>" > Details </a> </button></th>
			<td>			
                <th align="left"><button > <a style="color:white;" href="control/accept.php?id=<?php echo $res['id']; ?>" > Accept </a> </button></th>
			</td>
			<td>			
                <th align="left"><button > <a style="color:white;" href="control/reject.php?id=<?php echo $res['id']; ?>" > Reject </a> </button></th>
            </td>
            </tr>
            <?php
                }
            ?>
			</table>
			</form>

    

</body>
</html>