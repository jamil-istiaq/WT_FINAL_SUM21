<?php
 include_once 'controllers/header.php';
 include_once 'controllers/ticket_controller.php';
 if(!isset($_SESSION["ulog"])){
    header("Location: user_login.php");
}
?>


<html>
	<head>
        <style>
            body{
                background-color: rgb(204, 204, 204);
            }
        </style>
        <script src="js/pur_tkt_val.js"></script>
    </head>
	<body>
	<form action="" onclick="return validate()"  method="POST">
		<fieldset>
            <legend><h1><b> Purchase Ticket </b></h1></legend>
            <span><?php echo $err_db;?></span>
			<table align="center">			
                <tr>
					<td>
                        Select Route
                    </td>
                    <td colspan="2">
                        :<select id="routeTo" name="routeTo">
                        <option selected disabled>From</option>
                        
                             <?php
                             $d=view_option();
                              foreach($d as $a){
                              if($a == $routeTo) 
                                echo "<option selected>$a</option>";
                              else
                                echo "<option>$a</option>";
                                }
                              ?>   
                        
                        
                    </select>
                         --
                        <select id="routeFrom" name="routeFrom">
                        <option selected disabled>To</option>
                        
                             <?php
                             $d=view_option();
                              foreach($d as $a){
                              if($a == $routeFrom) 
                                echo "<option selected>$a</option>";
                              else
                                echo "<option>$a</option>";
                                }
                              ?>   
                       
                        </select> 
                    </td>
                    <td>
                        <span id="err_Toroute"><?php echo $err_Toroute; ?></span>
                        <span id="err_Fromroute"><?php echo $err_Fromroute; ?></span>
                    </td>
                </tr> 
                    
                <tr>   
                    <td>
                        Date
                    </td>
					<td colspan="2">
                    :<select id="tday" name="tday">
                                <option disabled selected >Day</option>
                                
                                    <?php
                                    foreach($tdate as $d){
                                    if($d == $date) 
                                        echo "<option selected>$d</option>";
                                    else
                                        echo "<option>$d</option>";
                                    }
                                    ?>   
                                
                            </select>
                        
                        <select id="tmonth" name="tmonth">
                                <option disabled selected >Month</option>
                                
                                    <?php
                                    foreach($marray as $m){
                                    if($m == $month) 
                                        echo "<option selected>$m</option>";
                                    else
                                        echo "<option>$m</option>";
                                    }
                                    ?>
                                
                            </select>
                        
                    </td>
                    <td>
                         <span id="err_date"><?php echo $err_date; ?></span>
                         <span id="err_month"><?php echo $err_month; ?></span>
                    </td>
				
                </tr>
				<tr>
                    <td>
                        Time
                    </td>
					<td colspan="2">
                        :<select id="time" name="time">
                            <option selected disabled>Time</option>
                             
                            <?php
                              foreach($time_arr as $t){
                                if($t == $time) 
                                    echo "<option selected>$t</option>";
                                else
                                    echo "<option>$t</option>";
                                }
                                ?>
                            
                        </select> 
                        <select id="format" name="format">
                        <option selected disabled>AM/PM</option>
                            
                            <?php
                              foreach($tfromat_arr as $tf){
                                if($tf == $tfromat) 
                                    echo "<option selected>$tf</option>";
                                else
                                    echo "<option>$tf</option>";
                                }
                                ?>
                            
                        </select>  
                    </td>
                    <td>
                         <span id="err_time"><?php echo $err_time; ?></span>
                         <span id="err_tformat"><?php echo $err_tformat; ?></span>
                    </td>
				</tr>
				<tr>
					<td>
                        Choose Class
                    </td>
					<td colspan="2">
                        :<select id="class" name="class">
                        <option selected disabled>Choose a class</option> 
                        
                        <?php
                              foreach($tclass_arry as $tc){
                                if($tc == $tclass) 
                                    echo "<option selected>$tc</option>";
                                else
                                    echo "<option>$tc</option>";
                                }
                                ?>
                        
                        </select>
                    </td>
                    <td>
                         <span id="err_tclass"><?php echo $err_tclass; ?></span>
                    </td>
				</tr>
				<tr>
				    <td>
                        Passenger Number
                    </td>
				    <td colspan="2">
                        :<select id="passenger" name="passenger">
                            <option selected disabled>Traveller Number</option> 
                            
                            <?php
                              foreach($pnum_arr as $p){
                                if($p == $pnum) 
                                    echo "<option selected>$p</option>";
                                else
                                    echo "<option>$p</option>";
                                }
                                ?>
                            
                            </select>
                    </td>
                    <td>
                         <span id="err_pnum"><?php echo $err_pnum; ?></span>
                    </td>
				</tr>
                <tr>
				    <td>
                        Passenger Type
                    </td>
					<td colspan="2">
                        
                        :<input type="checkbox" id="ptype" name="ptype[]" <?php if(ptypeExist("Child")) echo "checked";?> value="Child">Child
                        <input type="checkbox" id="ptype" name="ptype[]" <?php if(ptypeExist("Adult")) echo "checked";?> value="Adult"> Adult    
                        
                    </td>
                    <td>
                         <span id="err_ptype"><?php echo $err_ptype; ?></span>
                    </td>
				</tr>
				<tr>
					<td>
                        Adult
                    </td>
					<td colspan="2">
                        :<select id="adult" name="adult">
                        <option selected disabled>Select number</option>
                        
                        <?php
                              foreach($adult_arr as $ad){
                                if($ad == $adult) 
                                    echo "<option selected>$ad</option>";
                                else
                                    echo "<option>$ad</option>";
                                }
                                ?>
                        
                        </select>
					</td>
                    <td>
                         <span id="err_adult"><?php echo $err_adult; ?></span>
                    </td>
				</tr>
                <tr>
					<td>
                        Child
                    </td>
					<td colspan="2">
                        :<select id="child" name="child">
                        <option selected disabled>Select number</option>
                        
                        <?php
                              foreach($child_arr as $cd){
                                if($cd == $child) 
                                    echo "<option selected>$cd</option>";
                                else
                                    echo "<option>$cd</option>";
                                }
                                ?>
                        
                        </select>
					</td>
                    <td>
                         <span id="err_child"><?php echo $err_child; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Choose Train
                    </td>
                        <td colspan="2">
                            :<select id="train" name="train">
                            <option selected disabled>Select Train</option>
                            
                            <?php
                             $tn=view_train();
                              foreach($tn as $a){
                              if($a == $train) 
                                echo "<option selected>$a</option>";
                              else
                                echo "<option>$a</option>";
                                }
                              ?>   
                            
                            </select>
                        </td>
                        <td>
                         <span id="err_train"><?php echo $err_train; ?></span>
                    </td>
                </tr>            
                <tr>
                    <td>
                        Caoach Number
                    </td>
                    <td colspan="2">    
                        :<select id="cnum" name="cnum">
                            <option disabled selected >Choose Coach</option>
                            
                            <?php
                              foreach($cnum_arr as $cn){
                                if($cn == $cnum) 
                                    echo "<option selected>$cn</option>";
                                else
                                    echo "<option>$cn</option>";
                                }
                                ?>
                            
                        </select> 
                    </td>
                    <td>
                         <span id="err_cnum"><?php echo $err_cnum; ?></span>
                    </td>
                     
                </tr> 
                <tr> 
                    <td>      
                        Sit Number<i><b><br>(*for Single passernger)<b></i>
                    </td>
                    <td colspan="2" style="vertical-align:top"> 
                    :<select id="sit" oninput="checksit(this)" name="sit">
                                <option disabled selected >Choose Sit</option>
                                
                                    <?php
                                    foreach($num as $n){
                                    if($n == $snum) 
                                        echo "<option selected>$n</option>";
                                    else
                                        echo "<option>$n</option>";
                                    }
                                    ?>   
                                
                            </select>    
                     </td>
                     <td>
                         <span id="err_snum"><?php echo $err_snum; ?></span>
                    </td>
                    
                </tr>
                <tr><td colspan="3">&nbsp;&nbsp;&nbsp;</td></tr>
                <tr>
                    
                    <td rowspan="4" style="vertical-align:top">    
                        Sit Number<i><b><br>(*for multiple passernger)<b></i>
                    </td>
                    <td align="right">First sit:</td>
                    <td style="vertical-align:top">
                    <select  id="sit1" oninput="checksit_1(this)"  name="sit1" >
                                <option disabled selected >Choose</option>
                                
                                    <?php
                                    foreach($num1 as $n){
                                    if($n == $snum1) 
                                        echo "<option selected>$n</option>";
                                    else
                                        echo "<option>$n</option>";
                                    }
                                    ?>   
                                
                            </select>  
                           
                    </td>
                    <td>
                        <span id="err_snum1"><?php echo $err_snum1; ?></span>
                    </td>
                </tr>
                <tr>
                    <td align="right">Second sit:</td>
                    <td> 
                    <select id="sit2" oninput="checksit_2(this)" name="sit2">
                                <option disabled selected >Choose</option>
                                
                                    <?php
                                    foreach($num2 as $n){
                                    if($n == $snum2) 
                                        echo "<option selected>$n</option>";
                                    else
                                        echo "<option>$n</option>";
                                    }
                                    ?>   
                                
                            </select>
                    </td>
                    <td>
                        <span id="err_snum2"><?php echo $err_snum2; ?></span>
                    </td>
                    </tr>
                    <tr>
                    
                    <td align="right">Third sit:</td>
                    <td> 
                     <select id="sit3" oninput="checksit_3(this)" name="sit3">
                                <option disabled selected>Choose</option>
                                
                                    <?php
                                    foreach($num3 as $n){
                                    if($n == $snum3) 
                                        echo "<option selected>$n</option>";
                                    else
                                        echo "<option>$n</option>";
                                    }
                                    ?>   
                                
                            </select>
                    </td>
                    <td>
                        <span id="err_snum3"><?php echo $err_snum3; ?></span>
                    </td>  
                    </tr>
                    <tr>
                    
                    <td align="right">Fourth sit:</td>
                    <td>        
                    <select id="sit4" oninput="checksit_4(this)" name="sit4">
                                <option disabled selected>Choose</option>
                                
                                    <?php
                                    foreach($num4 as $n){
                                    if($n == $snum4) 
                                        echo "<option selected>$n</option>";
                                    else
                                        echo "<option>$n</option>";
                                    }
                                    ?>   
                                
                            </select>  
                           
                     </td>
                     <td>
                         <span id="err_snum4"><?php echo $err_snum4; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
                        <h5>N.B: Choose Sit number '0', if you don't need any.</h5>
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
                        &nbsp;
                    </td>
                    <td> 
					 <input type="submit" name="purchase" value = "Purchase" >
					 </td>
				</tr>
                </table>
		</fieldset>
	</form>
	</body>
    <script src="js/check_sit.js"></script>
</html> 

<?php
 include 'controllers/footer.php';
?>