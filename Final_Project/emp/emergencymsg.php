<?php 
 include_once 'controllers/header.php';
 
 include_once 'models/db_config.php';

$msg_recvr="";
$msg_err="";
$msg_arr=array("Admin","Station Master");

$msg_type="";
$msg_type_arr=array("Emergency","Information");
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
        $rs=send_msg($email,$msg_recvr,$msg_type,$station,$txt);
        if($rs===true){
            header("Location: Home.php");
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
function send_msg($email,$msg_recvr,$msg_type,$station,$txt){
    $query = "INSERT INTO `em_msg`(`m_id`, `u_email`, `msg_rcvr`, `msg_type`, `s_name`, `msg`) VALUES (NULL,'$email','$msg_recvr','$msg_type','$station','$txt')";
    return execute($query);}




?>

<html>
    <head>
        <title>Send Messages</title>
        <style>
            body{
                background-color: rgb(204, 204, 204);
            }
        </style>
    </head>
    <body>
        <fieldset>
            <legend><h1>Emergency Message</h1></legend>
            <h5><?php echo $err_db;?></h5>
            <form action="" method="POST">
                <table align="center">
                    <tr>
                        <td align="left">
                             Message Receiveer:
                        </td>
                        <td>
                            <select name="rcvr">
                                <option selected disabled>Select one</option>
                                <?php
                                    foreach($msg_arr as $m){
                                    if($m == $msg_recvr) 
                                        echo "<option selected>$m</option>";
                                    else
                                        echo "<option>$m</option>";
                                    }
                                ?> 
                            </select>
                        </td>
                        <td>
                         <span><?php echo $msg_err; ?></span>
                    </td>
                    </tr>

                    <tr>
                        <td align="left">
                             Message Type:
                        </td>
                        <td>
                            <select name="type">
                                <option selected disabled>Select one</option>
                                <?php
                                    foreach($msg_type_arr as $m){
                                    if($m == $msg_type) 
                                        echo "<option selected>$m</option>";
                                    else
                                        echo "<option>$m</option>";
                                    }
                                ?> 
                                
                            </select>
                        </td>
                        <td>
                         <span><?php echo $type_err; ?></span>
                    </td>
                    </tr>
                    <tr>
                        <td align="left">
                             Station Name:
                        </td>
                        <td>
                            <select name="station">
                                <option selected disabled>Select one</option>
                                <?php
                                $s=view_station();
                                foreach($s as $a){
                                if($a == $station) 
                                echo "<option selected>$a</option>";
                                else
                                echo "<option>$a</option>";
                                }
                              ?>  
                                
                            </select>
                        </td>
                        <td>
                         <span><?php echo $station_err; ?></span>
                    </td>
                    </tr>

                    <tr>
                        <td>
                            Message:
                        </td>
                        <td>
                            <textarea name="text" placeholder="Type Your Message"><?php echo $txt; ?></textarea>
                        </td>
                        <td>
                         <span><?php echo $txt_err; ?></span>
                    </td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;
                        </td>
                        <td align="right">
                            <br> <input type="submit" name="send" value="Send">
                        </td>
                    </tr>

                </table>
            </form>
        </fieldset>
    </body>
</html>


<?php 
 include_once 'controllers/footer.php'
?>