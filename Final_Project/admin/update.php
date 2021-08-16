<?php
 
 include_once 'models/db_config.php';
 include_once 'header.php';
 

 
    $query = "SELECT name, email,pswrd, phn_number, adrs,ocpsn,healt_issue FROM `user_info` WHERE user_count='$_COOKIE[uid]'";
    $result=get($query);

    $name="";
    $err_name="";

    $email="";
    $err_email="";

    $phn="";
    $err_phn="";

    $adrs="";
    $err_adrs="";

    $job="";
    $err_job="";

    $health="";
    $err_health="";

    $pass="";
    $err_pass="";

    $hasError=false;

 if(isset($_POST["update"])){
    
    if(empty($_POST["name"])){
        $hasError=true;
        $err_name="Name required";
    }
    else{
        $name=$_POST["name"];
    }

    if(empty($_POST["email"])){
        $hasError=true;
        $err_name="Email required";}
    else{
        $email=$_POST["email"];
    }

    if(empty($_POST["phn"])){
        $hasError=true;
        $err_phn="Phone required";}
    else{
        $phn=$_POST["phn"];
    }

    if(empty($_POST["adrs"])){
        $hasError=true;
        $err_adrs="Address required";}
    else{
        $adrs=$_POST["adrs"];
    }

    if(empty($_POST["opsn"])){
        $hasError=true;
        $err_job="Occupation required";}
    else{
        $job=$_POST["opsn"];
    }

    if(empty($_POST["health"])){
        $hasError=true;
        $err_health="Health issue required";}
    else{
        $health=$_POST["health"];
    }

       
    
    if(!$hasError){
     
     $query= "UPDATE user_info SET name='$name', email='$email', phn_number='$phn', adrs='$adrs', ocpsn='$job', healt_issue='$health' where user_count='$_COOKIE[uid]'";
     execute($query);
     header("location: UPDATE_USER.php");
    }
    
    
 }

?>

<html>
     <head>
     <style>
         body {
                 background-color: rgb(204, 204, 204);
             }
         
     </style>
     </head>
 <body>
         <form action=""  method="post">
             <fieldset>
                 <legend><h1>Update Info</h1></legend>
             <table align="center">	
                 <tr>    	
                     <td>
                         Name
                     </td>
                     <td>
                         :<input id="name" type="text" name="name" value="<?php foreach ($result as $row){ echo "$row[name]";}?>" placeholder="Enter full name">
                        
                     </td>
                    
                 </tr>
                 <tr>
                     <td>
                         Email
                     </td>
                     <td>
                         :<input id="email" type="text" name="email" value="<?php foreach ($result as $row){ echo "$row[email]";}?>" placeholder="Enter a valid email">
                     </td>
                     
                 </tr>
                 <tr>
                     <td>
                         Phone Number
                     </td>
                     <td>
                         :<input id="phone" type="text" name="phn" value="<?php foreach ($result as $row){ echo "$row[phn_number]";}?>" placeholder="Valid phone number">
                     </td>
                    
                 </tr>
                 <tr>
                     <td>
                         Address
                     </td>
                     <td>
                         :<textarea id="adrs" name="adrs" placeholder="Enter full address"><?php foreach ($result as $row){ echo "$row[adrs]";}?></textarea>
                     </td>
                    
                 </tr>

                 
                 <tr>
                     <td>
                         Occupation
                     </td>
                     <td>
                         :<input id="opsn" type="text" name="opsn" value="<?php foreach ($result as $row){ echo "$row[ocpsn]";}?>" placeholder="Enter occupation">
                     </td>
                     
                 </tr>

                 
                 <tr>
                     <td>
                         Majore health Issue<br>
                         (if no then write n/a)
                     </td>
                     <td>
                         :<textarea id="health" name="health"  placeholder="Mention if any"><?php foreach ($result as $row){ echo "$row[healt_issue]";}?></textarea>
                     </td>
                     
                 </tr>
                 <tr>
                     <td>
                         &nbsp;
                     </td>
                     <td>
                         &nbsp;
                     </td>
                     <td> 
                     <input type="submit" name="update" value="Update">
                     </a>
                     </td>
                 </tr>
                
             </table>
         </fieldset>
     </form>
 </body>
</html>























<?php 
include 'footer.php';
?>
