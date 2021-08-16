<?php
 include_once 'models/db_config.php';

    $to="";
    $err_to="";

    $from="";
    $err_from="";

    $hasError=false;

    if(isset($_POST["search"])){

        if(!isset($_POST["from"])){
            $hasError = true;
            $err_from="From required";
        }
    
        else{
            htmlspecialchars($_POST["from"]);
                $from = $_POST["from"];
        }

        if(!isset($_POST["to"])){
            $hasError = true;
            $err_to="To required";
        }
    
        else{
            htmlspecialchars($_POST["to"]);
                $to = $_POST["to"];
        }
    }

    function view_option(){
        $query = "SELECT r_name FROM `train_route`";
            $result=get($query);
            $r_name = array();
            foreach ($result as $row){
                $r_name[]=$row['r_name'];}
            return $r_name;
        }

    function cost($from,$to){
        $query="SELECT cost FROM `fair_chart`,`train_route`  WHERE s_name='$from' and r_name='$to'";
        $cost=get($query);
        $amount =array();
        foreach ($cost as $row){
            $amount[]=$row['cost'];}
        return $amount;}

?>