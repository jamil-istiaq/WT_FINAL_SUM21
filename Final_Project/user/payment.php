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
            <legend><h1>Pending Ticket Information</h1></legend>
            <table border="1" align="center" class="table-1">
            <?php
              $query = "SELECT  u_id,tkt_id,route_from,route_to,p_date,p_time,class,p_num,t_name,c_num,sit_num,sit_num1,sit_num2,sit_num3,sit_num4,cost FROM `purchase_ticket` WHERE u_email='{$email}'";
              $result=get($query);
              echo "<tr>
                              <th>Ticket Num</th>
                              <th>Route From</th>
                              <th>Route To</th>
                              <th>Purchase Date</th>
                              <th>Purchase Time</th>
                              <th>Class</th>
                              <th>Pessanger Num</th>
                              <th>Train Name</th>
                              <th>Coach Num</th>
                              <th>Sit(Single)</th>
                              <th>Sit 01</th>
                              <th>Sit 02</th>
                              <th>Sit 03</th>
                              <th>Sit 04</th>
                              <th>Amount</th>
                    </tr>";
                foreach ($result as $row){  
                    
                    echo "<tr><td align='center'>$row[tkt_id]</td>";
                    echo "<td align='center'>$row[route_from]</td>";
                    echo "<td align='center'>$row[route_to]</td>";
                    echo "<td align='center'>$row[p_date]</td>";
                    echo "<td align='center'>$row[p_time]</td>";
                    echo "<td align='center'>$row[class]</td>";
                    echo "<td align='center'>$row[p_num]</td>";
                    echo "<td align='center'>$row[t_name]</td>";
                    echo "<td align='center'>$row[c_num]</td>";
                    echo "<td align='center'>$row[sit_num]</td>";
                    echo "<td align='center'>$row[sit_num1]</td>";
                    echo "<td align='center'>$row[sit_num2]</td>";
                    echo "<td align='center'>$row[sit_num3]</td>";
                    echo "<td align='center'>$row[sit_num4]</td>";
                    echo "<td align='center'>$row[cost]</td></tr>";
                    
                }
            ?>

           </table>
        </fieldset>
		<form action="" onclick="return validate()" method="POST">
		    <fieldset>
                <legend><h1><b> Payment </b></h1></legend>
			    <table align="center">			
                    <tr>
                        <td>
                            Payment Method
                        </td>
                        <td>
                            :<select id="pay_method" name="pay_method"> 
                                <option selected disabled>Choose</option>
                                
                                <?php
                                foreach($payarr as $p){
                                    if($p == $paymethod) 
                                        echo "<option selected>$p</option>";
                                    else
                                        echo "<option>$p</option>";
                                    }
                                    ?>
                                
                            </select>
                        </td>
                        <td>
                            <span id="err_pay"><?php echo $err_pay; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Amount (BDT)
                        </td>
                        <td>
                            :<input id="amount" type="text" name="amount" value="<?php echo $amount;?>" placeholder="Type amount">
                        </td>
                        <td>
                             <span id="err_amount"><?php echo $err_amount;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            AC Number(Bkash/Nogod/Rocket)
                        </td>
                        <td>
                            :<input id="ac_number" type="text" name="ac_number" value="<?php echo $ac_num; ?>" placeholder="Enter account number">
                        </td>
                        <td>
                             <span id="ac_err"><?php echo $ac_err;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ticket Number
                        </td>
                        <td>
                            :<input id="tkt_number" type="text" name="tkt_number" value="<?php echo $tkt_num; ?>" placeholder="Enter Ticket number">
                        </td>
                        <td>
                             <span id="tkt_err"><?php echo $tkt_err;?></span>
                        </td>
                    </tr>					
				    <tr>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            &nbsp;
                        </td>
					    <td> 
					        <input type="Submit" name="payment" value = "Payment" >
					    </td>
				    </tr>
				</table>
		    </fieldset>
		</form>
	</body>
    <script src="js/payment_tkt_val.js"></script>
</html> 
<?php
 include 'controllers/footer.php';
?>