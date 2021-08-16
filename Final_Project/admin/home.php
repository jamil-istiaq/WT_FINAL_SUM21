<?php
 session_start();
 if(!isset($_SESSION["ulog"])){
    header("Location: admin_login.php");
}
 include 'header.php';
 
?>


<html>
<head>
<style>
 body  {
	
	
  
  background: url(p1.jpg);
   background-size: 1366px 768px;
   background-repeat: no-repeat;
   padding: 15px;

}

</style>
</head>
<body>

<script>
	var shown=false;
	function get(id)
	{
		return document.getElementById(id);
	}
		function loadDoc(){
			//get("demo").innerHTML - "HELLO";
			if(shown){
				get("demo").innerHTML="";
				shown=false;
				return;
			}
			var xhr = new XMLHttpRequest();
			xhr.open("GET","upload.php",true);
			xhr.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					get("demo").innerHTML = this.responseText;
					shown=true;
				}
			};
			xhr.send();
		}
	</script>
	   
	  
    


			<button onclick="loadDoc()">Notice</button>
			<div id ="demo"></div>
		

        <script src="javascript.js"></script>
		

    
	
       
</body>
</html>

<button type="button" onclick="alert('For emergency email us at admin001@gmail.com !')">Contact</button>
 

            <legend align="center"><h1>Welcome to Metro Automate <?php echo $_SESSION["ulog"];?> </h1></legend>
 <marquee directon="left" class="word">
        <p style="font-size:20px;">** Welcome to our service. Our Online Ticket service is open for 24/7 a day **</p>
    </marquee>

<?php 
include_once 'footer.php';
?>
