<?php
include_once 'Controllers/ADD_EMPLOYEE_CONTROLLER.php';
include_once 'header.php'; 
 ?>
<html>
<head>
	<style> 
		body {
	 	background-color: rgb(204, 204, 204);}
	</style>
</head>
	<script>
		var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validateGen(){
				var gn = document.getElementsByName("gender"); //array of radio button
				var checked = false;
				for(var i=0;i<gn.length;i++){
					if(gn[i].checked){
						checked= true;
						break;
					}
				}
				return checked;
			}
			function validateGender(){
				var gn = document.querySelector('input[name="gender"]:checked');
				if(gn == null){
					return false;
				}
				return true;
			}
			function validate(){
				
				refresh();
				if(get("eid").value == ""){
					hasError = true;
					get("err_eid").innerHTML = "*EID Required";
				}
				else if(get("eid").value.length <= 2){
					hasError = true;
					get("err_eid").innerHTML = "*Userame must be > 2 characters";
				}
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Username Required";
				}
				else if(get("name").value.length <= 2){
					hasError = true;
					get("err_name").innerHTML = "*Userame must be > 2 characters";
				}
				if(get("pass").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*pass Required";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email number Required";
				}
				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML = "*phone Required";
				}
				if(get("address").value == ""){
					hasError = true;
					get("err_address").innerHTML = "*address Required";
				}
				if(get("dob").value == ""){
					hasError = true;
					get("err_dob").innerHTML = "*DOB Required";
				}
				if(get("nid").value == ""){
					hasError = true;
					get("err_nid").innerHTML = "*NID Required";
				}
				if(get("salary").value == ""){
					hasError = true;
					get("err_salary").innerHTML = "*Salary Required";
				}
				if(get("bgroup").selectedIndex==0){
					hasError = true;
					get("err_blood_group").innerHTML = "*Blood Group Required";
				}
				if(!validateGen()){
					hasError = true;
					get("err_gender").innerHTML = "*Gender Req";
				}
			return !hasError;
			}
			function refresh(){
				hasError=false;
				get("err_eid").innerHTML="";
				get("err_name").innerHTML = "";
				get("err_pass").innerHTML = "";
				get("err_email").innerHTML = "";
				get("err_phone").innerHTML = "";
				get("err_address").innerHTML = "";
				get("err_dob").innerHTML = "";
				get("err_nid").innerHTML = "";
				get("err_salary").innerHTML = "";
				get("err_blood_group").innerHTML = "";
				get("err_gender").innerHTML = "";

				
		
				
				
			}
		</script>
	<body>
		<h1><b>ADD EMPLOYEE</b></h1>
        <fieldset>
		
			<form action="" onsubmit="return validate()" method="post">
			<table align="center">		
							
				  <tr>
					<td>Employee ID</td>
					<td><input type="text" id="eid" name="eid" value="<?php echo $eid;?>" placeholder="Employee ID"></td>
					<td><span id="err_eid"><?php echo $err_eid;?></span></td>
				</tr> 
				<tr>
					<td>Name </td>
					<td><input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
					<td><span id="err_name"><?php echo $err_name;?></span></td>
				</tr>              
                <tr>
						<td>password </td>
						<td><input type="password" id="pass" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span id="err_pass"><?php echo $err_pass;?></span></td>
				</tr>
					<tr>
						<td>Gender </td>
						<td><input type="radio" id="male" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input id="female" <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span id="err_gender"><?php echo $err_gender;?></span></td>
				</tr>
                
				<tr>
						<td>Email </td>
						<td><input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
						<td>Phone </td>
						<td><input type="text" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span id="err_phone"><?php echo $err_phone;?></span></td>
				</tr>
				<tr>
						<td>Address: </td>
						<td>
						<textarea id="address" name="address" placeholder="Address"><?php echo $address;?></textarea>
						</td>
						<td><span id="err_address"><?php echo $err_address;?></span></td>
				</tr>
				<tr>
				 <td>Date of Birth</td>
                   
                    <td> <input type="text" id="dob" name="dob" value="<?php echo $dob;?>"placeholder="YYYY-MM-DD"> </td>
					<td><span id="err_dob"><?php echo $err_dob;?></span></td>
                </tr>
				<tr>
                        <td>
                            Blood Group
                        </td>
                        <td>
                            <select id="bgroup" name="bgroup">
                                <option disabled selected>Select Blood Group</option>
                                <?php
                                    foreach($bgroup as $b){
                                    if($blood_group == $b) 
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

				<!-- <tr>
                <td>Blood Group</td>
                    <td> <input type="text" name="bg" value="<?php //echo $bg;?>"placeholder="Blood Group"> </td>
					<td><span><?php //echo $err_bg;?></span></td>
				
                </tr> -->
				
        
                <tr>
						<td>NID: </td>
						<td><input type="text" id="nid" name="nid" value="<?php echo $nid;?>" placeholder="National ID"></td>
						<td><span id="err_nid"><?php echo $err_nid;?></span></td>
				</tr>
				    <tr>
                <td>Salary</td>
                    <td> <input type="text" id="salary" name="salary"value="<?php echo $salary;?>" placeholder="Salary"> </td>
					<td><span id="err_salary"><?php echo $err_salary;?></span></td>
				
                </tr>
				 <tr>
						<td align="right" colspan="2"><input type="submit" name="Submit" value="Add Employee"></td>
				</tr>
				</table>
		</fieldset>
		</form>
	</body>
</html> 
<?php 
include_once 'footer.php';
?>