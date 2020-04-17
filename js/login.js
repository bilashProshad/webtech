function validation(){
    var email = document.getElementById('txtEmail').value;
    var pass = document.getElementById('txtPassword').value;

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

    if(pass == ""){
        document.getElementById('userPass').innerHTML = "** Please enter your password";
        return false;
    }
    if(pass.length < 6){
        document.getElementById('userPass').innerHTML = "** Password length at least 6 or greater than 6";
        return false;
    }
    document.getElementById('userPass').innerHTML = "";


}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}