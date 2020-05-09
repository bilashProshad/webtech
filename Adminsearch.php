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
            <li><a href="notification.php">Notification</a></li>
            <li><a href="RegistrationReview.php">Admin</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    
    </nav>
	<form  action="SearchResult.php" method="POST" class="All-form">
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
					<select>
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
						
						<label for="">Medium :</label>
						<select>
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
				<label for="">Salary :</label>
                    <input type="Number" name="Salary" id="Salary" placeholder="Salary " autocomplete="off" ><br>
					
                       </th>
            </tr>
			</table>
					<br>
					<table>
			<tr>
			<th align="left">
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
						  </th>
				</tr>
				</table>
					<br>
					<table>
				<tr>
				<th align="left">
				<label for="">Preferred Institution:</label>
				<select>
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
				
                <th align="right"><button type="submit" name="Search" >Search</button></th>
            </tr>
        </table>
	
		</form>
	
</body>
</html>