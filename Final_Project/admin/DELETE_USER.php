<?php
include_once 'header.php'; 
 ?>
<html>
	
<head><style> body {
 background-color: rgb(204, 204, 204);
}</style> </head>
	<body>
		<form>
		<fieldset>
			<table align="center">			
				<p><b><h1> DELETE USER </h1> </b> </p>
								
								<tr>
					<td>USER ID</td>
					<td>: <input type="text"> </td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td>: <input type="password" >  </td>
				</tr>
							
				<tr>
					<td rowspan="2" align ="center"> 
					 <input type="button" value = "DELETE" >
					 </td>
				</tr>
				</table>
		</fieldset>
		</form>
	</body>
</html> 
<?php
include_once 'footer.php'; 
 ?>