<?php
 session_start();
 include_once 'models/db_config.php';
 $err_db="";
 $eid=rand(1000,9999);
 $name="";
 $err_name="";
 $pass="";
 $err_pass="";
 $gender="";
 $err_gender="";
 $email="";
 $err_email="";
 $phone="";
 $err_phone="";
 $address="";
 $err_address="";
 $nid="";
 $err_nid="";
 $bgroup=array("A(+ve)","A(-ve)","B(+ve)","B(-ve)","O(+ve)","O(-ve)","AB(+ve)","AB(-ve)");
 $blood_group="";
 $err_blood_group="";
 
 $salary="";
 $err_salary="";
 $dob="";
 $err_dob="";
    
 $hasError=false;
 
 if(isset($_POST["signup"])){

    if(empty($_POST["name"])){
        $err_name="*Name Required";
        $hasError = true;
    }
    else if(strlen($_POST["name"]) <=3){
        $err_name="*Name Must be greater than 3";
        $hasError = true;
    }
    else{
        $name=$_POST["name"];
    }
    if(empty($_POST["pass"])){
        $err_pass="*Pass Required";
        $hasError = true;
    }
    else if(strlen($_POST["pass"]) <=3){
        $err_pass="*Pass Must be greater than 3";
        $hasError = true;
    }
    else{
        $pass=$_POST["pass"];
    }
    if(!isset($_POST["gender"])){
        $err_gender="*Gender Required";
        $hasError = true;
    }
    else{
        $gender = $_POST["gender"];
    }
    if(!isset($_POST["email"])){
        $err_email="*Email Required";
        $hasError = true;
    }
    else if(strlen($_POST["email"]) <=10){
        $err_email="*___@email.com";
        $hasError = true;
    }
    else{
        $email = $_POST["email"];
    }
    if(!isset($_POST["phone"])){
        $err_phone="*Phone Required";
        $hasError = true;
    }
    else if(strlen($_POST["phone"]) <=9){
        $err_phone="*Must be a valid phone number";
        $hasError = true;
    }
    else{
        $phone = $_POST["phone"];
    }
    if(empty($_POST["address"])){
        $err_address="*Address Required";
        $hasError = true;
    }
    else{
        $address = $_POST["address"];
    }
    if(!isset($_POST["nid"])){
        $err_nid="*NID Required";
        $hasError = true;
    }
    else if(strlen($_POST["nid"]) <=4){
        $err_nid="*Must be a valid nid number";
        $hasError = true;
    }
    else{
        $nid = $_POST["nid"];
    }

      if(empty($_POST["dob"])){
        $err_dob="*Date of birth Required";
        $hasError = true;
    }
    else{
        $dob = $_POST["dob"];
    }
    if (!isset($_POST["group"])){
        $hasError = true;
        $err_blood_group="Blood Group Required";
    }
    else{
        htmlspecialchars($_POST["group"]);
        $blood_group = $_POST["group"];
    }
    if(empty($_POST["salary"])){
        $err_salary="*salary Required";
        $hasError = true;
    }
    else{
        $salary = $_POST["salary"];
    }
    if(!$hasError){
                        
        $rs= insertAdd_emp($eid,$name,$pass,$gender,$email,$phone,$address,$dob,$blood_group,$nid,$salary);
         
        if($rs===true){
            header("Location: sm_login.php");
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

            header("Location: home_page.php");
        }
        
        $err_db = "Email password invalid";

    }
}

            

    function authenticateUser($email,$pass){
		$query = "select * from add_sm where email='$email' and pass='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}

    function insertAdd_emp($eid,$name,$pass,$gender,$email,$phone,$address,$dob,$blood_group,$nid,$salary){
        $query= "INSERT INTO `add_sm` VALUES ('$eid','$name','$pass','$gender','$email','$phone','$address','$dob','$blood_group','$nid','$salary',NULL)";
            
       return execute($query);
  }
    

?>
