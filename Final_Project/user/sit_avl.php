<?php

include_once 'controllers/ticket_controller.php';

if(isset($_GET["sit"]) && !empty($_GET["sit"])){
    $sit=$_GET["sit"];
    $isbook= checksit($sit);
if($isbook){
    echo "Booked";
}
else echo "Available";}


if(isset($_GET["sit1"]) && !empty($_GET["sit1"])){
    $sit1=$_GET["sit1"];   
    $isbook= checksit_1($sit1);
if($isbook){
    echo "Booked";
}
else echo "Available";
}

if(isset($_GET["sit2"]) && !empty($_GET["sit2"])){
    $sit2=$_GET["sit2"];   
    $isbook= checksit_2($sit2);
if($isbook){
    echo "Booked";
}
else echo "Available";
}

if(isset($_GET["sit3"]) && !empty($_GET["sit3"])){
    $sit3=$_GET["sit3"];   
    $isbook= checksit_3($sit3);
if($isbook){
    echo "Booked";
}
else echo "Available";
}

if(isset($_GET["sit4"]) && !empty($_GET["sit4"])){
    $sit4=$_GET["sit4"];   
    $isbook= checksit_4($sit4);
if($isbook){
    echo "Booked";
}
else echo "Available";
}
