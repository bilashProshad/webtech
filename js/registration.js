function validation(){
    var user = document.getElementById('txtName').value;
    var email = document.getElementById('txtEmail').value;
    var phone = document.getElementById('txtPhoneNo').value;
    var pass = document.getElementById('txtPassword').value;
    var conPass = document.getElementById('txtConPassword').value;
    var gender = document.getElementsByName('gender');
    var userType = document.getElementsByName('userType');

    if(user == ""){
        document.getElementById('fullName').innerHTML = "** Pleaser enter your full name";
        return false;                
    }
    if(user.length <=2 || user.length > 20){
        document.getElementById('fullName').innerHTML = "** Character length must be between 3 and 20";
        return false;
    }
    if(!isNaN(user)){
        document.getElementById('fullName').innerHTML = "** Only characters are allowed";
        return false; 
    }
    document.getElementById('fullName').innerHTML = "";

    if(email == ""){
        document.getElementById('userMail').innerHTML = "** Please enter your email address";
        return false;
    }
    if (validateEmail(email)) {
        
    } else {
        document.getElementById('userMail').innerHTML = "** Please enter your valid email address";
        return false;
    }
    document.getElementById('userMail').innerHTML = "";
    
    if(phone == ""){
        document.getElementById('userPhone').innerHTML = "** Please enter your phone number";
        return false;
    }
    if(isNaN(phone)){
        document.getElementById('userPhone').innerHTML = "** Only numbers are allowed";
        return false;
    }
    if(phone.length != 11){
        document.getElementById('userPhone').innerHTML = "** Number length must be 11 digit";
        return false;
    }
    document.getElementById('userPhone').innerHTML = "";

    if(pass == ""){
        document.getElementById('userPass').innerHTML = "** Please enter your password";
        return false;
    }
    if(pass.length < 6){
        document.getElementById('userPass').innerHTML = "** Password length at least 6 or greater than 6";
        return false;
    }
    document.getElementById('userPass').innerHTML = "";

    if(conPass == ""){
        document.getElementById('conPass').innerHTML = "** Please enter your confirm password";
        return false;
    }
    if(pass != conPass){
        document.getElementById('conPass').innerHTML = "** Password is not matching";
        return false;
    }
    document.getElementById('conPass').innerHTML = "";

    if(userType[0].checked != true && userType[1].checked != true){
        document.getElementById('checkUserType').innerHTML = "** Please select user type";
        return false;
    }
    document.getElementById('checkUserType').innerHTML = "";

    if(gender[0].checked != true && gender[1].checked != true && gender[2].checked != true){
        document.getElementById('checkGender').innerHTML = "** Please choose your gender";
        return false;
    }   

}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}



