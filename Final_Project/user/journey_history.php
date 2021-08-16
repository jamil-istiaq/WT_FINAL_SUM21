<?php
 session_start();
 include_once 'controllers/header.php';
 include_once 'models/db_config.php';
 include_once 'controllers/payment_controller.php';
 

 if(!isset($_SESSION["ulog"])){
    header("Location: user_login.php");
}
$email=$_SESSION["ulog"];
 
?>

<html>
	<head> 
    <style>
            body{
                background-color: rgb(204, 204, 204);
            }
            .table-1{
                
                font-family: arial, sans-serif;
                border: 1px;
                width: 100%;
                }

            .td-1, .th-1{
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;

            }
        </style>
    </head>
	<body>
        <fieldset>
            <legend><h1>Journey History</h1></legend>
            <table border="1" align="center" class="table-1">
            <?php
              $query = "SELECT  tkt_id,route_from,route_to,p_date,p_time,t_name FROM `tickets` WHERE u_email='{$email}'";
              $result=get($query);
              echo "<tr>
                              <th>Route From</th>
                              <th>Route To</th>
                              <th>Purchase Date</th>
                              <th>Purchase Time</th>
                              <th>Train Name</th>
                    </tr>";
                foreach ($result as $row){  
                    
                    
                    echo "<tr><td align='center'>$row[route_from]</td>";
                    echo "<td align='center'>$row[route_to]</td>";
                    echo "<td align='center'>$row[p_date]</td>";
                    echo "<td align='center'>$row[p_time]</td>";
                    echo "<td align='center'>$row[t_name]</td></tr>";
                    
                }
            ?>

           </table>
           </fieldset>
		</form>
	</body>
</html> 
<?php
 include 'controllers/footer.php';
?>