<?php
 require 'Controllers/emp_controller.php';
 
 
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
        <form action="" onsubmit="return validate()" method="post" >
            
            <fieldset>
                <legend align="center"><h1>Welcome to Metro Automation</h1></legend>
                <h5><?php echo $err_db; ?></h5>
                    <table align="center">
                        <tr>
                            <td>
                                <img width="500" height="300" src="medias/metro.jpg">
                            
                                <fieldset>
                                    <legend align="right"><h2>Login</h2></legend>            
                                        <table align="center">
                                            <tr>
                                                <td>
                                                    <input id="email" type="text" name="email" value="<?php echo $email;?>" placeholder="Enter Email">
                                                    <span id="err_email"><?php echo $err_email;?></span>
                                                    <br><br>
                                                    <input id="password" type="password" name="password" value="<?php echo $pass;?>" placeholder="Password">
                                                    <span id="err_pass"><?php echo $err_pass;?></span>
                                                    <br><br>
                                                    
                                                    <input type="submit" name="btn_login" value="Login">
                                                    </a>
                                                    <a href="reset_pass.php" style="text-decoration: none;">  
                                                        <input type="button" value="Forget Password">  
                                                     </a>
                                                     <a href="index.php" style="text-decoration: none;">  
                                                        <input type="button" value="Back">  
                                                     </a>
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

<?php
 include_once 'Controllers/Footer.php';
?>
