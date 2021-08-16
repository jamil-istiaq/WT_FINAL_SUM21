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
            <legend><h1>Messages</h1></legend>
            <table border="1" align="center" class="table-1">
            <?php
              $query = "select m_id, u_email, msg_rcvr, msg_type,s_name, msg from em_msg";
              $result=get($query);
              echo "<tr>
                              <th>Message ID</th>
                              <th>Email</th>
                              <th>Reciver</th>
                              <th>Message Type</th>
                              <th>Message Station</th>
                              <th>Message</th>
                    </tr>";
                foreach ($result as $row){  
                    
                    
                    echo "<tr><td align='center'>$row[m_id]</td>";
                    echo "<td align='center'>$row[u_email]</td>";
                    echo "<td align='center'>$row[msg_rcvr]</td>";
                    echo "<td align='center'>$row[msg_type]</td>";
                    echo "<td align='center'>$row[s_name]</td>";
                    echo "<td align='center'>$row[msg]</td></tr>";
                    
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