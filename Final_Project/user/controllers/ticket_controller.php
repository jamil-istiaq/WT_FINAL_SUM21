<?php
    session_start();
    include_once 'models/db_config.php';
    
    $email=$_SESSION["ulog"];
    $query = "SELECT email,user_count FROM `user_info` WHERE email='{$email}'";
    $result=get($query);
    //$_POST["u_id"];
    foreach ($result as $row){
        $u_id=$row['user_count'];
    }
     
    $err_db="";

    $routeTo="";
    $err_Toroute="";

    $routeFrom="";
    $err_Fromroute="";

    $date="";
    $tdate = array();
        foreach(range(1, 31) as $i) {
    $tdate[] = "$i";}
    $err_date="";

    $marray=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    $month="";
    $err_month="";

    $time="";
    $time_arr=array("07:00","09:00","11:00","01:00","03:00","05:00","07:00",);
    $err_time="";

    $tfromat="";
    $tfromat_arr=array("AM","PM");
    $err_tformat="";

    $tclass="";
    $tclass_arry=array("AC","Non AC","Economy");
    $err_tclass="";

    $pnum="";
    $pnum_arr=array("1","2","3","4");
    $err_pnum="";

    $ptype=[];
    $err_ptype="";

    function ptypeExist($type){
		global $ptype;
		foreach($ptype as $p){
			if($p == $type) 
            return true;
		}
		return false;
	}

    $adult="";
    $adult_arr=array("0","1","2","3");
    $err_adult="";

    $child="";
    $child_arr=array("0","1","2","3");
    $err_child="";

    $train="";
    $err_train="";

    $cnum="";
    $cnum_arr=array("A1","B2","C3","D4","E5");
    $err_cnum="";

    $snum="";
    $snum1="";
    $snum2="";
    $snum3="";
    $snum4="";
    $num = array();
        foreach(range(0, 30) as $i) {
    $num[] = "$i";}

    $num1 = array();
        foreach(range(0, 30) as $i) {
    $num1[] = "$i";}

    $num2 = array();
        foreach(range(0, 30) as $i) {
    $num2[] = "$i";}

    $num3 = array();
        foreach(range(0, 30) as $i) {
    $num3[] = "$i";}

    $num4 = array();
        foreach(range(0, 30) as $i) {
    $num4[] = "$i";}

    $err_snum="";
    $err_snum1="";
    $err_snum2="";
    $err_snum3="";
    $err_snum4="";

    
    $hasError=false;

    if(isset($_POST["purchase"])){

        if(!isset($_POST["routeTo"])){
            $hasError = true;
            $err_Toroute="From required";
        }
    
        else{
            htmlspecialchars($_POST["routeTo"]);
                $routeTo = $_POST["routeTo"];
        }

        if(!isset($_POST["routeFrom"])){
            $hasError = true;
            $err_Fromroute="To required";
        }
    
        else{
            htmlspecialchars($_POST["routeFrom"]);
                $routeFrom = $_POST["routeFrom"];
        }

        if (!isset($_POST["tday"])){
            $hasError = true;
            $err_date="Day Required";
        }
        else{
            htmlspecialchars($_POST["tday"]);
            $date = $_POST["tday"];
        }
    
        if (!isset($_POST["tmonth"])){
            $hasError = true;
            $err_month="Month Required";
        }
        else{
            htmlspecialchars($_POST["tmonth"]);
            $month = $_POST["tmonth"];
        }

        if (!isset($_POST["time"])){
            $hasError = true;
            $err_time="Time Required";
        }
        else{
            htmlspecialchars($_POST["time"]);
            $time = $_POST["time"];
        }

        if (!isset($_POST["format"])){
            $hasError = true;
            $err_tformat="AM/PM Required";
        }
        else{
            htmlspecialchars($_POST["format"]);
            $tfromat = $_POST["format"];
        }

        if (!isset($_POST["class"])){
            $hasError = true;
            $err_tclass="Class Required";
        }
        else{
            htmlspecialchars($_POST["class"]);
            $tclass = $_POST["class"];
        }

        if (!isset($_POST["passenger"])){
            $hasError = true;
            $err_pnum="Passenger Number Required";
        }
        else{
            htmlspecialchars($_POST["passenger"]);
            $pnum = $_POST["passenger"];
        }

        if(!isset($_POST["ptype"])){
			$hasError = true;
			$err_ptype="Pessanger Type Required";
		}
		else{
			$ptype = $_POST["ptype"];
		}

        if(!isset($_POST["adult"])){
			$hasError = true;
			$err_adult="Adult Number Required";
		}
		else{
			$adult = $_POST["adult"];
		}

        if(!isset($_POST["child"])){
			$hasError = true;
			$err_child="Child Number Required";
		}
		else{
			$child = $_POST["child"];
		}

        if(!isset($_POST["train"])){
			$hasError = true;
			$err_train="Train Name Required";
		}
		else{
			$train = $_POST["train"];
		}

        if(!isset($_POST["cnum"])){
			$hasError = true;
			$err_cnum="Coach Number Required";
		}
		else{
			$cnum = $_POST["cnum"];
		}

        if(!isset($_POST["sit"])){
			$hasError = true;
			$err_snum="Sit Number Required";
		}
		else{
			$snum = $_POST["sit"];
		}
        
        if(!isset($_POST["sit1"])){
			$hasError = true;
			$err_snum1="First Sit  Required";
		}
		else{
			$snum1 = $_POST["sit1"];
		}

        if(!isset($_POST["sit2"])){
			$hasError = true;
			$err_snum2="Second Sit  Required";
		}
		else{
			$snum2 = $_POST["sit2"];
		}

        if(!isset($_POST["sit3"])){
			$hasError = true;
			$err_snum3="Third Sit  Required";
		}
		else{
			$snum3 = $_POST["sit3"];
		}

        if(!isset($_POST["sit4"])){
			$hasError = true;
			$err_snum4="Fourth Sit  Required";
		}
		else{
			$snum4 = $_POST["sit4"];
		}

        if(!$hasError){
            
            $taka=cost($routeFrom,$routeTo);
            

            $rs=purchase_ticket($u_id,$email,$routeFrom,$routeTo,$date,$month,$time,$tfromat,$tclass,$pnum,$ptype,$adult,$child,$train,$cnum,$snum,$snum1,$snum2,$snum3,$snum4,$taka);
           
            if($rs===true){
            header("Location: payment.php");
            }
            $err_db=$rs;
           
            
             
        }

   
    }

    function view_option(){
        $query = "SELECT r_name,r_id FROM `train_route`";
            $result=get($query);
            $r_name = array();
            foreach ($result as $row){
                $r_name[]=$row['r_name'];}
            return $r_name;
        }

    function route_id(){
        $query = "SELECT r_id FROM `train_route`";
            $result=get($query);
            $r_id=array();
            foreach ($result as $row){
               $r_id[]=$row['r_id'];}
            return $r_id;
        }
        
    function view_train(){
        $query = "SELECT t_name FROM `train_list`";
        $result=get($query);
            $t_name = array();
            foreach ($result as $row){
                $t_name[]=$row['t_name'];}
            return $t_name;
        }

    function purchase_ticket($u_id,$email,$routeFrom,$routeTo,$date,$month,$time,$tfromat,$tclass,$pnum,$ptype,$adult,$child,$train,$cnum,$snum,$snum1,$snum2,$snum3,$snum4,$taka){
		$type=$ptype[0];
        $query = "insert into `purchase_ticket` (`u_id`, `tkt_id`, `u_email`, `route_from`, `route_to`, `p_date`, `p_time`, `class`, `p_num`, `p_type`, `adult`, `child`, `t_name`, `c_num`, `sit_num`, `sit_num1`, `sit_num2`, `sit_num3`, `sit_num4`, `cost`)  
        values ('$u_id',NULL,'$email','$routeFrom','$routeTo','$date.$month','$time.$tfromat','$tclass','$pnum','$type','$adult','$child','$train','$cnum','$snum','$snum1','$snum2','$snum3','$snum4','$taka')";
        return execute($query);
        
       
		
	}

    function cost($routeFrom,$routeTo){
        $query="SELECT cost FROM `fair_chart`,`train_route`  WHERE s_name='$routeFrom' and r_name='$routeTo'";
        $cost=get($query);
        $amount = array();
        foreach ($cost as $row){
            $amount[]=$row['cost'];}
        return $amount[0];
    }

    function checksit($sit){
        $query="select sit_num from `purchase_ticket` where sit_num='$sit'";
        $rs=get($query);
        if(count($rs)>0){
            return true;
        }
        return false;
    }

    function checksit_1($sit1){
        $query="select sit_num1 from `purchase_ticket` where sit_num1='$sit1'";
        $rs=get($query);
        if(count($rs)>0){
            return true;
        }
        return false;
    }

    function checksit_2($sit2){
        $query="select sit_num2 from `purchase_ticket` where sit_num2='$sit2'";
        $rs=get($query);
        if(count($rs)>0){
            return true;
        }
        return false;
    }

    function checksit_3($sit3){
        $query="select sit_num3 from `purchase_ticket` where sit_num3='$sit3'";
        $rs=get($query);
        if(count($rs)>0){
            return true;
        }
        return false;
    }

    function checksit_4($sit4){
        $query="select sit_num4 from `purchase_ticket` where sit_num4='$sit4'";
        $rs=get($query);
        if(count($rs)>0){
            return true;
        }
        return false;
    }

    
    
    
?>