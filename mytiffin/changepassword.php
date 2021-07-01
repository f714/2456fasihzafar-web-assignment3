<li><a href="Products.php">Products </a></li><!DOCTYPE html>
<html lang="en">
<head>
	<title> Update password</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container header shadow_bottom">
		<header class="width">
			<div class="logo">
				<img src="images/logo1.jpg" alt="My Tiifin">
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
			<h1 class="">Customer Password Update  </h1>
	<main class="container">
		<div class="signup_form width">
			
			<form action="changepasswordaction.php" method="POST">
					
			  <div class="form_row">
			  
					<label> Email *</label>
					<input type="email" id="email" name="email" placeholder="Enter Your Email address" required="required">
				</div>
				   <br>
				   <div class="form_row">
			  
					<label>New Password *</label>
					<input type="password" id="pwd" name="password" placeholder="Enter Your Password" required="required">
				</div>
				<br>
				<center>	<input type="submit" name="submit" value="Updated" class="btn"></center>
				</form>
			</div>
		</div>

	<div class="clear-fix"></div>

	
	</main>
<?php
include('Include/footer.php');

?>


</body>
</html>