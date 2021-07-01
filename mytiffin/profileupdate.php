<!DOCTYPE html>
<html lang="en">
<head>
	<title> Update Profile</title>
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
				
			<li><a href="welcome.php">Welcome </a></li>	
			
			<li><a href="curry.php">Curry </a></li>
			<li><a href="rices.php">Rices </a></li>
	        <li><a href="Products.php">Products </a></li>
			<li><a href="profileupdate.php">Update Profile</a></li>
			<li><a href="changepassword.php">Change Password </a></li>
			<li><a href="logout.php">Logout </a></li>

					</ul>
			</div>

</head>
<body>
	
	

	
	<main>
	<main class="container">
		<section class="width about">
			<h1 class="">Customer Profile Update  </h1>
	<main class="container">
		<div class="signup_form width">
			
			<form action="profileupdateaction.php" method="POST">
					
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
     
       <br>
        <center>  <input type="submit" name="submit" value="Updated" class="btn"></center>

        </div>
        
				</form>
			</div>
		</div>

	<div class="clear-fix"></div>

	
	</main>
	<footer class="container bg-gray">
		<div class="width">
			<h1>My Tiffin</h1>
			
		</div>
	</footer>


</body>
</html>