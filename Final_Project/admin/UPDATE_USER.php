
<?php
 
 include_once 'models/db_config.php';
 include_once 'header.php';
 $uid="";

 if(isset($_POST["submit"])){
    $uid=$_POST["uid"];
    header("Location: update.php");}
    $cookie_name = "uid";
    $cookie_value = $uid;
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
                 <legend><h1>Update User</h1></legend>
             <table border="1">
                    <?php
                        $query1 = "SELECT name,email,pswrd,phn_number,nid,adrs,dob,bl_group,gender,ocpsn,healt_issue, user_count FROM `user_info`";
                        $result1=get($query1);
                        echo "<tr>
                        <th>User Id</th>
                        <th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Phone Number</th>
						<th>Nid</th>
						<th>Address</th>
						<th>DOB</th>
						<th>Blood Group</th>
						<th>Gender</th>
						<th>Occupation</th>
						<th>Health Issues</th> 
                        </tr>";
						
                        ?>
              
					<?php
                        foreach ($result1 as $row){ 
                             echo "<tr><td align='center'>$row[user_count]</td>";
                             echo "<td align='center'>$row[name]</td>";
							 echo "<td align='center'>$row[email]</td>";
							 echo "<td align='center'>$row[pswrd]</td>";
									 echo "<td align='center'>$row[phn_number]</td>";
							echo "<td align='center'>$row[nid]</td>";
									 echo "<td align='center'>$row[adrs]</td>";
							echo "<td align='center'>$row[dob]</td>";
									echo "<td align='center'>$row[bl_group]</td>";
							 echo "<td align='center'>$row[gender]</td>";
									echo "<td align='center'>$row[ocpsn]</td>";
                            echo "<td align='center'>$row[healt_issue]</td></tr>";
							}
                          ?>
                     </table>
                     <table>
                         <tr>
                             <td>Enter User ID to Update:
                                <input type="text" name="uid" placeholder="Enter User ID">
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
