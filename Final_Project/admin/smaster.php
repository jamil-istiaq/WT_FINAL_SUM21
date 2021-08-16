
<?php 
include_once 'header.php';

   require_once 'Models/db_config.php';
?>

//id,name , pass, gender,email,phone,address,dob,


<html>
	    <head>
        <style>
            body {
                    background-color: rgb(204, 204, 204);
                }    
        </style>
        
        </head>
    <body>
           
	<legend><h1>Station Master Info</h1></legend>
           <div class="row">
                <div class="column">
                    <table border="1">
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
                    </table>
           
            </body>
</html>



<?php include_once 'footer.php'?>