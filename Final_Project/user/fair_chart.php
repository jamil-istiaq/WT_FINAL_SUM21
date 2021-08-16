<?php 
 include_once 'controllers/header.php';
 include_once 'controllers/fair_controller.php';

?>

<html>
    <head>
        <h1 align='center'>Fair Chart</h1>
    </head>
    <style>
        body {
                    background-color: rgb(204, 204, 204);
                }
    </style>
    <script>
        var hasError=false;
        function get(id){
            return document.getElementById(id);
        }
        function validate(){
            refresh();
            if(get("from").selectedIndex == 0){
                hasError = true;
                get("err_from").innerHTML = "<span style='color: red;'>From Station Required</span>";
            }
            if(get("to").selectedIndex == 0){
                hasError = true;
                get("err_to").innerHTML = "<span style='color: red;'>To Station Required</span>";
            }
            return !hasError;
        }

        function refresh(){
            hasError=false;
            get("err_from").innerHTML ="";
            get("err_to").innerHTML ="";
        }
    </script>

    <body>
        <form action="" onclick="return validate()" method="post">
            <fieldset>
                <fieldset>
                    <legend><b>Custom Fair Search</b></legend>
                <table border="0" align="center">
                    <tr>
                        <td>
                            Starting Staion
                        </td>
                        <td>
                            <select id="from" name="from">
                                <option selected disabled>From</option>
                                <?php
                                $f=view_option();
                                foreach($f as $a){
                                if($a == $from) 
                                    echo "<option selected>$a</option>";
                                else
                                    echo "<option>$a</option>";
                                }
                              ?>
                            </select>
                        </td>
                        <td><span id="err_from"><?php echo $err_from;?></span></td>
                            </tr>
                            <tr>
                        <td>
                            Ending Staion
                        </td>
                        <td>
                            <select id="to" name="to">
                                <option selected disabled>To</option>
                                <?php
                                $t=view_option();
                                foreach($t as $a){
                                if($a == $to) 
                                    echo "<option selected>$a</option>";
                                else
                                    echo "<option>$a</option>";
                                }
                              ?>
                            </select>
                        </td>
                        <td><span id="err_to"><?php echo $err_to;?></span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;</td>
                    
                        <td align="center">
                            <input type="submit" name="search" value="Search Fair">
                        </td>
                    </tr>
                    
                
                </table><br>
            </fieldset><hr>
            <fieldset>
                <legend><b>Search Result</b></legend>
                <table border="1" align="center">
                    
                    <tr>
                        
                        <th><b>Start</b></th>
                        <th><b>End</b></th>
                        <th rowspan="2">Total Fair</th>
                        
                    </tr>
                    
                    <tr>
                        
                        <th>Station Name</th>
                        
                        <th>Station Name</th>
                        
                    </tr>
                    <tr>
                        
                        <td align="center">
                        <?php echo $from;?>
                        </td>
                        
                        <td align="center">
                        <?php echo $to;?> 
                        </td>
                        <td align="center">
                          <?php 
                          $amount=cost($from,$to);
                          foreach ($amount as $value) {
                            echo $value.' '.'Taka';
                            }
                          ?>
                        </td>
                    </tr>

                </table><br>
            </fieldset>
           
            </fieldset>
        </form>
    </body>
</html>

<?php 
include 'controllers/footer.php'
?>