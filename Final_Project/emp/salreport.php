<?php 
 session_start();
 include 'Controllers/Header.php';
 include 'models/db_config.php';
 if(!isset($_SESSION["ulog"])){
    header("Location: login.php");
}
$email=$_SESSION["ulog"];
?>

<html>
    <head>
        <title>Salary Report</title>
        <style>
            body{
                background-color: rgb(204, 204, 204);
            }
            .table-1{
                height: auto ;
                width: auto;
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
              
        
                    $query = "SELECT name, email, salary*12 as yearly FROM `add_emp` WHERE email='{$email}'";
                    
                    $result=get($query);
                   
                    foreach ($result as $row){
                    
                    echo "<tr><td align='left'>Name:</td><td align='center'>$row[name]</td></tr>";
                    echo "<tr><td align='left'>Email:</td><td align='center'>$row[email]</td></tr>";
                    echo "<tr><td align='left'>Yearly Salary:</td><td align='center'>$row[yearly]</td></tr>"; 
                    
                }
                
                
                
            ?>

           </table>
        </fieldset>
    </body>
</html>

<?php
 include 'Controllers/Footer.php';
?>