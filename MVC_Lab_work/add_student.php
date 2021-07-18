<?php 
  include_once 'controllers/std_controller.php';
  include_once 'header.php';
?>

<html>
	<head>

	</head>
	<body>
        <h1 align="center">Add Student</h1>
        <form action="" method="post">
		<table align="center">
			<tr>
				<td>Name:
				<input type="text" name="name" value="<?php echo $name;?>" placeholder="Enter name">	
				</td>
			</tr>
			<tr>
				<td>ID:
				<input type=""   placeholder="ID" disabled>
				</td>

			</tr>
            <tr>
				<td>DOB:
				<input type="text" name="dob" value="<?php echo $dob;?>" placeholder="DD-MM-YYYY">
				</td>

			</tr>
            <tr>
				<td>Credit:
				<input type="text" name="credit" value="<?php echo $credit;?>" placeholder="Enter Credit">
				</td>

			</tr>
            <tr>
				<td>CGPA:
				<input type="text" name="cgpa" value="<?php echo $cgpa;?>" placeholder="Enter CGPA">
				</td>

			</tr>
            <tr>
				<td>Deptartment:
				<input type="text" name="dept" value="<?php echo $dname;?>" placeholder="Enter Department">
				</td>

			</tr>
			<tr>
				<td>Deptartment ID:
				<input type="text" name="did" value="<?php echo $did;?>" placeholder="Enter Department ID">
				</td>

			</tr>
			<tr>
				<td>
					<input type="submit" name="add_std" value="ADD">
				</td>
			</tr>
			
		</table>
        </form>
	</body>
</html>