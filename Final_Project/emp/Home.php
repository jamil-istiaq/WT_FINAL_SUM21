<?php
 session_start();
 if(!isset($_SESSION["ulog"])){
    header("Location: Login.php");
}
 include 'Controllers/Header.php';
 
?>

<html>
    <head>
    <title>Home</title>
        <style>
            body{
                background-color: rgb(204, 204, 204);
            }
        </style>
    </head>
    <body>
        <fieldset>
        <fieldset>
            <legend align="center"><h1>Welcome to Metro Automate <?php echo $_SESSION["ulog"];?> </h1></legend>
            <hr>
            <marquee behavior="scroll" direction="left">"Thank For Using Metrorail"</marquee><br><hr>
            <marquee behavior="scroll" direction="left">"Wear Mask & Maintain Social Distance" &nbsp; "Stay Safe, Stay Home"</marquee>
        </fieldset><br>
        <fieldset>
            <marquee behavior="scroll" direction="Right">
                <img width="700" height="400" src="medias/photo_6.jpg" alt="Image">
                <img width="700" height="400" src="medias/photo_5.jpg" alt="Image">
                <img width="700" height="400" src="medias/photo_4.jpg" alt="Image">
                <img width="700" height="400" src="medias/photo_3.jpg" alt="Image">
                <img width="700" height="400" src="medias/photo_2.jpg" alt="Image">
                <img width="700" height="400" src="medias/photo_1.jpg" alt="Image">
            </marquee><hr>
         </fieldset>
        </fieldset>    
    </body>
</html>

<?php
 include 'Controllers/Footer.php';
?>
