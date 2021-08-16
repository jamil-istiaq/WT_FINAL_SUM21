<?php
    require_once 'Models/db_config.php';
	$sl="";
	$err_sl="";
	$sid="";
	$err_sid="";
	$name="";
	$err_name="";

	$sname="";
	$err_sname="";

	$fair="";
	$err_fair="";

	$hasError=false;
	 if(isset($_POST["Submit"])){
		
		if(empty($_POST["sl"])){
			$err_sl="*Station SL No Required";
			$hasError = true;
		}
		else{
			$sl=$_POST["sl"];
		}
		if(empty($_POST["sid"])){
			$err_sid="*Station ID Required";
			$hasError = true;
		}
		else{
			$sid=$_POST["sid"];
		}
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}

		if(empty($_POST["sname"])){
			$err_sname="*Station Master Name Required";
			$hasError = true;
		}
		else{
			$sname=$_POST["sname"];
		}

		if(empty($_POST["fair"])){
			$err_fair="*Fair Required";
			$hasError = true;
		}
		else{
			$fair=$_POST["fair"];
		}
		
		
		if(!$hasError){
			insertfair($sid,$name,$sl,$fair);
			

			insertAdd_station($sl,$name,$sid,$sname);
		}
		
		
	}
	 function insertAdd_station($sl,$name,$sid,$sname){
          $query= "INSERT INTO `train_route`(`r_id`, `r_name`, `r_code`, `sm_name`) VALUES ('$sl','$name','$sid','$sname')";
		  //"INSERT INTO `train_route` VALUES (NULL,'$name','$sid')";
              
         return execute($query);
    }

	function insertfair($sid,$name,$sl,$fair){
		$query= "INSERT INTO `fair_chart`(`s_id`, `s_name`, `r_code`, `cost`, `count`) VALUES ('$sl','$name','$sid','$fair',NULL)";
		//"INSERT INTO `train_route` VALUES (NULL,'$name','$sid')";
			
	   return execute($query);
  }
    
	
?>