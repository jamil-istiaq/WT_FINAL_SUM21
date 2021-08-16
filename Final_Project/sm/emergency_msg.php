<?php 
 include_once 'controllers/header.php';
 include_once 'controllers/em_controller.php';
 if(!isset($_SESSION["ulog"])){
 header("Location: user_login.php");
}
?>


<html>
<head>
<style>
        body{
             background-color: rgb(204, 204, 204);
            }
        </style>

        <script>
            var hasError=false;

            function get(id){
                return document.getElementById(id);
            }

            function validate(){
                refresh();
                if(get("rcvr").selectedIndex == 0){
                    hasError = true;
                    get("msg_err").innerHTML = "<span style='color: red;'>Reciver Required</span>";
                }
                if(get("type").selectedIndex == 0){
                    hasError = true;
                    get("type_err").innerHTML = "<span style='color: red;'>Message Type Required</span>";
                }
                if(get("station").selectedIndex == 0){
                    hasError = true;
                    get("station_err").innerHTML = "<span style='color: red;'>Station Name Required</span>";
                }
                
                if(get("text").value == ""){
                    hasError = true;
                    get("txt_err").innerHTML = "<span style='color: red;'>Message Required</span>";
                }
                return !hasError;
            }

            function refresh(){
                hasError=false;
                get("msg_err").innerHTML ="";
                get("type_err").innerHTML ="";
                get("station_err").innerHTML ="";
                get("txt_err").innerHTML ="";
            }
</script>

</head>
<body>
<fieldset>
            <legend><h1>Notice</h1></legend>
            <h5><?php echo $err_db;?></h5>
            <form action="" onclick="return validate()" method="POST">
                <table align="center">
                    <tr>
                        <td align="left">
                             Message Receiveer:
                        </td>
                        <td>
                            <select id="rcvr" name="rcvr">
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
                         <span id="msg_err"><?php echo $msg_err; ?></span>
                    </td>
                    </tr>

                    <tr>
                        <td align="left">
                             Message Type:
                        </td>
                        <td>
                            <select id="type" name="type">
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
                         <span id="type_err"><?php echo $type_err; ?></span>
                    </td>
                    </tr>
                    <tr>
                        <td align="left">
                             Station Name:
                        </td>
                        <td>
                            <select id="station" name="station">
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
                         <span id="station_err"><?php echo $station_err; ?></span>
                    </td>
                    </tr>

                    <tr>
                        <td>
                            Message:
                        </td>
                        <td>
                            <textarea id="text" name="text" placeholder="Type Your Message"><?php echo $txt; ?></textarea>
                        </td>
                        <td>
                         <span id="txt_err"><?php echo $txt_err; ?></span>
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
