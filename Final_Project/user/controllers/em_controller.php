<?php
 //session_start();
 include_once 'models/db_config.php';
 $email=$_COOKIE["email"];

$msg_recvr="";
$msg_err="";
$msg_arr=array("Admin","Station Master","Train Master","Head Office");

$msg_type="";
$msg_type_arr=array("Emergency","Ticket Issue","Feedback");
$type_err="";

$station="";
$station_err="";

$txt="";
$txt_err="";

$err_db="";

$hasError=false;

if(isset($_POST["send"])){
    if(!isset($_POST["rcvr"])){
        $hasError = true;
        $msg_err="Reciver required";
    }

    else{
        htmlspecialchars($_POST["rcvr"]);
            $msg_recvr = $_POST["rcvr"];
    }

    if(!isset($_POST["type"])){
        $hasError = true;
        $type_err="Type required";
    }

    else{
        htmlspecialchars($_POST["type"]);
            $msg_type = $_POST["type"];
    }

    if(!isset($_POST["station"])){
        $hasError = true;
        $station_err="Station required";
    }

    else{
        htmlspecialchars($_POST["station"]);
            $station = $_POST["station"];
    }

    if(empty($_POST["text"])){
        $hasError = true;
        $txt_err="Message required";
    }

    else{
        htmlspecialchars($_POST["text"]);
            $txt = $_POST["text"];
    }

    if(!$hasError){
        date_default_timezone_set("Asia/Dhaka");
        $a=date("h:i:sa");
        $rs=send_msg($email,$msg_recvr,$msg_type,$station,$txt,$a);
        if($rs===true){
            header("Location: home_page.php");
        }
        $err_db=$rs;
    }

}





function view_station(){
    $query = "SELECT r_name FROM `train_route`";
        $result=get($query);
        $r_name = array();
        foreach ($result as $row){
            $r_name[]=$row['r_name'];}
        return $r_name;
    }
function send_msg($email,$msg_recvr,$msg_type,$station,$txt,$a){
    $query = "INSERT INTO `em_msg`(`m_id`, `u_email`, `msg_rcvr`, `msg_type`, `s_name`, `msg`,`time`) VALUES (NULL,'$email','$msg_recvr','$msg_type','$station','$txt','$a')";
    return execute($query);}




?>

