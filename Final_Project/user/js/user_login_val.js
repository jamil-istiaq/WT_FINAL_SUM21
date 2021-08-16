var hasError=false;

function get(id){
    return document.getElementById(id);
}

function validate(){
    refresh();
    if(get("email").value == ""){
        hasError = true;
        get("err_email").innerHTML = "<span style='color: red;'>Email Required</span>";
    }

    if(get("password").value == ""){
        hasError = true;
        get("err_pass").innerHTML = "<span style='color: red;'>Password Required</span>";
    }
    return !hasError;
}

    function refresh(){
        hasError=false;
        get("err_email").innerHTML ="";
        get("err_pass").innerHTML ="";
    }