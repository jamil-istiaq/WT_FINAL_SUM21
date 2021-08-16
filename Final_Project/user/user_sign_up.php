
<?php
  require_once 'controllers/user_controller.php';
?>

<html>
	    <head>
        <style>
            body {
                    background-color: rgb(204, 204, 204);
                }    
        </style>
        <script src="js/user_signup_val.js"></script>
        
        </head>
    <body>
            <form action="" onsubmit="return validate()" method="post">
                <fieldset>
                    <legend><h1>User Sign Up</h1></legend>
                <table align="center">	
                    <tr>    	
                        <td>
                            Name
                        </td>
                        <td>
                            :<input id="name" type="text" name="name" value="<?php echo $name;?>"  placeholder="Enter full name">
                        </td>
                        <td>
                        <span id="err_name"><?php echo $err_name;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            :<input id="email" type="text" name="email" value="<?php echo $email;?>" placeholder="Enter a valid email">
                        </td>
                        <td>
                        <span id="err_email"><?php echo $err_email;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Password
                        </td>
                        <td>
                            :<input id="password" type="password" name="password" value="<?php echo $pas;?>" placeholder="Enter password">
                        </td>
                        <td>
                        <span id="err_pass"><?php echo $err_pass;?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Phone Number
                        </td>
                        <td>
                            :<input id="phn" type="text" name="phn" value="<?php echo $phn;?>" placeholder="Valid phone number">
                        </td>
                        <td>
                        <span id="err_phn"><?php echo $err_phn;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            National ID
                        </td>
                        <td>
                            :<input id="nid" type="text" name="nid" value="<?php echo $nid;?>" placeholder=" 13 digit number">
                        </td>
                        <td>
                        <span id="err_nid"><?php echo $err_nid;?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Address
                        </td>
                        <td>
                            :<textarea id="adrs" name="adrs" placeholder="Enter full address"><?php echo $adrs; ?></textarea>
                        </td>
                        <td>
                        <span id="err_adrs"><?php echo $err_adrs;?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Date of Birth
                        </td>
                        <td>
                            :<select id="day" name="day">
                                <option disabled selected >Day</option>
                                
                                    <?php
                                    foreach($date as $d){
                                    if($d == $bdate) 
                                        echo "<option selected>$d</option>";
                                    else
                                        echo "<option>$d</option>";
                                    }
                                    ?>   
                                
                            </select>
                        
                            <select id="month" name="month">
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

                            <select id="year" name="year">
                                <option disabled selected >Year</option>
                                
                                <?php
                                    foreach($byear as $y){
                                    if($y == $year) 
                                        echo "<option selected>$y</option>";
                                    else
                                        echo "<option>$y</option>";
                                    }
                                    ?>  
                                
                            </select>
                        </td>
                        <td>
                        <span id="err_day"> <?php echo $err_date;?> </span>
                        <span id="err_month"> <?php echo $err_month;?> </span>
                        <span id="err_year"> <?php echo $err_year;?> </span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Blood Group
                        </td>
                        <td>
                            :<select id="group" name="group">
                                <option disabled selected>Select Blood Group</option>
                                <?php
                                    foreach($bgroup as $b){
                                    if($b == $blood_group) 
                                        echo "<option selected>$b</option>";
                                    else
                                        echo "<option>$b</option>";
                                    }
                                    ?>
                            </select>
                        </td>
                        <td>
                        <span id="err_blood_group"> <?php echo $err_blood_group;?> </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gender
                        </td>
                        <td>
                            :<input id="gender" type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender">Male
                            <input id="gender" type="radio"  value="Female" <?php if($gender=="Female") echo "checked"; ?> name="gender">Female
                        </td>
                        <td>
                            <span id="err_gender"> <?php echo $err_gender;?> </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Occupation
                        </td>
                        <td>
                            :<input id="opsn" type="text" name="opsn" value="<?php echo $opsn;?>" placeholder="Enter occupation">
                        </td>
                        <td>
                        <span id="err_opsn"><?php echo $err_opsn;?></span>
                        </td>
                    </tr>

                    
                    <tr>
                        <td>
                            Majore health Issue<br>
                            (if any)
                        </td>
                        <td>
                            :<textarea id="health" name="health" placeholder="Mention if any"><?php echo $health;?></textarea>
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
                        <input type="submit" name="sign_up" value="Submit">
                        
                        
                        <a href="user_login.php">  
                        <input type="button" value="Back">  
                        </a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>

<?php 
 include 'controllers/footer.php';
?>
