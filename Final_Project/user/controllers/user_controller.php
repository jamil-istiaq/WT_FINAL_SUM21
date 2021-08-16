<?php
 session_start();
 include_once 'models/db_config.php';
    $email="";
    $err_email="";

    $pass="";
    $err_pass="";
    $err_db="";
 
    $name="";
    $err_name="";

    $pas="";
    $err_pass="";
    $char="'#','?'";
    $num="1,2,3,4,5,6,7,8,9,0";

    $phn="";
    $err_phn="";

    $nid="";
    $err_nid="";

    $adrs="";
    $err_adrs="";

    $opsn="";
    $err_opsn="";

    $health="";

    $gender="";
    $err_gender="";

    
    $marray=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    $month="";
    $err_month="";

    $bdate="";
    $date = array();
        foreach(range(1, 31) as $i) {
    $date[] = "$i";}
    $err_date="";

    $byear = array();
        foreach(range(1960, 2021) as $i) {
    $byear[] = "$i";}  
    $year="";
    $err_year="";

    $bgroup=array("A(+ve)","A(-ve)","B(+ve)","B(-ve)","O(+ve)","O(-ve)","AB(+ve)","AB(-ve)");
    $blood_group="";
    $err_blood_group="";

    $dob="";

    
 $hasError=false;
 
 if(isset($_POST["sign_up"])){

    if(empty($_POST["name"])){
        $hasError = true;
        $err_name="Name required";
    }
    else if((is_numeric($_POST["name"])==true)){
        $hasError = true;
        $err_name="Number not allowed";
    }

    else{
        htmlspecialchars($_POST["name"]);
			$name = $_POST["name"];
    }

    if(empty($_POST["email"])){
        $hasError = true;
        $err_email="Email Required";
    }

    else if (!stristr($_POST["email"],"@") and !stristr($_POST["email"],".")){
        $hasError = true;
        $err_email="Put Correct Email address";
        exit();
    }
    else{
        htmlspecialchars($_POST["email"]);
        $email = $_POST["email"];
    }

    if(empty($_POST["password"])){
        $hasError = true;
        $err_pass="Password Required";
    }
    else if(strlen($_POST["password"]) <= 5){
        $hasError = true;
        $err_pass="Password must contain Five character";
    }
    else if(strpos($_POST["password"],$char)!==false){
        $hasError = true;
        $err_pass="Password must contain '#' or '?'";
    }
    else if((ctype_upper($_POST["password"]))==true){
        $hasError = true;
        $err_pass="Password must contain one Uppercase";
    }
    else if((ctype_lower($_POST["password"]))==true){
        $hasError = true;
        $err_pass="Password must contain one Lowercase";
    }
    else if(strpos($_POST["password"],$num)!==false){
        $hasError = true;
        $err_pass="Password must contain one Number";
    }
    
    else{
        htmlspecialchars($_POST["password"]);
        $pas = $_POST["password"];
    }

    if(empty($_POST["phn"])){
        $hasError = true;
        $err_phn="Phone number Required";
    }
    else if((strlen($_POST["phn"]))!== 11){
        $hasError = true;
        $err_phn="Enter correct 11 digit phone number";

    }
    elseif((is_numeric($_POST["phn"])==false)){
        $hasError = true;
        $err_phn="Only Number allowed";
    }
    else{
        htmlspecialchars($_POST["phn"]);
        $phn = $_POST["phn"];
    }

    if(empty($_POST["nid"])){
        $hasError = true;
        $err_nid="NID Required";
    }
    else if((strlen($_POST["nid"])!== 13)){
        $hasError = true;
        $err_nid="Enter correct 13 digit NID number";

    }
    elseif((is_numeric($_POST["nid"])==false)){
        $hasError = true;
        $err_nid="Only Number allowed";
    }
    else{
        htmlspecialchars($_POST["nid"]);
        $nid = $_POST["nid"];
    }
    

    if(empty($_POST["adrs"])){
        $hasError = true;
        $err_adrs="Address required";
    }

    else{
        htmlspecialchars($_POST["adrs"]);
			$adrs = $_POST["adrs"];
    }

    if (!isset($_POST["day"])){
        $hasError = true;
        $err_date="Day Required";
    }
    else{
        htmlspecialchars($_POST["day"]);
        $bdate = $_POST["day"];
    }

    if (!isset($_POST["month"])){
        $hasError = true;
        $err_month="Month Required";
    }
    else{
        htmlspecialchars($_POST["month"]);
        $month = $_POST["month"];
    }

    if (!isset($_POST["year"])){
        $hasError = true;
        $err_year="Year Required";
    }
    else{
        htmlspecialchars($_POST["year"]);
        $year = $_POST["year"];
    }

    if (!isset($_POST["group"])){
        $hasError = true;
        $err_blood_group="Blood Group Required";
    }
    else{
        htmlspecialchars($_POST["group"]);
        $blood_group = $_POST["group"];
    }

    if(!isset($_POST["gender"])){
        $hasError = true;
        $err_gender="Gender Required";
    }
    else{
        htmlspecialchars($_POST["gender"]);
        $gender = $_POST["gender"];
    }

    if(empty($_POST["opsn"])){
        $hasError = true;
        $err_opsn="Occupation required";
    }

    else{
        htmlspecialchars($_POST["opsn"]);
			$opsn = $_POST["opsn"];
    }

    if(empty($_POST["health"])){
        htmlspecialchars($_POST["health"]);
		$health = $_POST["health"];
    }

    if($hasError==false){
       $rs= insertUser($name, $email, $pas, $phn, $nid, $adrs, $year, $month, $bdate, $blood_group, $gender, $opsn, $health);
        if($rs===true){
            header("Location: user_login.php");
        }
        $err_db=$rs;
    }
    
}




 else if(isset($_POST["btn_login"])){

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
            $cookie_name = "email";
            $cookie_value = $_POST["email"];
            setcookie($cookie_name, $cookie_value, time() + (86400 *1), "/");
            header("Location: home_page.php");
        }
        
        $err_db = "Email password invalid";

    }
}

            

    function authenticateUser($email,$pass){
		$query = "select * from user_info where email='$email' and pswrd='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}

    function insertUser($name,$email,$pas,$phn,$nid,$adrs,$year,$month,$bdate,$blood_group,$gender,$opsn,$health){
		$query = "insert into user_info values ('$name','$email','$pas','$phn','$nid','$adrs','$year.$month.$bdate','$blood_group','$gender','$opsn','$health',NULL)";
		return execute($query);
		
	}
    

?>
