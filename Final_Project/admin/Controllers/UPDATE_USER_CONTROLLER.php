<?php
 
 
 include_once 'models/db_config.php';

 $email=$_SESSION["ulog"];
 
 if(isset($_POST["update"])){
 
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phn=$_POST['phn'];
     $adrs=$_POST['adrs'];
     $job=$_POST['opsn'];
     $hissue=$_POST['health'];
     $uid=$_POST['u_id'];
     $pass=$_POST['password'];
    
    $query= "UPDATE user_info SET name='$name', email='$email', phn_number='$phn', adrs='$adrs', ocpsn='$job', healt_issue='$hissue' where user_count='$uid' and pswrd='$pass'";
    execute($query);

    // UPDATE table_name SET  col1=val1, col2=val2, col3=val3 WHERE Condition

    // col1, col2 – is the anme of columns which records has to be updated.
    // val1, val2 – is the values of new records which has be updated in to table.

    
    header("Location: UPDATE_USER.php");
    
 }
 
 
 ?>