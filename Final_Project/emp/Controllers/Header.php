<?php
?>

<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgb(204, 204, 204);
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: rgb(211, 51, 51);
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
</head>
<body>

<div class="navbar">
  <a href="Home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Dashbaord 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="profileinfo.php">Profile Information</a>
      <a href="updateinfo.php">Update Information</a>
      <a href="Search.php">Search EM</a>
      <a href="salreport.php">Report</a>
    </div>
  </div>
  <a href="#">Train Route</a>
  
  <div class="dropdown">
    <button class="dropbtn">Contact 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Contact Us</a>
      <a href="emergencymsg.php">Emergency Message</a>
    </div>
</div>
<a href="Logout.php">Logout</a>
</div>
</body>
</html>
 

  