<?php 
 session_start();
 include 'controllers/header.php';
 include 'models/db_config.php';
 if(!isset($_SESSION["ulog"])){
    header("Location: Login.php");
}
$email=$_SESSION["ulog"];
?>

<html>
    <head>
    <title>Profile</title>
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
            <legend><h1>Employee Information</h1></legend>
           <table border="1" align="center" class="table-1">
           <?php
              
        
                    $query = "SELECT name, email, phone,nid, address, dob, bl_grp, gender FROM `add_emp` WHERE email='{$email}'";
                    
                    $result=get($query);
                   
                    foreach ($result as $row){
                    
                    echo "<tr><td align='left'>Name:</td><td align='center'>$row[name]</td></tr>";
                    echo "<tr><td align='left'>Email:</td><td align='center'>$row[email]</td></tr>";
                    echo "<tr><td align='left'>Phone Number:</td><td align='center'>$row[phone]</td></tr>";
                    echo "<tr><td align='left'>NID:</td><td align='center'>$row[nid]</td></tr>";
                    echo "<tr><td align='left'>Address:</td><td align='center'>$row[address]</td></tr>";
                    echo "<tr><td align='left'>Date of birth:</td><td align='center'>$row[dob]</td></tr>";
                    echo "<tr><td align='left'>Blood Group:</td><td align='center'>$row[bl_grp]</td></tr>";
                    echo "<tr><td align='left'>Gender:</td><td align='center'>$row[gender]</td></tr>";
                    
                    
                    
                    
                }
                
                
                
            ?>

           </table>
        </fieldset>
    </body>
</html>

<?php
 include 'controllers/footer.php';
?>