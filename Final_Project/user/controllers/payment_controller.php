<?php
    
    include_once 'models/db_config.php';

    if(!isset($_SESSION["ulog"])){
        header("Location: user_login.php");
    }
    $email=$_SESSION["ulog"];
    
    $paymethod="";
    $err_pay="";
    $payarr=array("Bkash","Roket","Nogod","Card");
    
    $amount="";
    $err_amount="";

    $ac_num="";
    $ac_err="";

    $tkt_num="";
    $tkt_err="";

    

    $hasError = false;
    

    if(isset($_POST["payment"])){

        if(!isset($_POST["pay_method"])){
            $hasError = true;
            $err_pay="Select Payment Method";
        }
    
        else{
            htmlspecialchars($_POST["pay_method"]);
                $paymethod = $_POST["pay_method"];
        }

        if(empty($_POST["amount"])){
            $hasError = true;
            $err_amount="Amount Required";
        }
    
        else{
            htmlspecialchars($_POST["amount"]);
                $amount = $_POST["amount"];
        }

        if(empty($_POST["ac_number"])){
            $hasError = true;
            $ac_err="Account Number Required";
        }
        elseif((is_numeric($_POST["ac_number"])==false)){
            $hasError = true;
            $ac_err="Only Number allowed";
        }
    
        else{
            htmlspecialchars($_POST["ac_number"]);
                $ac_num = $_POST["ac_number"];
        }

        if(empty($_POST["tkt_number"])){
            $hasError = true;
            $tkt_err="Ticket Number Required";
        }
    
        else{
            htmlspecialchars($_POST["tkt_number"]);
                $tkt_num = $_POST["tkt_number"];
        }


        if(!$hasError){
        
            pending_data($tkt_num);
            payment($tkt_num,$paymethod,$amount,$ac_num,$email);
        }
            
        
    }

    function pending_data($tkt_num){
        $query1 = "SELECT  tkt_id,u_email,route_from,route_to,p_date,p_time,class,t_name,c_num,sit_num,sit_num1,sit_num2,sit_num3,sit_num4,cost FROM `purchase_ticket` WHERE tkt_id='$tkt_num'";
        $result=get($query1);
        foreach ($result as $row){ 
            $tkt_id =$row['tkt_id'];
            $u_email =$row['u_email'];
            $route_from =$row['route_from'];
            $route_to =$row['route_to'];
            $p_date =$row['p_date'];
            $p_time =$row['p_time'];
            $class =$row['class'];
            $t_name =$row['t_name'];
            $c_num =$row['c_num'];
            $sit_num =$row['sit_num'];
            $sit_num1 =$row['sit_num1'];
            $sit_num2 =$row['sit_num2'];
            $sit_num3 =$row['sit_num3'];
            $sit_num4 =$row['sit_num4'];}

            $query2 = "insert into `tickets` (`tkt_id`, `u_email`, `route_from`, `route_to`, `p_date`, `p_time`, `class`, `t_name`, `c_num`, `sit_1`, `sit_2`, `sit_3`, `sit_4`, `sit_5`, `c_tid`)
            values ('$tkt_id','$u_email','$route_from','$route_to','$p_date','$p_time','$class','$t_name','$c_num','$sit_num','$sit_num1','$sit_num2','$sit_num3','$sit_num4',NULL)";
            execute($query2);

            $query3 = "DELETE FROM `purchase_ticket` WHERE tkt_id='$tkt_num'";
            execute($query3);

        }

    function payment($tkt_num,$paymethod,$amount,$ac_num,$email){
        $query2 = "insert into `payment_data` values('$tkt_num','$email','$paymethod','$amount','$ac_num',NULL)";
        execute($query2);

    }


?>