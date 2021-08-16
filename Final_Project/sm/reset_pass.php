<?php
    include_once 'models/db_config.php';
    include_once 'controllers/header.php';

    $email="";
    $err_email="";
    $char="'#','?'";
    $num="1,2,3,4,5,6,7,8,9,0";
    $phn="";
    $err_phn="";

    $pass="";
    $err_pass="";

    $pass1="";
    $err_pass1="";

    $err_db="";

    $hasError=false;

    if(isset($_POST["reset"])){
        if(empty($_POST["email"])){
            $hasError = true;
            $err_email="Email Required";
        }
    
        else if (!stristr($_POST["email"],"@") and !stristr($_POST["email"],".")){
            $hasError = true;
            $err_email="Enter Correct Email ";
        }
        else{
            htmlspecialchars($_POST["email"]);
            $email = $_POST["email"];
        }

        if(empty($_POST['phn'])){
            $hasError = true;
            $err_phn="Phone number Required";
        }
        else if(strlen($_POST['phn'])!==11){
            $hasError = true;
            $err_phn="Enter correct 11 digit phone number";
    
        }
        else if(is_numeric($_POST['phn'])=='0'){
            $hasError = true;
            $err_phn="Only Number allowed";
        }
        else{
            htmlspecialchars($_POST["phn"]);
            $phn = $_POST["phn"];
        }

        if(empty($_POST["password"])){
            $hasError = true;
            $err_pass="Password Required";
        }
        elseif(strlen($_POST["password"]) <= 5){
            $hasError = true;
            $err_pass="Password must contain Five character";
        }
        elseif(strpos($_POST["password"],$char)==true){
            $hasError = true;
            $err_pass="Password must contain '#' or '?'";
        }
        elseif((ctype_upper($_POST["password"]))===true){
            $hasError = true;
            $err_pass="Password must contain one Uppercase";
        }
        elseif((ctype_lower($_POST["password"]))===true){
            $hasError = true;
            $err_pass="Password must contain one Lowercase";
        }
        elseif(strpos($_POST["password"],$num)!==false){
            $hasError = true;
            $err_pass="Password must contain one Number";
        }
        
        else{
            htmlspecialchars($_POST["password"]);
            $pass = $_POST["password"];
        }

        if(empty($_POST["pass1"])){
            $hasError = true;
            $err_pass1="Password Required";
        }
        elseif($_POST["password"]!==$_POST["pass1"]){
            $err_pass1="Password Doesn't Match"; 
        }
        else{
            htmlspecialchars($_POST["pass1"]);
            $pass1 = $_POST["pass1"];
        }

        if(!$hasError){
            $rs= reset_pass($pass1,$email);
            if($rs===true){
                header("Location: user_login.php");
            }
            $err_db=$rs;

            }

    }

    function reset_pass($pass1,$email){
        $query="update name set pswrd='$pass' where email='$email'";
        return execute($query);
    }


?>
<html>
    <head>
        <style>

        </style> 
        <script src="js/reset_pass_val.js"></script>
    </head>
    <body>
        <form action="" onsubmit="return validate()" method="POST">
            <fieldset>
                <legend><h2>Reset Password</h2></legend>
                <span><h5><?php echo $err_db;?></h5></span>
                <table align="center">
                    <tr>
                        <td>
                            <span>Enter Email</span>
                        </td>
                        <td>
                            :<input id="email" type="text" name="email" value="<?php echo $email?>" placeholder="Enter Your email">
                        </td>
                        <td>
                            <span id="err_email"><?php echo $err_email;?></span>
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <span>Enter Phone Number</span>
                        </td>
                        <td>
                            :<input id="phn" type="text" name="phn" value="<?php echo $phn?>" placeholder="Enter Your Phone Number">
                        </td>
                        <td>
                            <span id="err_phn"><?php echo $err_phn;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Enter New Password</span>
                        </td>
                        <td>
                            :<input id="password" type="text" name="password" value="<?php echo $pass?>" placeholder="Enter New Password">
                        </td>
                        <td>
                            <span id="err_pass"><?php echo $err_pass;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Re-type New Password</span>
                        </td>
                        <td>
                            :<input id="pass1" type="text" name="pass1" value="<?php echo $pass1?>" placeholder="Confirm New Password">
                        </td>
                        <td>
                            <span id="err_pass1"><?php echo $err_pass1;?></span>
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
                            <input type="submit" name="reset" value="Reset Password">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>

<?php
include_once 'controllers/footer.php'
?>