<?php
 session_start();
 include_once 'Models/db_config.php';
    $email="";
    $err_email="";

    $pass="";
    $err_pass="";
    $err_db="";

    $hasError=false;

    if(isset($_POST["btn_login"])){

if(empty($_POST["email"])){
    $hasError = true;
    $err_email="Email Required";
}

else if (!stristr($_POST["email"],"@") and !stristr($_POST["email"],".")){
    $hasError = true;
    $err_email="Enter Correct Email ";
}
else{
    htmlspecialchars($_POST["email"]);
    $email = $_POST["email"];
}

if(empty($_POST["password"])){
    $hasError = true;
    $err_pass="Password Required";
}
else{
   htmlspecialchars($_POST["password"]);
    $pass = $_POST["password"];
}

if(!$hasError){
    if(authenticateUser($email,$pass)){
        
        $_SESSION["ulog"]=$_POST["email"];

        header("Location: home.php");
    }
    
    $err_db = "Email password invalid";

}
}

        

function authenticateUser($email,$pass){
    $query = "select * from admin_login where email='$email' and pass='$pass'";
    $rs=get($query);
    if(count($rs)>0){
        return true;
    }
    return false;
    
}

?>
