<?php 
include_once 'Controllers/update_station_controller.php';
include_once 'header.php';
?>
<html>
    <head><style> body {
 background-color: rgb(204, 204, 204);
}</style> </head>
	
    <body>
		<h1><b>UPDATE STATION </b></h1>
        <fieldset>
		
			<form action="" method="post">
            <table>            
                
				<tr>
					<td> Station Name: </td>
					<td><input type="text" name="name" value="<?php echo $name;?>"placeholder="Name"></td>
					<td><span><?php echo $err_name;?></span></td>
				</tr>              
              
                <tr>
						<td> Station ID: </td>
						<td><input type="text" name="sid" value="<?php echo $sid;?>"placeholder="sid"></td>
						<td><span><?php echo $err_sid;?></span></td>
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
				
						<td align="right" colspan="2"><input type="button" name="Update" value="Update"></td>
				</tr>
				
                </table>
			
        </fieldset>
        </form>
    </body>
</html>
<?php include_once 'footer.php'; ?>