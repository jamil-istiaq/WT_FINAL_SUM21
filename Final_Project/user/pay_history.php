<?php
 session_start();
 include_once 'controllers/header.php';
 include_once 'models/db_config.php';
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
        </style>
    </head>
    <body>
        <fieldset>
        <legend><h1>Payment History</h1></legend>   
            <table>
            <table border="1" align="center" class="table-1">
            <?php
              $query = "SELECT  t_num,p_method,p_amount,p_num FROM `payment_data` WHERE u_email='{$email}'";
              $result=get($query);
              echo "<tr>
                              <th>Ticket Number</th>
                              <th>Payment Method</th>
                              <th>Amount Paind</th>
                              <th>AC Number</th>
                    </tr>";
                foreach ($result as $row){  
                    
                    echo "<tr><td align='center'>$row[t_num]</td>";
                    echo "<td align='center'>$row[p_method]</td>";
                    echo "<td align='center'>$row[p_amount]</td>";
                    echo "<td align='center'>$row[p_num]</td></tr>";
                }
            ?>

            </table>
        </fieldset>
    </body>
</html>


<?php
 include_once 'controllers/footer.php';
?>