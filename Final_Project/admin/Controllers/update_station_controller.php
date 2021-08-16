<?php
    require_once 'Models/db_config.php';
	$sid="";
	$err_sid="";
	$name="";
	$err_name="";
	$hasError=false;
			
		if(isset($_POST["Submit"])){
		
		if(empty($_POST["sid"])){
			$err_sid="*Station ID Required";
			$hasError = true;
		}
		else if(strlen($_POST["sid"]) <=4){
			$err_sid="*Station ID must be greater than 4";
			$hasError = true;
		}
		else{
			$sid=$_POST["sid"];
		}
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
		
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["sid"]."<br>";
							
    // insertAdd_station($name,$sid,);
		}
		
		
	}
	 // function insertAdd_station($name,$sid){
          // $query= "INSERT INTO `add_station` VALUES ('$name','$sid')";
              
         // return execute($query);
    // }
    // function getAdd_station(){
        // $query="select * from add_station";
        // $rs = get($query);
        // return $rs;
    // }
		
	
?>