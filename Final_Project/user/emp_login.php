<?php
 
 $uname="";
 $err_uname="";

 $pass="";
 $err_pass="";

 



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
        <form >
            
            <fieldset>
                <legend align="center"><h1>Welcome to Metro Automation</h1></legend>
                    <table align="center">
                        <tr>
                            <td>
                                <img width="500" height="300" src="metro.jpg">
                            
                                <fieldset>
                                    <legend align="right"><h2>Login</h2></legend>            
                                        <table align="center">
                                            <tr>
                                                <td>
                                                    <input type="text" placeholder="Enter User Id">
                                                    <br><br>
                                                    <input type="text" placeholder="Password">
                                                    <br><br>
                                                    <input type="submit" value="Login">
            
                                                    <a href="reset.html">  
                                                        <input type="button" value="Forget Password">  
                                                     </a>
                                                     <a href="index.php">  
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

