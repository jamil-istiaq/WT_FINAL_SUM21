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
  <a href="admin_login.php">HOME</a>
  <div class="dropdown">
    <button class="dropbtn">DASHBOARD 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ADD_USER.php">ADD USER</a>
	  <a href="ADD_EMPLOYEE.php">ADD EMPLOYEE</a>
      <a href="ADD_SM.php">ADD STATION MASTER</a>
      
      
	   <a href="add_station.php">ADD STATION</a>
      <a href="DELETE_USER.php">DELETE USER</a>
      <a href="UPDATE_USER.php">UPDATE USER</a>
	   <a href="update_sm.php">UPDATE STATION MASTER</a>
	   <a href="update_station.php">UPDATE STATION</a>
      
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">SEARCH
	
      <i class="fa fa-caret-down"></i>
    </button>
  <div class="dropdown-content">
      <a href="user.php">USER</a>
	  <a href="emplo.php">EMPLOYEE</a>
      <a href="smaster.php">STATION MASTER</a>
      
      
    </div>
	</div>
  <a href="report.php">REPORT</a>
<a href="logout_controller.php">LOG OUT</a>
</div>
</body>
</html>
 



  