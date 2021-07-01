<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>RICES/CHAAWAL</title>
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
			<div class="clear">
				
			</div>
		</header>
		<div class="clear-fix"></div>
<section class="container">
   <img class="mySlides" src="images/rice.jpg" style="width:100%;height:100%; ">
   <img class="mySlides" src="images/rice_2.jpg" style="width:100%;height:100%;" >
    <img class="mySlides" src="images/rice_3.jpg" style="width:100%;height:100%;" >

</section>
	</div>
	
			<br>
		</div>

<div class="testimonials">
			<h1>Varierty of RICES</h1>
	
			<div class="testimonials_row width">
				<div class="testimonials_icon">
					<img src="images/rice.jpg" alt="testimonials">
				</div>

				<div class="testimonials_detail">
					<h2>Lahori Chicken Biryani   </h2>
					<br>
					<table>
					<tbody>
					<tr>
					<td>Quantity:</td>
					<th>Plate</th>
					<tr>
								<td>Price:</td>
								<th>150</th>
							</tr>
				</tr>
			</tbody>
		</table>
		
			</div>
				<div class="clear"></div>

			</div>
			<div class="testimonials_row width">
				<div class="testimonials_icon">
					<img src="images/rice_2.jpg" alt="testimonials">
				</div>
				<div class="testimonials_detail">
					<h2>Kabab Pulao</h2>
					<br>
					<table>
					<tbody>
					<tr>
					<td>Quantity:</td>
					<th>Plate</th>
					<tr>
								<td>Price:</td>
								<th>150</th>
							</tr>
				</tr>
			</tbody>
		</table>
				
				</div>
				<div class="clear"></div>

			</div>
			<div class="testimonials_row width">
				<div class="testimonials_icon">
					<img src="images/rice_3.jpg" alt="testimonials">
				</div>
				<div class="testimonials_detail">
					<h2>Daal Chawal</h2>
				<br>
					<table>
					<tbody>
					<tr>
					<td>Quantity:</td>
					<th>Plate</th>
					<tr>
								<td>Price:</td>
								<th>150</th>
							</tr>
				</tr>
			</tbody>
		</table>
		
				</div>
				<div class="clear"></div>

			</div>
		</div>
	</main>
	




	<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
	<?php
include('Include/footer.php');

?>
</body>
</html>	