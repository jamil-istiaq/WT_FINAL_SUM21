var hasError=false;

function get(id){
    return document.getElementById(id);
}

function validate(){
    refresh();
    if(get("name").value == ""){
        hasError = true;
        get("err_name").innerHTML = "<span style='color: red;'>Name Required</span>";
    }

    if(get("email").value == ""){
        hasError = true;
        get("err_email").innerHTML = "<span style='color: red;'>Email Required</span>";
    }

    if(get("phone").value == ""){
        hasError = true;
        get("err_phn").innerHTML = "<span style='color: red;'>Phone Required</span>";
    }

    if(get("adrs").value == ""){
        hasError = true;
        get("err_adrs").innerHTML = "<span style='color: red;'>Address Required</span>";
    }

    if(get("opsn").value == ""){
        hasError = true;
        get("err_job").innerHTML = "<span style='color: red;'>Occupation Required</span>";
    }

    if(get("health").value == ""){
        hasError = true;
        get("err_health").innerHTML = "<span style='color: red;'>Health Required</span>";
    }

    if(get("password").value == ""){
        hasError = true;
        get("err_pass").innerHTML = "<span style='color: red;'>Password Required</span>";
    }

    return !hasError;
}

    function refresh(){
        hasError=false;
        get("err_name").innerHTML ="";
        get("err_email").innerHTML ="";
        get("err_phn").innerHTML ="";
        get("err_adrs").innerHTML ="";
        get("err_job").innerHTML ="";
        get("err_health").innerHTML ="";
        get("err_pass").innerHTML ="";
    
    }