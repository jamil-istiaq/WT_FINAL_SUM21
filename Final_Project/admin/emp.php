
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
           
	<legend><h1>Employee</h1></legend>
           <div class="row">
                <div class="column">
                    <table border="1">
                        <?php
                        $query1 = "SELECT name,salary FROM `add_emp`";
                        $result1=get($query1);
                        echo "<tr><th>Employee Name</th>
						                   <th> Salary</th>
						               
						                   </tr>";
                        ?>
                       <?php
                        foreach ($result1 as $row){ 
                            echo "<tr><td align='center'>$row[name]</td>";
					
                            echo "<td align='center'>$row[salary]</td></tr>";}
                        ?>
                    </table>
                </div>
                </div>
                    </table>
                </div>
				  </div>
            </body>
</html>



<?php include_once 'footer.php'?>