var g_flag=false;



function viewOutput(e){

    var op=e.value;

    get("op").innerHTML=op;

}



function hideinfo(){

    get("info").style.display="none";

}



function showinfo(){

    get("info").style.display="block";

}

function get(id){

    return document.getElementById(id);

}
