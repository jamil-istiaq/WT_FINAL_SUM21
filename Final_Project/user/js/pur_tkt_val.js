var hasError=false;

function get(id){
    return document.getElementById(id);
}

function vld_ptype(){
    var pt=document.querySelector('input[name="ptype[]"]:checked');
    if(pt==null){
        return false;
    }
    return true;
}

function validate(){
    refresh();
    if(get("routeTo").selectedIndex == 0){
        hasError = true;
        get("err_Toroute").innerHTML = "<span style='color: red;'>To Required,</span>";
    }
    if(get("routeFrom").selectedIndex == 0){
        hasError = true;
        get("err_Fromroute").innerHTML = "<span style='color: red;'>From Required</span>";
    }

    if(get("tday").selectedIndex == 0){
        hasError = true;
        get("err_date").innerHTML = "<span style='color: red;'>Day Required</span>";
    }

    if(get("tmonth").selectedIndex == 0){
        hasError = true;
        get("err_month").innerHTML = "<span style='color: red;'>Month Required</span>";
    }

    if(get("time").selectedIndex == 0){
        hasError = true;
        get("err_time").innerHTML = "<span style='color: red;'>Time Required</span>";
    }

    if(get("format").selectedIndex == 0){
        hasError = true;
        get("err_tformat").innerHTML = "<span style='color: red;'>Format Required</span>";
    }

    if(get("class").selectedIndex == 0){
        hasError = true;
        get("err_tclass").innerHTML = "<span style='color: red;'>Class Required</span>";
    }
    if(get("passenger").selectedIndex == 0){
        hasError = true;
        get("err_pnum").innerHTML = "<span style='color: red;'>Passenger Number Required</span>";
    }
    if(!vld_ptype()){
        hasError=true;
        get("err_ptype").innerHTML= "<span style='color: red;'>Passenger Type Required</span>";

    }

    if(get("adult").selectedIndex == 0){
        hasError = true;
        get("err_adult").innerHTML = "<span style='color: red;'>Adult Number Required</span>";
    }

    if(get("child").selectedIndex == 0){
        hasError = true;
        get("err_child").innerHTML = "<span style='color: red;'>Child Number Required</span>";
    }

    if(get("train").selectedIndex == 0){
        hasError = true;
        get("err_train").innerHTML = "<span style='color: red;'>Train Name Required</span>";
    }

    if(get("cnum").selectedIndex == 0){
        hasError = true;
        get("err_cnum").innerHTML = "<span style='color: red;'>Coach Number Required</span>";
    }

    if(get("sit").selectedIndex == 0){
        hasError = true;
        get("err_snum").innerHTML = "<span style='color: red;'>Sit Number Required</span>";
    }

    if(get("sit1").selectedIndex == 0){
        hasError = true;
        get("err_snum1").innerHTML = "<span style='color: red;'>Sit Number Required</span>";
    }

    if(get("sit2").selectedIndex == 0){
        hasError = true;
        get("err_snum2").innerHTML = "<span style='color: red;'>Sit Number Required</span>";
    }

    if(get("sit3").selectedIndex == 0){
        hasError = true;
        get("err_snum3").innerHTML = "<span style='color: red;'>Sit Number Required</span>";
    }

    if(get("sit4").selectedIndex == 0){
        hasError = true;
        get("err_snum4").innerHTML = "<span style='color: red;'>Sit Number Required</span>";
    }

    
    return !hasError;
}

function refresh(){
    hasError=false;
    get("err_Toroute").innerHTML ="";
    get("err_Fromroute").innerHTML ="";
    get("err_date").innerHTML ="";
    get("err_month").innerHTML ="";
    get("err_time").innerHTML ="";
    get("err_tformat").innerHTML ="";
    get("err_tclass").innerHTML ="";
    get("err_pnum").innerHTML ="";
    get("err_ptype").innerHTML ="";
    get("err_adult").innerHTML="";
    get("err_child").innerHTML="";
    get("err_train").innerHTML="";
    get("err_cnum").innerHTML="";
    get("err_snum").innerHTML="";
    get("err_snum1").innerHTML="";
    get("err_snum2").innerHTML="";
    get("err_snum3").innerHTML="";
    get("err_snum4").innerHTML="";

}