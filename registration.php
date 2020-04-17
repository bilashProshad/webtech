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
            <li><a href="login.php">Login</a></li>
            <li><a class="active" href="registration.php">Registration</a></li>
        </ul>
    
    </nav>

    <form action="#" onsubmit="return validation()" class="registration-form">
        <table>
            <tr>
                <th>
                    <h1 style="margin-bottom: 10px"><label for="">Registration</label></h1>
                </th>
            </tr>
            <tr>
                <th>
                    <input type="text" name="txtName" id="txtName" placeholder="Full Name" autocomplete="off"> <br>
                    <span id="fullName"></span>
                </th>
            </tr>
            <tr>
                <th>
                    <input type="text" name="txtEmail" id="txtEmail" placeholder="Email" autocomplete="off"><br>
                    <span id="userMail"></span>            
                </th>
            </tr>
            <tr>
                <th>
                    <input type="text" name="txtPhoneNo" id="txtPhoneNo" placeholder="Phone Number" autocomplete="off"><br>
                    <span id="userPhone"></span>
                </th>
            </tr>
            <tr>
                <th>
                    <input type="password" name="txtPassword" id="txtPassword" placeholder="Password" autocomplete="off"><br>
                    <span id="userPass"></span>
                </th>
            </tr>
            <tr>
                <th>
                    <input type="password" name="txtConPassword" id="txtConPassword" placeholder="Confirm Password " autocomplete="off"><br>
                    <span id="conPass"></span>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="">Register as &nbsp;</label>
                    <input type="radio" name="userType" id="" value="student">
                    <label for="">Student</label>
                    <input type="radio" name="userType" id="" value="teacher">
                    <label for="">Teacher</label> <br>
                    <span id="checkUserType"></span>
                </td>
            </tr>
            <tr>
                <th>
                    <hr>
                </th>
            </tr>
            <tr>
                <td align="right">
                    <label for="">I am a &nbsp;</label>
                    <input type="radio" name="gender" id="" value="male">
                    <label for="">Male</label>
                    <input type="radio" name="gender" id="" value="female">
                    <label for="">Female</label>
                    <input type="radio" name="gender" id="" value="other">
                    <label for="">Other</label> <br>
                    <span id="checkGender"></span>
                </td>
            </tr>
            <tr>
                <th align="center"><button type="submit">Register</button></th>
            </tr>
            <tr>
                <td align="center">
                    <label for="">By clicking register you agree </label> <br>
                    <label for="">on our terms and conditions</label>
                </td>
            </tr>
        </table>
        <table style="margin-top: 20px">
            <tr>
                <td>
                    <label for="">Already have an account?</label> <a href="login.php">Click Here</a>
                </td>
            </tr>
        </table>
    </form>

    <script type="text/javascript" src="js/registration.js"> </script>

</body>
</html>