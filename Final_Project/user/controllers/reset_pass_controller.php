<?php
$email="";
$err_email="";
$char="'#','?'";
$num="1,2,3,4,5,6,7,8,9,0";
$phn="";
$err_phn="";

$pass="";
$err_pass="";

$pass1="";
$err_pass1="";

$err_db="";

$hasError=false;

if(isset($_POST["reset"])){
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

    if(empty($_POST['phn'])){
        $hasError = true;
        $err_phn="Phone number Required";
    }
    else if(strlen($_POST['phn'])!==11){
        $hasError = true;
        $err_phn="Enter correct 11 digit phone number";

    }
    else if(is_numeric($_POST['phn'])=='0'){
        $hasError = true;
        $err_phn="Only Number allowed";
    }
    else{
        htmlspecialchars($_POST["phn"]);
        $phn = $_POST["phn"];
    }

    if(empty($_POST["password"])){
        $hasError = true;
        $err_pass="Password Required";
    }
    elseif(strlen($_POST["password"]) <= 5){
        $hasError = true;
        $err_pass="Password must contain Five character";
    }
    elseif(strpos($_POST["password"],$char)==true){
        $hasError = true;
        $err_pass="Password must contain '#' or '?'";
    }
    elseif((ctype_upper($_POST["password"]))===true){
        $hasError = true;
        $err_pass="Password must contain one Uppercase";
    }
    elseif((ctype_lower($_POST["password"]))===true){
        $hasError = true;
        $err_pass="Password must contain one Lowercase";
    }
    elseif(strpos($_POST["password"],$num)!==false){
        $hasError = true;
        $err_pass="Password must contain one Number";
    }
    
    else{
        htmlspecialchars($_POST["password"]);
        $pass = $_POST["password"];
    }

    if(empty($_POST["pass1"])){
        $hasError = true;
        $err_pass1="Password Required";
    }
    elseif($_POST["password"]!==$_POST["pass1"]){
        $err_pass1="Password Doesn't Match"; 
    }
    else{
        htmlspecialchars($_POST["pass1"]);
        $pass1 = $_POST["pass1"];
    }

    if(!$hasError){
        $rs= reset_pass($pass1,$email);
        if($rs===true){
            header("Location: user_login.php");
        }
        $err_db=$rs;

    }

}

function reset_pass($pass1,$email){
    $query="update user_info set pswrd='$pass1' where email='$email'";
    return execute($query);
}

?>