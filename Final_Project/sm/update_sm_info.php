<?php
 
session_start();
include_once 'models/db_config.php';
include_once 'controllers/header.php';
include_once 'controllers/update_controller.php';
if(!isset($_SESSION["ulog"])){
    header("Location: sm_login.php");
}
 $email=$_SESSION["ulog"];
 $query = "SELECT name,email,phone,address,e_id FROM `add_sm` WHERE email='{$email}'";
 $result=get($query);
?>

<html>
<head>
<style>
    body{
         background-color: rgb(204, 204, 204);
        }
         
</style>
<script src="js/update_info_val.js"></script>
</head>

 <body>
         <form action="" onsubmit="return validate()" method="post">
             <fieldset>
                 <legend><h1>Update Info</h1></legend>
             <table align="center">	
                 <tr>    	
                     <td>
                         Name
                     </td>
                     <td>
                         :<input id="name" type="text" name="name" value="<?php foreach ($result as $row){ echo "$row[name]";}?>" placeholder="Enter full name">
                         <input type="hidden" name="e_id" value="<?php foreach ($result as $row){ echo "$row[e_id]";}?>">
                         
                     </td>
                     <td>
                        <span id="err_name"><?php echo $err_name;?></span>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Email
                     </td>
                     <td>
                         :<input id="email" type="text" name="email" value="<?php foreach ($result as $row){ echo "$row[email]";}?>" placeholder="Enter a valid email">
                     </td>
                     <td>
                        <span id="err_email"><?php echo $err_email;?></span>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Phone Number
                     </td>
                     <td>
                         :<input id="phone" type="text" name="phn" value="<?php foreach ($result as $row){ echo "$row[phone]";}?>" placeholder="Valid phone number">
                     </td>
                     <td>
                        <span id="err_phn"><?php echo $err_phn;?></span>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Address
                     </td>
                     <td>
                         :<textarea id="adrs" name="adrs" placeholder="Enter full address"><?php foreach ($result as $row){ echo "$row[address]";}?></textarea>
                     </td>
                     <td>
                        <span id="err_adrs"><?php echo $err_adrs;?></span>
                     </td>
                 </tr>
                    
                 <tr>
                   <td>
                    <p style="color: red">Enter Password to Update</p>
                   </td>
                   <td>
                       :<input id="password" type="password"  name="password" value="<?php echo $pass;?>" placeholder="Enter password">
                   </td>
                   <td>
                        <span id="err_pass"><?php echo $err_pass;?></span>
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
include 'controllers/footer.php';
?>
