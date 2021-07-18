<?php
include_once 'models/db_config.php';
include_once 'header.php';
include_once 'controllers/std_controller.php';
$id = $_GET["id"];
$s = getstudent($id);

?>

<html>
	<head>

	</head>
	<body>
		<h5><?php echo $err_db;?></h5>
        <h1 align="center">Edit Student</h1>
        <form action="" method="post">
		<table align="center">
			<tr>
            
				<td>Name:
				<input type="text" name="name" value="<?php echo $s["name"];?>" placeholder="Enter name">	
				</td>
			</tr>
			<tr>
				<td>
                <input type="hidden" name="id" value="<?php echo $s["id"];?>">
				</td>

			</tr>
            <tr>
				<td>DOB:
				<input type="text" name="dob" value="<?php echo $s["dob"];?>" placeholder="DD-MM-YYYY">
				</td>

			</tr>
            <tr>
				<td>Credit:
				<input type="text" name="credit" value="<?php echo $s["credit"];?>" placeholder="Enter Credit">
				</td>

			</tr>
            <tr>
				<td>CGPA:
				<input type="text" name="cgpa" value="<?php echo $s["cgpa"];?>" placeholder="Enter CGPA">
				</td>

			</tr>
            <tr>
				<td>Deptartment:
				<input type="text" name="dept" value="<?php echo $s["dept_name"];?>" placeholder="Enter Department">
				</td>

			</tr>
			<tr>
				<td>Deptartment ID:
				<input type="text" name="did" value="<?php echo $s["dept_id"];?>" placeholder="Enter Department ID">
				</td>

			</tr>
			<tr>
				<td>
					<input type="submit" name="edit_std" value="Edit Student">
				</td>
			</tr>
			
		</table>
        </form>
	</body>
</html>