<?php
include_once 'Models/db_config.php';
include_once 'Controllers/Header.php';

    $search_value=""; 
    if (isset($_POST['submit'])){
        if( isset( $_POST['search'])){
            $search_value = $_POST['search']; 
        }   
        

} 

function searchProduct($search_value){
		$query="select msg from `em_msg` where time='$search_value'";
		$rs = get($query);
		return $rs[0];
	}
?>

<html>
    <head>
        <title>SEARCH EM</title>
    </head>
    <body>
    <form action="" method="post">
        <fieldset>
            <legend><h2>Search Message</h2></legend>
        <table align="center">
            <tr>
                <td>
                    Search by Time:<input type="text" name="search" placeholder="HH:MM:SS">
                </td>
                <td>
                    <input type="submit" name="submit" value="Search">
                </td>
            </tr>
        </table>
    </fieldset>
    </form>
    <fieldset>
        <legend>
            <h2>Search Result by Time</h2>
        </legend>
        <table align="center">
            <tr>
                <td>
                    Messages <br>
                </td>
</tr>
<tr>
                <td>
                    <?php 
                    $result=searchProduct($search_value); 
                    foreach($result as $product){
                    echo $product;} ?>
                </td>
            </tr>
        </table>
    </fieldset>
    </body>
</html>