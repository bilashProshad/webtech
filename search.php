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
            <li><a class="active"  href="search.php">Search</a></li>
            <li><a href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
	<form  action="SearchResult.php" method="POST" class="inner">
	     <table>
            <tr>
                <th>
                    <h1 style="margin-bottom: 10px"><label for="">Search Tutor!</label></h1>
					</br>
                </th>
				</tr>
				</table>
				<table>
				<tr>
				<th align="left">
					<label for="">Subject :</label>
					<select name="subject">
					<label for="">  <option  value="Bangla"> Bangla </option></label>
					<label for="">  <option value="English"> English </option></label>
					<label for="">  <option value="Math"> Math </option></label>
					 <label for=""> <option value="Physic"> Physic </option></label>
					 <label for=""> <option value="ICT"> ICT </option></label>
					 <label for=""> <option value="Chemistry"> Chemistry </option></label>
					 <label for=""> <option value="Biology"> Biology </option></label>
					 <label for=""> <option value="Religion"> Religion </option></label>
					 <label for=""> <option value="General Science"> General Science </option></label>
					 <label for=""> <option value="Economics"> Economics </option></label>
					 <label for=""> <option value="Statistics"> Statistics </option></label>
					 <label for=""> <option value="Social Science"> Social Science </option></label>
					<label for="">  <option value="Finance"> Finance </option></label>
					 <label for=""> <option value="History"> History </option></label>
					  <label for=""><option value="Accounting"> Accounting </option></label>
					  </select>
					  
						<label for="">Class:</label>
						<select name="class">
						  <label for=""><option value="One">One</option></label>
						  <label for=""><option value="Two">Two</option></label>
						  <label for=""><option value="Three">Three</option></label>
						  <label for=""><option value="Four">Four</option></label> 
						  <label for=""><option value="Five">Five</option></label> 
						  <label for=""><option value="six">six</option></label> 
						  <label for=""><option value="Seven">Seven</option></label> 
						  <label for=""><option value="Eight">Eight</option> </label>
						 <label for=""> <option value="Nine">Nine</option> </label>
						  <label for=""><option value="Ten">Ten</option> </label>
						 <label for=""> <option value="Eleven">Eleven</option></label>
						 <label for=""> <option value="Twelve">Twelve</option></label>  
						    </select>
						
						<label for="">Medium :</label>
						<select name="medium">
					 <label for=""> <option value="Bangla"> Bangla </option></label>
					 <label for=""> <option value="English"> English </option></label>
					 <label for=""> <option value="Others"> Others </option></label>
					 <span id="checkMedium"></span>
					  </select>
					  </th>
					</tr>
					</table>
					<br>
					<table>
					
				<tr>
				
                <th align="left">
				<label for="">Salary Range : </label> 
				<select name="salRangeLow">
					          <label for=""><option value="1000">1000</option></label>
							  <label for=""><option value="2000">2000</option></label>
							 <label for=""> <option value="3000">3000</option></label>
							 
				</select>
				<?php echo"&nbsp"."<label> To </label>"."&nbsp";?>
				<select name="salRangeHigh">
					         <label for=""> <option value="2000">2000</option></label>
							 <label for=""> <option value="3000">3000</option></label>
							 <label for=""> <option value="4000">4000</option></label>
							 <label for=""> <option value="5000">5000</option></label>
							 <label for=""> <option value="6000">6000</option></label>
							 <label for=""> <option value="7000">7000</option></label>
							 
				</select>
 			
                </th>
            </tr>
			</table>
					<br>
					<table>
			<tr>
			<th align="left">
			   <label for="">Location:</label>
						  <select name="location">
						 <label for=""> <option value="Badda">Badda</option></label>
						 <label for=""> <option value="Nikunjo">Nikunjo</option></label>
						 <label for=""> <option value="Basabo">Basabo</option></label>
						 <label for=""> <option value="Gulshan">Gulshan</option></label>
						 <label for=""> <option value="Mohammodpur">Mohammodpur</option></label>
						  <label for=""><option value="Banani">Banani</option></label>
						<label for=""> <option value="khilkhet">khilkhet</option></label>	
							
						  </select>
						  </th>
				</tr>
				</table>
					<br>
					<table>
				<tr>
				<th align="left">
				<label for="">Preferred Institution:</label>
				<select name="institution">
							<label for=""><option value="Buet">Buet</option></label>
					         <label for=""> <option value="Aiub">Aiub</option></label>
							  <label for=""><option value="NSU">NSU</option></label>
							 <label for=""> <option value="IUB">IUB</option></label>
							  <label for=""><option value="DU">DU</option></label>
							  <label for=""><option value="Any">Any</option></label>
							  
							 
				</select>
				</th>
				</tr>
				</table>
					<br>
					<table>
				<tr>	
				
                <th align="right"><button type="submit" name="submit" >Search</button></th>
            </tr>
        </table>
	
		</form>
	
</body>
</html>