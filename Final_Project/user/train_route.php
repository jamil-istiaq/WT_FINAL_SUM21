<?php 
 include_once 'controllers/header.php';
 include_once 'models/db_config.php';
//  if(!isset($_SESSION["ulog"])){
//     header("Location: user_login.php");
// }
?>

<html>
    <head>
        <style>
                * {
                    box-sizing: border-box;
                    }

                    .row {
                    margin-left:-5px;
                    margin-right:-5px;
                    }
                    
                    .column {
                    float: left;
                    width: 50%;
                    padding: 5px;
                    }

                    /* Clearfix (clear floats) */
                    .row::after {
                    content: "";
                    clear: both;
                    display: table;
                    }

                    table {
                    border-collapse: collapse;
                    border-spacing: 0;
                    width: 100%;
                    border: 1px solid #ddd;
                    }

                    th, td {
                    text-align: left;
                    padding: 16px;
                    }

                    tr:nth-child(even) {
                    background-color: #f2f2f2;
                    }
            
        </style>
    </head>
    <body>
        <fieldset>
            <legend><h1>Train and Route Information</h1></legend>
           <div class="row">
                <div class="column">
                    <table>
                        <?php
                        $query1 = "SELECT r_name,r_code FROM `train_route`";
                        $result1=get($query1);
                        echo "<tr><th>Route Name</th><th>Route Code</th></tr>";
                        ?>
                        <?php
                        foreach ($result1 as $row){ 
                            echo "<tr><td align='center'>$row[r_name]</td>";
                            echo "<td align='center'>$row[r_code]</td></tr>";}
                        ?>
                    </table>
                </div>
                <div class="column">
                    <table>
                    <?php
                        $query1 = "SELECT t_name,T_code FROM `train_list`";
                        $result1=get($query1);
                        echo "<tr><th>Train Name</th><th>Train Code</th></tr>";
                        ?>
                    <?php
                        foreach ($result1 as $row){ 
                            echo "<tr><td align='center'>$row[t_name]</td>";
                            echo "<td align='center'>$row[T_code]</td></tr>";}
                        ?>
                    </table>
                </div>
                </div>
        </fieldset>
    </body>
</html>

<?php 
 include_once 'controllers/footer.php';
?>


                     
                    