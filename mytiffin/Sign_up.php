<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>Sign_up</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">

</style>
</head>
<body>
  <div class="container header shadow_bottom">
   <?php
include('Include/header.php');

?>
  </div>

 <style>
body {
  /*background-image: url('https://cdn.wallpapersafari.com/5/77/EOm1h6.jpg');*/
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
  <main class="container">
    <section class="about">
      <h1 class="">Welcome To Sign Up Page  </h1>
  <main class="container">
    <div class="signup_form width">
      <form action="signup_action.php" method="post">
        <div class="form_row">
          <label>First Name *</label>
          <input type="text" name="fname" placeholder="First Name" required="required">
        </div>
                  <div class="form_row">
          <label>Last Name *</label>
          <input type="text" name="lname" placeholder="Last Name" required="required">
        </div>
                 
        <div class="form_row">
          <label>Email Address *</label>
          <input type="email" name="email" placeholder="Email Address" required="required">
        </div>
        <div class="form_row">
          <label>Password *</label>
          <input type="password" id="password"name="pwd" placeholder="Password" required="required">
        </div>
        <div class="form_row">
          <label>Confirm Password *</label>
          <input type="password" id="passoword" name="cpwd" placeholder="Confirm Password" required="required">
        </div>
        <div class="form_row">
          <label>Type *</label>
          <input type="type" id="type" name="type" placeholder="Type A for Admin & C for Customer" required="required">
          <br>
          <input type="submit" name="submit" value="Register" class="btn">

        </div>
        
      </form>

    </div>
  </main>
               
<?php
include('Include/footer.php');

?>

</body>
</html>
