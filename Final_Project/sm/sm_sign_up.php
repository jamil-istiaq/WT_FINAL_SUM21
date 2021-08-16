
<?php
  require_once 'controllers/user_controller.php';
?>

<html>
	    <head>
        <style>
            body {
                    background-color: rgb(204, 204, 204);
                }    
        </style>
        <!-- <script src="js/sm_signup_val.js"></script> -->
        
        </head>
        <body>
		<h1><b>Station Master Signup</b></h1>
        <fieldset>
                <span><?php echo $err_db;?></span>
			<form action="" method="post">
			<table align="center">		
							
				<tr>
					<td>Name </td>
					<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
					<td><span><?php echo $err_name;?></span></td>
				</tr>              
                <tr>
						<td>password </td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
				</tr>
					<tr>
						<td>Gender </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
				</tr>
                
				<tr>
						<td>Email </td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
						<td>Phone </td>
						<td><input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
				</tr>
				<tr>
						<td>Address: </td>
						<td>
						<textarea name="address" placeholder="Address"><?php echo $address;?></textarea>
						</td>
						<td><span><?php echo $err_address;?></span></td>
				</tr>
				<tr>
				 <td>Date of Birth</td>
                   
                    <td> <input type="text" name="dob" value="<?php echo $dob;?>"placeholder="YYYY-MM-DD"> </td>
					<td><span><?php echo $err_dob;?></span></td>
                </tr>
				<tr>
                        <td>
                            Blood Group
                        </td>
                        <td>
                            :<select id="group" name="group">
                                <option disabled selected>Select Blood Group</option>
                                <?php
                                    foreach($bgroup as $b){
                                    if($b == $blood_group) 
                                        echo "<option selected>$b</option>";
                                    else
                                        echo "<option>$b</option>";
                                    }
                                    ?>
                            </select>
                        </td>
                        <td>
                        <span id="err_blood_group"> <?php echo $err_blood_group;?> </span>
                        </td>
                    </tr>
        
                <tr>
						<td>NID: </td>
						<td><input type="text" name="nid" value="<?php echo $nid;?>" placeholder="National ID"></td>
						<td><span><?php echo $err_nid;?></span></td>
				</tr>
				    <tr>
                <td>Salary</td>
                    <td> <input type="text" name="salary"value="<?php echo $salary;?>" placeholder="Salary"> </td>
					<td><span><?php echo $err_salary;?></span></td>
				
                </tr>
				 <tr>
						<td align="right" colspan="2"><input type="submit" name="signup" value="Signup"></td>
				</tr>
				</table>
		</fieldset>
		</form>
	</body>
</html>

<?php 
 include 'controllers/footer.php';
?>
