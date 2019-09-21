
function is_username_valid(username){
    var lowerc=/[a-z]/g;
    var leng=username.length;
if(leng>=5&&leng<=9&&username.match(lowerc).length==leng)
    {
    return true;
    console.log("Username Benar");
    }
else{
    return false;
    }
}

function is_password_valid(password){
    var lowerc=/[a-z]/g;
    var upperc=/[A-Z]/g;
    var no=/[0-9]/g;
    var spesialc=/[_#@!%$&]/g;

if(password.length==10&&lowerc.test(password)&&upperc.test(password)&&no.test(password)&&specialc.test(password))
    {
        return true;
        console.log("Password Berhasil");
    }
else
    {
        return false;
    }
}
var name=is_username_valid("alwin");
var pass=is_username_valid("aLw1n@lams");
console.log(name);
console.log(pass);

