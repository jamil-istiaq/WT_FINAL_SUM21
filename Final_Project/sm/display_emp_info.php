<?php 
 session_start();
 include 'controllers/header.php';
 include 'models/db_config.php';
 if(!isset($_SESSION["ulog"])){
    header("Location: sm_login.php");
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
             height: auto ;
             width: auto;
           }
</style>
    </head>
    <body>
        <fieldset>
            <legend><h1>Employee Information</h1></legend>
            <table border="1" align="center" class="table-1">
<?php
              
        
                    $query = "SELECT e_id,name, email, phone, nid,address,dob,bl_grp,gender,e_count,salary FROM `add_emp`";
                    
                    $result=get($query);
                        echo "<tr>
                        <th>Sl No.</th>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date of birth</th>
                        <th>Blood Group</th>
                        <th>NID</th>
                        <th>Salary</th></tr>";
                    foreach ($result as $row){  
                        echo "<tr><td align='center'>$row[e_count]</td>";
                        echo "<td align='center'>$row[e_id]</td>";
                        echo "<td align='center'>$row[name]</td>";
                        echo "<td align='center'>$row[gender]</td>";
                        echo "<td align='center'>$row[email]</td>";
                        echo "<td align='center'>$row[phone]</td>";
                        echo "<td align='center'>$row[address]</td>";
                        echo "<td align='center'>$row[dob]</td>";
                        echo "<td align='center'>$row[bl_grp]</td>";
                        echo "<td align='center'>$row[nid]</td>";
                        echo "<td align='center'>$row[salary]</td><tr>";
                    }
                
                
                
?>

</table>
</fieldset>
</body>
</html>

<?php
 include 'controllers/footer.php';
?>