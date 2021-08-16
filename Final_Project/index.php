<?php
 
 $utype="";
 $err_utype="";

 $utype_arr=array("Admin","User","Station Master", "Employee");

$hasError=false;

if(isset($_POST["submit"])){
    if(!isset($_POST["utype"])){
    $hasError=true;
    $err_utype="Select User Type";
}
else{
    $utype=$_POST["utype"];
}

if(!$hasError){
    if($_POST["utype"]=="User"){
    header("Location: user/user_login.php");
    }
    
    else if($_POST["utype"]=="Admin"){
        header("Location: admin/admin_login.php");
    }

    else if($_POST["utype"]=="Station Master"){
        header("Location: sm/sm_login.php");
    }

    else if($_POST["utype"]=="Employee"){
        header("Location: emp/Login.php");
    }
    
}
}

?>

<html>
    <head>
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
            if(get("utype").selectedIndex == 0){
                hasError = true;
                get("err_type").innerHTML = "<span style='color: red;'>Type Required</span>";
                
            }
            return !hasError;
            }

            function refresh(){
            hasError=false;
            get("err_type").innerHTML ="";}


        </script>
    </head>
    <body>
        <form action="" onsubmit="return validate()" method="post">
            
            <fieldset>
                <legend align="center"><h1>Welcome to Metro Automation</h1></legend>
                    <table align="center">
                        <tr>
                            <td>
                                <img width="500" height="300" src="User/media/metro.jpg">
                            
                                <fieldset>
                                    <legend align="right"><h2>Login</h2></legend>            
                                        <table align="center">
                                            <tr>
                                                <td>
                                                    <select id="utype" name="utype">
                                                        <option selected disabled>Select User Type</option>
                                                        <?php
                                                        foreach ($utype_arr as $u){
                                                            if($u==$utype)
                                                                echo "<option selected>$u</option>";
                                                            else
                                                                echo "<option>$u</option>";

                                                        }
                                                        ?>
                                                    </select>
                                                    <span id="err_type"><?php echo $err_utype;?></span>
                                                    <br><br>
                                                    
                                                    
                                                        <input type="submit" name="submit" value="Next">  
                                                    
                                                
                                                </td>
                                            </tr>
                                            
                                        </table>   
                                </fieldset>   
                            </td>
                        </tr> 

                    </table>
                    
        
            </fieldset>

        </form>   
        
     </body>
</html>

