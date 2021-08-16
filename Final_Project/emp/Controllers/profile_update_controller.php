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

    if(empty($_POST["phone"])){
        $hasError=true;
        $err_phn="Phone required";}
    else{
        $phn=$_POST["phone"];
    }

    if(empty($_POST["address"])){
        $hasError=true;
        $err_adrs="Address required";}
    else{
        $adrs=$_POST["address"];
    }

    if(empty($_POST["password"])){
        $hasError=true;
        $err_pass="Passward required";}
    else{
        $pass=$_POST["password"];
       
    }
    ;
    if(check_pass($pass)==true){
        header("Location: profileinfo.php");
    }
    else{
        $err_pass="Check Password Again";
    }
    if(!$hasError){
     $eid=$_POST['e_id'];
     
     $query="UPDATE `add_emp` SET `name`='$name',`email`='$email',`phone`='$phn',`address`='$adrs' WHERE e_id='$eid'";
     
     execute($query);
    }
        
 }
 
 function check_pass($pass){
    $query="select pass from `add_emp` where pass='$pass'";
    $rs = get($query);
    if(count($rs)>0){
        return true;
    }
    return false;
    
}
 
 ?>