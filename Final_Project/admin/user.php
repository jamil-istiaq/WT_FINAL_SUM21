
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
           
	<legend><h1>User Info</h1></legend>
           <div class="row">
                <div class="column">
                    <table border="1">
                       </div>
                <div class="column">
                    <table border="1">
                    <?php
                        $query1 = "SELECT name,email,pswrd,phn_number,nid,adrs,dob,bl_group,gender,ocpsn,healt_issue FROM `user_info`";
                        $result1=get($query1);
                        echo "<tr><th>Name</th>
						<th>Email</th>
						<th>Password</th>
							<th>Phone Number</th>
						<th>Nid</th>
							<th>Address</th>
						<th>DOB</th>
							<th>Blood Group</th>
						<th>Gender</th>
							<th>Occupation</th>
						
						<th>Health Issues</th></tr>";
                        ?>
                    <?php
                        foreach ($result1 as $row){ 
                            echo "<tr><td align='center'>$row[name]</td>";
							echo "<td align='center'>$row[email]</td>";
							echo "<td align='center'>$row[pswrd]</td>";
									echo "<td align='center'>$row[phn_number]</td>";
							echo "<td align='center'>$row[nid]</td>";
									echo "<td align='center'>$row[adrs]</td>";
							echo "<td align='center'>$row[dob]</td>";
									echo "<td align='center'>$row[bl_group]</td>";
							echo "<td align='center'>$row[gender]</td>";
									echo "<td align='center'>$row[ocpsn]</td>";
                            echo "<td align='center'>$row[healt_issue]</td></tr>";}
                        ?>
                    </table>
                </div>
                </div>
                    </table>
           
            </body>
</html>



<?php include_once 'footer.php'?>