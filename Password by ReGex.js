var passc=new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{10,10})");
var userc=new RegExp("^(?=.*[a-z])(?=.{5,9})");

function is_username_valid(username){

if(userc.test(username))
    {
    console.log("Username Benar");
    }
else {console.log("Username Salah");}    
}

function is_password_valid(password){
   

if(passc.test(password))
    {
        console.log("password Benar");
    }
else {console.log("password Salah");;}    
}


is_username_valid('alwin');
is_password_valid('ALw1n@lams');

