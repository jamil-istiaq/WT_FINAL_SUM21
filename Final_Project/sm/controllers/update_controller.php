<?php
 
 include_once 'models/db_config.php';

 $email=$_SESSION["ulog"];
 
 $name="";
 $err_name="";

 $email="";
 $err_email="";

 $phn="";
 $err_phn="";

 $adrs="";
 $err_adrs="";

 $pass="";
 $err_pass="";

 $hasError=false;

 if(isset($_POST["update"])){
    
    if(empty($_POST["name"])){
        $hasError=true;
        $err_name="Name required";
    }
    else{
        $name=$_POST["name"];
    }

    if(empty($_POST["email"])){
        $hasError=true;
        $err_name="Email required";}
    else{
        $email=$_POST["email"];
    }

    if(empty($_POST["phn"])){
        $hasError=true;
        $err_phn="Phone required";}
    else{
        $phn=$_POST["phn"];
    }

    if(empty($_POST["adrs"])){
        $hasError=true;
        $err_adrs="Address required";}
    else{
        $adrs=$_POST["adrs"];
    }

    if(empty($_POST["password"])){
        $hasError=true;
        $err_pass="Passward required";}
    else{
        $pass=$_POST["password"];
       // var_dump($pass);
       // check_pass($pass);
       
    }
    $a=check_pass($pass);
    
    if($a==true){
        header("Location: sm_info.php");
    }
    else{
        $err_pass="Check Password Again";
    }
    if(!$hasError){
     $eid=$_POST['e_id'];
     $query= "UPDATE add_sm SET name='$name', email='$email', phone='$phn', address='$adrs' where e_id='$eid' and pass='$pass'";
     execute($query);
    }
    
    
 }
 

 function check_pass($pass){
    $query = "select pass from add_sm where pass='$pass'";
    $rs = get($query);
    if(count($rs)>0){
        return true;
    }
    return false;
    
}
 
 ?>