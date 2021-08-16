<?php 
 session_start();
 include 'controllers/header.php';
 include 'models/db_config.php';
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
                height: 600px ;
                width: 500px;
            }
            table {
                font-family: arial, sans-serif;
                border: 1px;
                width: 100%;
                }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;

            }

             tr:nth-child(even) {
                background-color: white;
                }
            
        </style>
    </head>
    <body>
        <fieldset>
            <legend><h1>User Information</h1></legend>
           <table border="1" align="center" class="table-1">
           <?php
              
        
                    $query = "SELECT name, email, phn_number, nid,adrs,dob,bl_group,gender,ocpsn,healt_issue FROM `user_info` WHERE email='{$email}'";
                    
                    $result=get($query);
                   
                    foreach ($result as $row){
                    
                    echo "<tr><td align='left'>Name:</td><td align='center'>$row[name]</td></tr>";
                    echo "<tr><td align='left'>Email:</td><td align='center'>$row[email]</td></tr>";
                    echo "<tr><td align='left'>Phone Number:</td><td align='center'>$row[phn_number]</td></tr>";
                    echo "<tr><td align='left'>NID:</td><td align='center'>$row[nid]</td></tr>";
                    echo "<tr><td align='left'>Address:</td><td align='center'>$row[adrs]</td></tr>";
                    echo "<tr><td align='left'>Date of birth:</td><td align='center'>$row[dob]</td></tr>";
                    echo "<tr><td align='left'>Blood Group:</td><td align='center'>$row[bl_group]</td></tr>";
                    echo "<tr><td align='left'>Gender:</td><td align='center'>$row[gender]</td></tr>";
                    echo "<tr><td align='left'>Occupation:</td><td align='center'>$row[ocpsn]</td></tr>";
                    echo "<tr><td align='left'>Health Issue:</td><td align='center'>$row[healt_issue]</td></tr>";    
                }
                
                
                
            ?>

           </table>
        </fieldset>
    </body>
</html>

<?php
 include 'controllers/footer.php';
?>