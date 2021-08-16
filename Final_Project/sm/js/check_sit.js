function get(id){
    return document.getElementById(id);
}

function checksit(e){
    var xhr= new XMLHttpRequest();
    xhr.open("GET","sit_avl.php?sit="+e.value,true);
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            if(this.responseText.trim()=="Booked"){
                get("err_snum").innerHTML="Sit is already Booked";
            }
            else{
                get("err_snum").innerHTML="Sit Available";
                
            }
        }

    };
    xhr.send();
}

function checksit_1(e){
    var xhr= new XMLHttpRequest();
    xhr.open("GET","sit_avl.php?sit1="+e.value,true);
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            if(this.responseText.trim()=="Booked"){
                get("err_snum1").innerHTML="Sit is already Booked";
            }
            else{
                get("err_snum1").innerHTML="Sit Available";
                
            }
        }

    };
    xhr.send();
}

function checksit_2(e){
    var xhr= new XMLHttpRequest();
    xhr.open("GET","sit_avl.php?sit2="+e.value,true);
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            if(this.responseText.trim()=="Booked"){
                get("err_snum2").innerHTML="Sit is already Booked";
            }
            else{
                get("err_snum2").innerHTML="Sit Available";
                
            }
        }

    };
    xhr.send();
}

function checksit_3(e){
    var xhr= new XMLHttpRequest();
    xhr.open("GET","sit_avl.php?sit3="+e.value,true);
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            if(this.responseText.trim()=="Booked"){
                get("err_snum3").innerHTML="Sit is already Booked";
            }
            else{
                get("err_snum3").innerHTML="Sit Available";
                
            }
        }

    };
    xhr.send();
}

function checksit_4(e){
    var xhr= new XMLHttpRequest();
    xhr.open("GET","sit_avl.php?sit4="+e.value,true);
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            if(this.responseText.trim()=="Booked"){
                get("err_snum4").innerHTML="Sit is already Booked";
            }
            else{
                get("err_snum4").innerHTML="Sit Available";
                
            }
        }

    };
    xhr.send();
}



