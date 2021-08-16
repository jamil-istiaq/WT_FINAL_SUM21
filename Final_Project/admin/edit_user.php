
<?php
 
 session_start();
 include_once 'Models/db_config.php';
 include_once 'header.php';
 include_once 'Controllers/UPDATE_USER_CONTROLLER.php';
 if(!isset($_SESSION["ulog"])){
    header("Location: user_login.php");
}
 // $email=$_SESSION["ulog"];
 $query = "SELECT name, email,pswrd, phn_number, nid,adrs,dob,bl_group,gender,ocpsn,healt_issue,user_count FROM `user_info` WHERE user_count=$row[user_count]";
 $result=get($query);

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
         <form action="" method="post">
             <fieldset>
                 <legend><h1>Update Info</h1></legend>
             <table align="center">	
                 <tr>    	
                     <td>
                         Name
                     </td>
                     <td>
                         :<input type="text" name="name" value="<?php foreach ($result as $row){ echo "$row[name]";}?>"  placeholder="Enter full name">
                         <input type="hidden" name="u_id" value="<?php foreach ($result as $row){ echo "$row[user_count]";}?>">
                         <input type="hidden" name="password" value="<?php foreach ($result as $row){ echo "$row[pswrd]";}?>">
                     </td>
                     <td>
                     
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Email
                     </td>
                     <td>
                         :<input type="text" name="email" value="<?php foreach ($result as $row){ echo "$row[email]";}?>" placeholder="Enter a valid email">
                     </td>
                     <td>
                     
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Phone Number
                     </td>
                     <td>
                         :<input type="text" name="phn" value="<?php foreach ($result as $row){ echo "$row[phn_number]";}?>" placeholder="Valid phone number">
                     </td>
                     <td>
                     
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Address
                     </td>
                     <td>
                         :<textarea name="adrs" placeholder="Enter full address"><?php foreach ($result as $row){ echo "$row[adrs]";}?></textarea>
                     </td>
                     <td>
                     
                     </td>
                 </tr>

                 
                 <tr>
                     <td>
                         Occupation
                     </td>
                     <td>
                         :<input type="text" name="opsn" value="<?php foreach ($result as $row){ echo "$row[ocpsn]";}?>" placeholder="Enter occupation">
                     </td>
                     <td>
                     
                     </td>
                 </tr>

                 
                 <tr>
                     <td>
                         Majore health Issue<br>
                         (if any)
                     </td>
                     <td>
                         :<textarea name="health"  placeholder="Mention if any"><?php foreach ($result as $row){ echo "$row[healt_issue]";}?></textarea>
                     </td>
                 </tr>
                 
                 <tr>
                   <td>
                    <p style="color: red">Enter Password to Update</p>
                   </td>
                   <td>
                       :<input type="password" placeholder="Enter password">
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
