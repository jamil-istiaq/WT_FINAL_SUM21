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

 $job="";
 $err_job="";

 $health="";
 $err_health="";

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

    if(empty($_POST["opsn"])){
        $hasError=true;
        $err_job="Occupation required";}
    else{
        $job=$_POST["opsn"];
    }

    if(empty($_POST["health"])){
        $hasError=true;
        $err_health="Health issue required";}
    else{
        $health=$_POST["health"];
    }

    if(empty($_POST["password"])){
        $hasError=true;
        $err_pass="Passward required";}
    else{
        $pass=$_POST["password"];
    
       
    }
    $a=check_pass($pass);
    
    if($a==true){
        header("Location: display_userinfo.php");
    }
    else{
        $err_pass="Check Password Again";
    }
    if(!$hasError){
     $uid=$_POST['u_id'];
     $query= "UPDATE user_info SET name='$name', email='$email', phn_number='$phn', adrs='$adrs', ocpsn='$job', healt_issue='$health' where user_count='$uid' and pswrd='$pass'";
     execute($query);
    }
    
    
 }
 

 function check_pass($pass){
    $query = "select pswrd from user_info where pswrd='$pass'";
    $rs = get($query);
    if(count($rs)>0){
        return true;
    }
    return false;
    
}
 
 ?>