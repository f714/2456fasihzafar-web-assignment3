<?php
include('Include/config.php');

 if(isset($_SESSION['Loggedin']))
 {
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
      
  </head>
<body>
  <div class="container header shadow_bottom">
    <header class="width">
      <div class="logo">
        <img src="images/logo1.jpg" alt="My Tiffin">
      </div>
      <div class="nav">
        <ul>
          
              <li><a href="manageproducts.php">Manage Product</a></li>
              <li><a href="managecustomer.php">Manage User</a></li>
      <li><a href="logout.php">LOGOUT</a></li>        
               
        </ul>
        </div>
      
    </nav>
     <p>
      <br>
    <CENTER><h1>  WELCOME TO ADMIN DASHBOARD </h1>
      
        </CENTER>
</p>
<br>
<br>
  <main class="container">
    <br> 
    <br>
    <div class="news width">
      <div class="news_box">
        <div class="news_img">
          <img src="graphics/setting1.png" alt="setting ">
        </div>
        
        <p class="news_heading">
                    <a href="manageproducts.php">
          <button>Manage Product </button>
        </p>
      </div>
      <div class="news_box">
        <div class="news_img">
          <img src="graphics/setting1.png" alt="setting">
        </div>
        
        <p class="news_heading">
          <a href="managecustomer.php">
          <button>Manage User </button>
        </p>
      </div>
  
</header>
    </body>
    </html>

 <?php
  }
   else
     header("location:LandingPage?status=PL");
   ?>