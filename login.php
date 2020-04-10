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
            <li><a href="index.php"><img align="center" src="image/home.png"></a></li>            
        </ul>

        <ul class="r">
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
    
    </nav>

    <form action="" method="post">
        <table>
            <tr>
                <th>
                    <h1><label for="">Login</label></h1>
                </th>
            </tr>
            <tr>
                <th><input type="text" name="txtEmail" id="" placeholder="Email"></th>
            </tr>
            <tr>
                <th><input type="password" name="txtPassword" id="" placeholder="Password"></th>
            </tr>
            <tr>
                <th align="right"><button type="submit">Login</button></th>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <label for="">Forgot your passoword?</label> <a href="#">Click Here</a>
                </td>                
            </tr>
            <tr>
                <td>
                    <label for="">Don't have an account?</label> <a href="#">Click Here</a>
                </td>
            </tr>
        </table>
    </form>


</body>
</html>