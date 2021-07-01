<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>CURRY</title>
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
   <img class="mySlides" src="images/curry.jpg" style="width:100%;height:100%; ">
   <img class="mySlides" src="images/curry_1.jpg" style="width:100%;height:100%;" >
   <img class="mySlides"   src="images/curry_2.jpg" style="width:100%;height:100%;" >
   <img class="mySlides" src="images/curry_3.jpg" style="width:100%;height:100%;" >
</section>
	</div>
	
			<br>
		</div>

<div class="testimonials">
			<h1>Scrumptious CURRY</h1>

              <div class="testimonials_row width">
				<div class="testimonials_icon">
					<img src="images/curry.jpg" alt="testimonials">
				</div>

				<div class="testimonials_detail">
					<h2>Lahori Chicken Qorma  </h2>
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
            <img src="images/qema.jpg" alt="testimonials">
        </div>

        <div class="testimonials_detail">
            <h2>Aloo Qeema  </h2>
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
            <img src="images/mix.jpg" alt="testimonials">
        </div>

        <div class="testimonials_detail">
            <h2>Mix Vegetable  </h2>
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
            <img src="images/pakora.jpg" alt="testimonials">
        </div>

        <div class="testimonials_detail">
            <h2>Karri Pakora  </h2>
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
            <img src="images/haleem.jpg" alt="testimonials">
        </div>

        <div class="testimonials_detail">
            <h2>Chicken Haleem  </h2>
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
					<img src="images/curry_1.jpg" alt="testimonials">
				</div>
				<div class="testimonials_detail">
					<h2>Lahori Beef Qorma</h2>
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
					<img src="images/curry_2.jpg" alt="testimonials">
				</div>
				<div class="testimonials_detail">
					<h2>Lahori Daal Maash</h2>
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
            <img src="images/curry_3.jpg" alt="testimonials">
        </div>
        <div class="testimonials_detail">
            <h2>Lahori Daal Channa</h2>
            <br>
            <table>
                <tbody>
                <tr>
                    <td>Weight:</td>
                    <th>1Kg</th>
                <tr>
                    <td>Price:</td>
                    <th>2500</th>
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