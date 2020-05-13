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
            <li><a href="search.php">Search</a></li>
            <li><a href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a class="active" href="profile.php">Profile</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
	
			

		<form  action="" method="POST" class="All-form" enctype="multipart/form-date">
	<table>
            <tr>
                <th>
                    <h1 style="margin-bottom: 20px" align="center"><label for="">User Profile</label></h1>
                </th>
            </tr>
			<tr>
                <th>
                    <h2 style="margin-bottom: 10px"><label for="">Here You can update your informations</label></h2>
                </th>
            </tr>
			</table>
			<table>
			<div class ="form-group ">
			
					<img src="placeholder.png" align="center" height="250px" width="20px" onclick="triggerClick()" id="ProfileDisplay"> 
                    <input type="file" name="ProfileImage" onchange="displayImage(this)" id="ProfileImage" style="display:none;" ><br>
                    <span id="ProfileImage"></span></br> 
                   <label for="profileImage"> choose Profile Image </label>					
            
			</div>
			
			
			<tr>
                <th>
                    <input type="text" name="Name" id="Name" placeholder="Name">
                    <span id="Name"></span></br>            
                </th>
            </tr>
			<tr>
                <th>
                    <input type="text" name="txtEmail" id="txtEmail" placeholder="Email">
                    <span id="userMail"></span> </br>           
                </th>
            </tr>
            <tr>
                <th>
                    <input type="Number" name="phone Number" id="phone Number" placeholder="phone Number">
                    <span id="phone Number"></span></br>
                </th>
            </tr>
			 <tr>
                <td align="left">
                    <label for="">Gender : &nbsp;</label>
                    <input type="radio" name="gender" id="" value="male">
                    <label for="">Male</label>
                    <input type="radio" name="gender" id="" value="female">
                    <label for="">Female</label>
                    <span id="checkGender"></span>
					</br></br>
                </td>
            </tr>
			<tr>
                <th>
                    <input type="text" name="Address" id="Address" placeholder="Address">
                    <span id="Address"></span> </br>           
                </th>
            </tr>
			<tr>
                <th>
                    <input type="text" name="Institution" id="Institution" placeholder="Institution">
                    <span id="Institution"></span>            
                </th>
            </tr>
			
            <tr>
                <th align="center"><button type="submit">Update</button></th>
            </tr>

	</form>
	<script src="script.js"> </script>
</body>
</html>