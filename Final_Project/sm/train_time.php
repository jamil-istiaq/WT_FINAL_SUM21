<?php
 include_once 'controllers/header.php';
 include_once 'models/db_config.php';
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
            <legend><h1>Train Information</h1></legend>
            <table border="1" align="center" class="table-1">
			
<?php
    $query = "SELECT r_name,r_code,t_name,t_code,dep_time,ar_time   FROM `train_schedule` ";
    $result=get($query);
    echo"<tr>
                <th>Route Name</th>
                <th>Route Code</th>
                <th>Train Name</th>
                <th>Train Code</th>
                <th>Dep. Time</th>
                <th>Arvl. Time</th>
        </tr>";
              foreach ($result as $row){  
 
                    echo "<tr><td align='center'>$row[r_name]</td>";
                    echo "<td align='center'>$row[r_code]</td>";
                    echo "<td align='center'>$row[t_name]</td>";
                    echo "<td align='center'>$row[t_code]</td>";
                    echo "<td align='center'>$row[dep_time]</td>";
                    echo "<td align='center'>$row[ar_time]</td></tr>";
                }
?>

</table>
</fieldset>
</body>
    
</html> 
<?php
 include 'controllers/footer.php';
?>