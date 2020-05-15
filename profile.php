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
            <th><button onclick="profileBtn();" class="active" type="submit" name="btnPersonalInfo" >Personal Information</button></th>
        </tr>
        <tr>
            <th><button onclick="tutioninfoBtn();" type="submit" name="btnTutionInfo">Tution Information</button></th>
        </tr>
        <tr>
            <th><button onclick="acSetBtn();" type="submit" name="btnAccountSet">Account Settings</button></th>
        </tr>
    </table>
    </form>

    <form  action="" method="POST" class="inner" enctype="multipart/form-date">
	<table>
        <tr>
            <th>
                <h1 style="margin-bottom: 10px"><label for="">User Profile</label></h1>
            </th>
        </tr>
        <tr>
            <th align="center">
                <img src="placeholder.png" align="center" onclick="triggerClick()" id="ProfileDisplay"> 
                    <input type="file" name="ProfileImage" onchange="displayImage(this)" id="ProfileImage" style="display:none;" ><br>
            </th>
        </tr>
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
            <th align="left">
                <label for="">Gender : &nbsp;</label>
                <input type="radio" name="gender" id="" value="male">
                <label for="">Male</label>
                <input type="radio" name="gender" id="" value="female">
                <label for="">Female</label>
                <span id="checkGender"></span>                
            </th>
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
    </table>
	</form>
    
            
	<script src="js/script.js"> </script>
</body>
</html>