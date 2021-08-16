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

            .right .a-right{
              float: right;
              font-size: 16px;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }

            input[type=submit]{
              font-size: 16px;
              color: white;
              text-align: center;
              text-decoration: none;
              background-color: #4CAF50;

            }

            .lg{
              background-color: #333;
              border: none;
              color: white;
              padding: 0px 6px;
              text-decoration: none;
              font-size: 16px;
              color: white;
            }
          </style>
    </head>
<body>

<div class="navbar">
  <a href="home_page.php">Home</a>
      <div class="dropdown">
          <button class="dropbtn">Dashbaord 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="display_userinfo.php">User Info</a>
            <a href="update_user_info.php">Update Info</a>
            <a href="purchase_ticket.php">Purchase</a>
            <a href="payment.php">Payment</a>
            <a href="tickets.php">Tickets</a>
            <a href="journey_history.php">Journey History</a>
            <a href="pay_history.php">Payment History</a>
          </div>
      </div>
   <a href="train_route.php">Train Route</a>
  
  <div class="dropdown">
    <button class="dropbtn">Contact 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="contact_us.php">Contact Us</a>
      <a href="emergency_msg.php">Emergency Message</a>
    </div>
  </div>
  <a href="fair_chart.php">Fair Chart</a>
  <div class="right">
  <a class="a-right" href="logout.php"><input class="lg"  type="button" value="Logout"></a>
  </div>
  </div>
</body>
</html>

 

  