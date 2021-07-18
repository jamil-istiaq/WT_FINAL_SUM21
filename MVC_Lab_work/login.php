<?php 
include_once 'models/db_config.php';
include_once 'controllers/login_controller.php';
?>

<html>
	<head>

	</head>
	<body>
        <h1 align="center">Login Page</h1>
        <form action="" method="post">
		<table align="center">
			<tr>
				<td>
				<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Enter Username">
				<span><?php echo $err_name; ?></span>	
				</td>
			</tr>
			<tr>
				<td>
				<input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Enter Password">
				<span><?php echo $err_pass; ?></span>		
			</td>

			</tr>
			<tr>
				<td>
					<input type="submit" name="btn_login" value="Login">
				</td>
			</tr>
			
		</table>
        </form>
	</body>
</html>
<?php //include 'main_footer.php';?>