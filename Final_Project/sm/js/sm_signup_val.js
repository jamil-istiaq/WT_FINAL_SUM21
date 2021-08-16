var hasError=false;

function get(id){
    return document.getElementById(id);
}

function gender(){
    var gn=document.querySelector('input[name="gender"]:checked');
    if(gn==null){
        return false;
    }
    return true;
}

function validate(){
    refresh();
    if(get("name").value == ""){
        hasError = true;
        get("err_name").innerHTML = "<span style='color: red;'>Name Required</span>";
    }

    if(get("email").value == ""){
        hasError = true;
        get("err_email").innerHTML = "<span style='color: red;'>Password Required</span>";
    }

    if(get("password").value == ""){
        hasError = true;
        get("err_pass").innerHTML = "<span style='color: red;'>Password Required</span>";
    }

    if(get("phn").value == ""){
        hasError = true;
        get("err_phn").innerHTML = "<span style='color: red;'>Phone Number Required</span>";
    }
    if(get("nid").value == ""){
        hasError = true;
        get("err_nid").innerHTML = "<span style='color: red;'>NID Required</span>";
    }

    if(get("adrs").value == ""){
        hasError = true;
        get("err_adrs").innerHTML = "<span style='color: red;'>Address Required</span>";
    }
    if(get("day").selectedIndex == 0){
        hasError = true;
        get("err_day").innerHTML = "<span style='color: red;'>Day Required</span>";
    }

    if(get("month").selectedIndex == 0){
        hasError = true;
        get("err_month").innerHTML = "<span style='color: red;'>Month Required</span>";
    }
    if(get("year").selectedIndex == 0){
        hasError = true;
        get("err_year").innerHTML = "<span style='color: red;'>Year Required</span>";
    }
    if(get("group").selectedIndex == 0){
        hasError = true;
        get("err_blood_group").innerHTML = "<span style='color: red;'>Blood Group Required</span>";
    }
    if(!gender()){
        hasError=true;
        get("err_gender").innerHTML = "<span style='color: red;'>Gender Required</span>";
    }
    if(get("opsn").value == ""){
        hasError = true;
        get("err_opsn").innerHTML = "<span style='color: red;'>Occupation Required</span>";
    }
    
    return !hasError;
}

    function refresh(){
        hasError=false;
        get("err_name").innerHTML ="";
        get("err_email").innerHTML ="";
        get("err_pass").innerHTML ="";
        get("err_phn").innerHTML ="";
        get("err_nid").innerHTML ="";
        get("err_adrs").innerHTML ="";
        get("err_day").innerHTML ="";
        get("err_month").innerHTML ="";
        get("err_year").innerHTML ="";
        get("err_blood_group").innerHTML ="";
        get("err_gender").innerHTML ="";
        get("err_opsn").innerHTML ="";
    }