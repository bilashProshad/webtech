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
            <li><a href="newsfeed.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="newsfeed.php">News Feed</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a class="active" href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    
    </nav>
	<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="All-form">
	     <table>
            <tr>
                <th>
                    <h1 style="margin-bottom: 25px"><label for="">Post For Tution</label></h1>
                </th>
            </tr>
			</table>
		
			<table>
            <tr>
						<td>
						<label for="">Medium :</label>
						
					 <label for=""> <input type="checkbox" name="Bangla" value="Bangla"> Bangla </input></label>
					 <label for=""> <input type="checkbox" name="English" value="English"> English </input></label>
					 <label for=""> <input type="checkbox" name="Others" value="Others"> Others </input></label>
					  
					  
					  </td>
            </tr>
			</table>
			</br>
			<table>
		
			<tr>
				<td>
					<label for="">Preferred Subject :</label></br></br>
					
					<label for="">  <input type="checkbox" name="Bangla" value="Bangla"> Bangla </input></label>
					<label for="">  <input type="checkbox" name="English" value="English"> English </input></label>
					<label for="">  <input type="checkbox" name="Math" value="Math"> Math </input></label> 
					 <label for=""> <input type="checkbox" name="Physic" value="Physic"> Physic </input></label>
					 <label for=""> <input type="checkbox" name="ICT" value="ICT"> ICT </input></label>
					 <label for=""> <input type="checkbox" name="Chemistry" value="Chemistry"> Chemistry </input></label>
					 <label for=""> <input type="checkbox" name="Biology" value="Biology"> Biology </input></label>
					 <label for=""> <input type="checkbox" name="Religion" value="Religion"> Religion </input></label>
					 <label for=""> <input type="checkbox" name="General Science" value="General Science"> General Science </input></label>
					 </br></br>
					 <label for=""> <input type="checkbox" name="Economics" value="Economics"> Economics </input></label>
					 <label for=""> <input type="checkbox" name="Statistics" value="Statistics"> Statistics </input></label> 
					 <label for=""> <input type="checkbox" name="Social Science" value="Social Science"> Social Science </input></label>
					<label for="">  <input type="checkbox" name="Finance" value="Finance"> Finance </input></label>
					 <label for=""> <input type="checkbox" name="History" value="History"> History </input></label>
					  <label for=""><input type="checkbox" name="Accounting" value="Accounting"> Accounting </input></label>
					  
					  </td>  
            </tr>
			</table>
			</br>
			<table>
			   <tr>
						<td>
						<label for="">Class:</label>
						   <select>
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
 
						<?php echo"&nbsp";?>
						   <label for="">Location:</label>
						  <select>
						 <label for=""> <option value="Badda">Badda</option></label>
						 <label for=""> <option value="Nikunjo">Nikunjo</option></label>
						 <label for=""> <option value="Basabo">Basabo</option></label>
						 <label for=""> <option value="Gulshan">Gulshan</option></label>
						 <label for=""> <option value="Mohammodpur">Mohammodpur</option></label>
						  <label for=""><option value="Banani">Banani</option></label>
						<label for=""> <option value="khilkhet">khilkhet</option></label>	
							
						  </select>
						  </td>
				</tr>
				</table>
				</br>
			<table>
			
				<tr>
				<td>
				<label for="">Salary Range : </label> 
				<select>
					          <label for=""><option value="one thousand">one thousand</option></label>
							  <label for=""><option value="two thousand">two thousand</option></label>
							 <label for=""> <option value="Three thousand">Three thousand</option></label>
							 
				</select>
				<?php echo"&nbsp"."To"."&nbsp";?>
				<select>
					         <label for=""> <option value="Two thousand">Two thousand</option></label>
							 <label for=""> <option value="Three thousand">Three thousand</option></label>
							 <label for=""> <option value="Four thousand">Four thousand</option></label>
							 <label for=""> <option value="Five thousand">Five thousand</option></label>
							 <label for=""> <option value="Six thousand">Six thousand</option></label>
							 <label for=""> <option value="Seven thousand">Seven thousand</option></label>
							 
				</select>
				
				</td>
				</tr>
				</table>
				</br>
				<table>
				
				<tr>
				<td><label for="">Preferred Institution:</label>
				<select>
							<label for=""><option value="Buet">Buet</option></label>
					         <label for=""> <option value="Aiub">Aiub</option></label>
							  <label for=""><option value="NSU">NSU</option></label>
							 <label for=""> <option value="IUB">IUB</option></label>
							  <label for=""><option value="DU">DU</option></label>
							  <label for=""><option value="Any">Any</option></label>
							  
							 
				</select>
				</td>
				
				</tr>
				</table>
				</br>
				<table>
				<tr>
				<td>
				<label for="">Preferable Time : </label>
				<input type="time" id="Preferable Time "name="Preferable Time">
				</td>
				</tr>
				</table>
				</br>
				<table>
				<tr>
				<td>
				<label for="">Deadline : </label>
				<input type="date" id="Deadline "name="Deadline">
				</td>
				</tr>
			</table>
			</br>
			<table>
            <tr>
                <th ><button type="submit" style="transform:translate(500%,-60%)" name="Post" >Post</button></th>
            </tr>
        </table>

		</form>
	
</body>
</html>