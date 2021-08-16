
<?php
 
 session_start();
 include_once 'Models/db_config.php';
 include_once 'Controllers/header.php';
 include_once 'controllers/profile_update_controller.php';
 if(!isset($_SESSION["ulog"])){
    header("Location: Login.php");
}
 $email=$_SESSION["ulog"];
 $query = "SELECT name,e_id, email,phone,Address FROM `add_emp` WHERE Email='{$email}'";
 $result=get($query);

?>
<html>
     <head>
     <title>Update Profile</title>
     <style>
         body {
                 background-color: rgb(204, 204, 204);
             }
         
     </style>
     <script src="js/Updateinfo.js"></script>
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
                         <input type="hidden" name="e_id" value="<?php foreach ($result as $row){ echo "$row[e_id]";}?>">
                         
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
                         :<input type="text" name="phone" value="<?php foreach ($result as $row){ echo "$row[phone]";}?>" placeholder="Valid phone number">
                     </td>
                     <td>
                     
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Address
                     </td>
                     <td>
                         :<textarea name="address" placeholder="Enter full address"><?php foreach ($result as $row){ echo "$row[Address]";}?></textarea>
                     </td>
                     <td>
                     
                     </td>
                 </tr>

                 <tr>
                   <td>
                    <p style="color: red">Enter Password to Update</p>
                   </td>
                   <td>
                       :<input type="password" name="password" placeholder="Enter password">
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
