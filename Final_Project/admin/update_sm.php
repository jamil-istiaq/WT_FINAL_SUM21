
<?php

 include_once 'models/db_config.php';
 include_once 'header.php';
 include_once 'Controllers/update_sm_controller.php';
 
 $eid="";

 if(isset($_POST["submit"])){
    $eid=$_POST["eid"];
    header("Location: sm1.php");}
    $cookie_name = "eid";
    $cookie_value = $eid;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
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
         <form action="" method="post">
             <fieldset>
                 <legend><h1>Update Station Master</h1></legend>
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
                     <table>
                         <tr>
                             <td>Enter Station Master name to Update:
                                <input type="text" name="eid" placeholder="Enter Sm">
                                <input type="submit" name="submit" value="Update">           
                             </td>
                         </tr>
                     </table>
                     
         </fieldset>
     </form>
 </body>
</html>



<?php 
include 'footer.php';
?>
