var hasError=false;

function get(id){
    return document.getElementById(id);
}

function validate(){
    refresh();
    if(get("pay_method").selectedIndex == 0){
        hasError = true;
        get("err_pay").innerHTML = "<span style='color: red;'>Payment Method Required</span>";
    }

    if(get("amount").value == ""){
        hasError = true;
        get("err_amount").innerHTML = "<span style='color: red;'>Amount Required</span>";
    }

    if(get("ac_number").value == ""){
        hasError = true;
        get("ac_err").innerHTML = "<span style='color: red;'>Account Number Required</span>";
    }

    if(get("tkt_number").value == ""){
        hasError = true;
        get("tkt_err").innerHTML = "<span style='color: red;'>Ticket Number Required</span>";
    }

    return !hasError;
}

function refresh(){
    hasError=false;
    get("err_pay").innerHTML ="";
    get("err_amount").innerHTML="";
    get("ac_err").innerHTML ="";
    get("tkt_err").innerHTML="";


}