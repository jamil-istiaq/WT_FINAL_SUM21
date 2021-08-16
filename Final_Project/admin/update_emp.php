
<?php
 include_once 'header.php';
 include_once 'Controllers/update_emp_controller.php';
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
                 <legend><h1><b>UPDATE EMPLOYEE</b></h1></legend>
             <table align="center">	
                 <tr>
					<td>Name : </td>
					<td><input type="text" name="name" value="<?php echo $name;?>"placeholder="Name"></td>
					<td><span><?php echo $err_name;?></span></td>
				</tr> 
				<tr>
                 		<td>Email : </td>
						<td><input type="text" name="email" value="<?php echo $email;?>"placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
						<td>Phone : </td>
						<td><input type="text" name="phone" value="<?php echo $phone;?>"placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
				</tr>
				<tr>
						<td>Address: </td>
						<td>
						<textarea name="address"><?php echo $address;?></textarea>
						</td>
						<td><span><?php echo $err_address;?></span></td>
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
                     
                     <td>  <input type="submit" name="update" value="Update">
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
