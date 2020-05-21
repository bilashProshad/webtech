<?php
if(isset($_POST['update'])){
$contact = $_POST['txtPhoneNo'];
$email = $_POST['txtEmail'];
$description = $_POST['txtarea'];

include 'control/connection.php';
$q = "UPDATE `systeminfo` SET `contract`='$contact',`email`='$email',`description`='$description' WHERE `id` = 1";
$query = mysqli_query($con,$q);

if($query){
?>
<script>alert("Information Updated")</script>
<?php
}
else{
?>
<script>alert("Update Failed")</script>
<?php
}
}
?>

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
           <li><a href="profile.php">Admin</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
    <?php
            include 'control/connection.php';
            $q = "SELECT * FROM `systeminfo`";
            $query = mysqli_query($con,$q);
            while($res = mysqli_fetch_array($query)){
        ?>
	<form  action="UpdateSystemInfo.php" method="POST" class="inner">
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
				<textarea rows="4" cols="50" name="txtarea">
                <?php echo $res['description']; ?>
                </textarea>
				</th>
				<td>
				<th align="right"><button type="submit" name="update" >Update</button></th>
				</td>
            </tr>
			</table>
			<table>
            <tr>
			 <label for="">Update Support Contact :</label>
               <th>
                    <input type="text" name="txtPhoneNo" id="txtPhoneNo" value="<?php echo $res['contract']; ?>" autocomplete="off"><br>
                    <span id="userPhone"></span>
                </th>
				
				<td>
				<th align="right"><button type="submit" name="update" >Update</button></th>
					</td>
				</tr>
				</table>
				<table>
				   <tr>
				   <label for="">Update Support Email :</label>
                <th>
                    <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $res['email']; ?>" autocomplete="off"><br>
                    <span id="userMail"></span>            
                </th>
				<td>
                <th align="right"><button type="submit" name="update" >Update</button></th>
				</td>
            </tr>
        </table>
	
        </form>
        
        <?php
            }
        ?>
    
        
</body>
</html>