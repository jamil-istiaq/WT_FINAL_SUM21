<?php
    include_once 'models/db_config.php';
    include_once 'controllers/reset_pass_controller.php';
?>
<html>
    <head>
        <style>
                body{
                background-color: rgb(204, 204, 204);
            }
            input[type=submit]{
              font-size: 16px;
              color: white;
              text-align: center;
              text-decoration: none;
              background-color: #4CAF50;

            }
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