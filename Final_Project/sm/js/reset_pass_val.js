var hasError=false;

function get(id){
    return document.getElementById(id);
}

function validate(){
    refresh();
    var pw = document.getElementById("password").value;
    var pw1 = document.getElementById("pass1").value;
    if(get("email").value == ""){
        hasError = true;
        get("err_email").innerHTML = "<span style='color: red;'>Email Required</span>";
    }

    if(get("phn").value == ""){
        hasError = true;
        get("err_phn").innerHTML = "<span style='color: red;'>Phone Number Required</span>";
    }
    if (get("phn").value.length==11){
        hasError=true;
        get("phn").innerHTML="<span style='color: red;'>Phone Number Must be 11 Digit</span>";
    }

    if(pw==""){
        hasError = true;
        get("err_pass").innerHTML = "<span style='color: red;'>Password Required</span>";
    }
    else if(pw.length <=5){
        hasError = true;
        get("err_pass").innerHTML = "<span style='color: red;'>Password must contain Five character</span>";
    }

    if(get("pass1").value == ""){
        hasError = true;
        get("err_pass1").innerHTML = "<span style='color: red;'>Re-type password Required</span>";
    }
    else if (pw != pw1) {
        hasError = true;
        get("err_pass1").innerHTML = "<span style='color: red;'>Password Doesn't Match</span>";
    }
    return !hasError;
}

    function refresh(){
        hasError=false;
        get("err_email").innerHTML ="";
        get("err_phn").innerHTML ="";
        get("err_pass").innerHTML ="";
        get("err_pass1").innerHTML ="";
        
    
    }