
<?php 
include_once 'header.php';

   require_once 'Models/db_config.php';
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
           
	<legend><h1>Employee Info</h1></legend>
           <div class="row">
                <div class="column">
                    <table border="1">
                       </div>
                <div class="column">
                    <table border="1">
              <?php
                        $query1 = "SELECT e_id,name,pass,gender,email,phone,address,dob,bl_grp,nid,salary FROM `add_emp`";
                        $result1=get($query1);
                        echo "<tr><th>Employee ID</th>
						<th>Name</th>
								<th>Password</th>
										<th>Gender</th>
						<th>Email</th>
				
							<th>Phone Number</th>
	
							<th>Address</th>
						<th>DOB</th>
							<th>Blood Group</th>
						<th>Nid</th>
						
						
						<th>Salary</th></tr>";
                        ?>
                    <?php
                        foreach ($result1 as $row){ 
                            echo "<tr><td align='center'>$row[e_id]</td>";
							
							echo "<td align='center'>$row[name]</td>";
							
							echo "<td align='center'>$row[pass]</td>";
							
							echo "<td align='center'>$row[gender]</td>";
							
							
							echo "<td align='center'>$row[email]</td>";
														
									echo "<td align='center'>$row[phone]</td>";
									
									echo "<td align='center'>$row[address]</td>";
									
									echo "<td align='center'>$row[dob]</td>";
									
									echo "<td align='center'>$row[bl_grp]</td>";
									
									echo "<td align='center'>$row[nid]</td>";
							
                            echo "<td align='center'>$row[salary]</td></tr>";}
                        ?>
                    </table>
                </div>
                </div>
                    </table>
           
            </body>
</html>



<?php include_once 'footer.php'?>