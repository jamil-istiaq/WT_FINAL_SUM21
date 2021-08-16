<?php 
include_once 'Controllers/add_station_controller.php';
include_once 'header.php';
?>
<html>
<head><style> body {
 background-color: rgb(204, 204, 204);
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: 5px;
}

</style></head>
	
    <body>
	<fieldset>
	<legend><h1>Information</h1></legend>
           <div class="row">
                <div class="column">
                    <table border="1">
                        <?php
                        $query1 = "SELECT  s_id,s_name,r_code,cost FROM `fair_chart`";
                        $result1=get($query1);
                        echo "<tr><th>Station Serial Number</th>
						                   <th>Station Name</th>
						                   <th>Station Code</th>
						                   <th>Fair</th></tr>";
                        ?>
                        <?php
                        foreach ($result1 as $row){ 
                            echo "<tr><td align='center'>$row[s_id]</td>";
							echo "<td align='center'>$row[s_name]</td>";
							echo "<td align='center'>$row[r_code]</td>";
							echo "<td align='center'>$row[cost]</td></tr>";}
                        ?>
                    </table>
                </div>
                <div class="column">
                    <table border="1">
                    <?php
                        $query1 = "SELECT r_id,r_name,r_code,sm_name FROM `train_route`";
                        $result1=get($query1);
                        echo "<tr><th>Station Sl No</th>
						<th>Station Name</th>
						<th>Station Code</th>
						<th>Station Master Name</th></tr>";
                        ?>
                    <?php
                        foreach ($result1 as $row){ 
                            echo "<tr><td align='center'>$row[r_id]</td>";
							echo "<td align='center'>$row[r_name]</td>";
							echo "<td align='center'>$row[r_code]</td>";
                            echo "<td align='center'>$row[sm_name]</td></tr>";}
                        ?>
                    </table>
                </div>
                </div>
            
        </fieldset>
		<h1><b>ADD STATION </b></h1>
        <fieldset>
		
			<form action="" method="post">
            <table align="center" >            
				<tr>
					<td> Station SL No: </td>
					<td><input type="text" name="sl" value="<?php echo $sl;?>"placeholder="Station SL Number"></td>
					<td><span><?php echo $err_sl;?></span></td>
				</tr> 
							
				<tr>
					<td> Station Name: </td>
					<td><input type="text" name="name" value="<?php echo $name;?>"placeholder="Station Name"></td>
					<td><span><?php echo $err_name;?></span></td>
				</tr>              
              
                <tr>
						<td> Station Code: </td>
						<td><input type="text" name="sid" value="<?php echo $sid;?>"placeholder="Station Code"></td>
						<td><span><?php echo $err_sid;?></span></td>
				</tr>

				<tr>
					<td> Station Master Name: </td>
					<td><input type="text" name="sname" value="<?php echo $sname;?>"placeholder="Station Master Name"></td>
					<td><span><?php echo $err_sname;?></span></td>
				</tr> 
				
				<tr>
					<td> Station Fair: </td>
					<td><input type="text" name="fair" value="<?php echo $fair;?>"placeholder="Station Fair Amount"></td>
					<td><span><?php echo $err_fair;?></span></td>
				</tr> 
				            
                <tr>
				
						<td align="right" colspan="2"><input type="submit" name="Submit" value="Add Station"></td>
				</tr>
				
                </table>
			
        </fieldset>
        </form>
    </body>
</html>
<?php include_once 'footer.php'; ?>