<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	
<link rel="stylesheet" type="text/css" href="css/style.css">



</style>
</head>
<body>
	<div class="container header shadow_bottom">
		<?php
include('Include/header.php');

?>

			 <?php
if(isset($_GET['status']))
{
if($_GET['status']=='AC') 
{
  echo "ACCOUNT CREATED";
}
if($_GET['status']=='PNM')  
{
  echo "Password doesnot match";
}
if($_GET['status']=="PL")  
{
  echo "You are not loggedin please login ";
}
if($_GET['status']=="LOGOUT")  
{
  echo "You are Logout ";
}
}
?>


	

	<div class="clear">
				
			</div>
		</header>
		<style>
body {
  /*background-image: url('https://img.wallpapersafari.com/tablet/2560/1700/5/77/EOm1h6.jpg');*/
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
		
	</div>
	<main class="container">
		<section class="about">
			<h1 class="">Welcome To Login Page  </h1>
	<main class="container">
		<div class="signup_form width">
			
			<form action="LandingPage_action.php" method="POST">
				<div class="piccontainer">
<!--				<center><img src="graphics/customer.png" alt="member"> </center>-->
				</div>
				<div class="form_row">
			  
					<label> Email *</label>
					<input type="email" id="email" name="email" placeholder="Enter Your Email address" required="required">
				</div>
				<div class="form_row">
		
					<label>Password *</label>
					<input type="password" id="pwd" name="password" placeholder="Enter Your Password" required="required">
					<br>
	<input type="submit" name="submit" value="Login" class="btn">
	<br>

				</div>
				
				
				</form>
			</div>
		</div>
	</div>
	
	

	
</form>
		</div>
	</main>
	
<?php
include('Include/footer.php');

?>

</body>
</html>