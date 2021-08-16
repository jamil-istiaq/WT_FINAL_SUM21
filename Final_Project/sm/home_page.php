<?php

session_start();
if(!isset($_SESSION["ulog"]))
{
    header("Location: sm_login.php");
}
include_once 'controllers/header.php';
include_once 'models/db_config.php';

 $email=$_SESSION["ulog"];
 $n=dis_uname($email);
?>

<html>
<head>
<style>
    body{
         background-color: rgb(204, 204, 204);
        }
        </style>
</head>
<body>
    <fieldset>
    <fieldset>
            <legend align="center"><h1>Welcome to Metro Automate <?php foreach ($n as $value) {echo "<span style='color: red;'>$value</span>";}?> </h1></legend>
            <hr>
            <marquee behavior="scroll" direction="left">"Thank For Using Metrorail"</marquee><br><hr>
            <marquee behavior="scroll" direction="left">"Wear Mask & Maintain Social Distance" &nbsp; "Stay Safe, Stay Home"</marquee>
    </fieldset><br>
    <fieldset>
            <marquee behavior="scroll" direction="Right">
                <img width="700" height="400" src="media/photo_6.jpg" alt="Image">
                <img width="700" height="400" src="media/photo_5.jpg" alt="Image">
                <img width="700" height="400" src="media/photo_4.jpg" alt="Image">
                <img width="700" height="400" src="media/photo_3.jpg" alt="Image">
                <img width="700" height="400" src="media/photo_2.jpg" alt="Image">
                <img width="700" height="400" src="media/photo_1.jpg" alt="Image">
            </marquee> <hr>
    </fieldset>
    </fieldset>    
</body>
</html>

<?php
 include 'controllers/footer.php';
 
 function dis_uname($email){
    $query = "SELECT name  FROM `add_sm` WHERE email='{$email}'";
    $result=get($query);
    return $result[0];
}
?>
