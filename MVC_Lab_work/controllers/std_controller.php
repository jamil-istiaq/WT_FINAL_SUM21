<?php
	require_once 'models/db_config.php';
	$name="";
	$err_name="";
	
    $dob="";
	$err_dob="";
    $credit="";
	$err_credit="";
    $cgpa="";
	$err_cgpa="";
    $dname="";
	$err_dname="";
    $did="";
	$err_did="";
	$err_db="";
	
	$hasError=false;

    if (isset($_POST["add_std"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["uname"];
		}
		
        if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob = "DOB Required";
		}
		else{
			$dob = $_POST["dob"];
		}
        if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit = "Credit Required";
		}
		else{
			$credit = $_POST["credit"];
		}
        if(empty($_POST["cgpa"])){
			$hasError = true;
			$err_cgpa = "CGPA Required";
		}
		else{
			$cgpa = $_POST["cgpa"];
		}
        if(empty($_POST["dept"])){
			$hasError = true;
			$err_dname = "Dept. name Required";
		}
		else{
			$dname = $_POST["dept"];
		}
        if(empty($_POST["did"])){
			$hasError = true;
			$err_did = "Dept. ID Required";
		}
		else{
			$did = $_POST["did"];
		}


        if(!$hasError){
            $rs = insertstudent($name,$dob,$credit,$cgpa,$dname,$did);
		if ($rs === true){
			header("Location: all_student.php");
		}
		$err_db = $rs;
        }

		elseif(isset($_POST["edit_std"])){
			
			$rs = editstudent($name,$dob,$credit,$cgpa,$dname,$did,$id);
			if($rs === true){
				header("Location: all_student.php");
			}
			$err_db = $rs;
		}

    }
		function insertstudent($name,$dob,$credit,$cgpa,$dname,$did){
           
			$query= "INSERT INTO `student`(`name`, `id`, `dob`, `credit`, `cgpa`, `dept_name`, `dept_id`) VALUES ('$name',NULL,'$dob','$credit','$cgpa','$dname','$did')";
            return execute($query);
        }
		function getstudents(){
            $query ="select * from student ";
            $rs = get($query);
            return $rs;
        }
        function getstudent($id){
            $query ="select * from student where id='$id'";
            $rs = get($query);
            return $rs[0];
        }

        function editstudent($name,$dob,$credit,$cgpa,$dname,$did,$id){
            $query = "update student set name='$name',id='Null', dob='$dob',credit='$credit',cgpa='$cgpa',dept_name='$dname',dept_id='$did'  where id=$id";
            return execute($query);
            
        }

?>
		
	