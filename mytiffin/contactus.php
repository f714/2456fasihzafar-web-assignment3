<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>
	<div class="container header shadow_bottom">
		<?php
include('Include/header.php');

?>
	</div>
	<div class="container">
		<div class="cover ">
			<img src="graphics/contact.png" alt=" Cover">
		</div>
	</div>
	<main class="container">
		<div class="contact_form width">
			<form action="#" method="post">
				<div class="form_row">
					<label>Full Name *</label>
					<input type="text" name="name" placeholder="Full Name" required="required">
				</div>
				<div class="form_row">
					<label>Email Address *</label>
					<input type="email" name="email" placeholder="Email Address" required="required">
				</div>
				<div class="form_row">
					<label>Feedback/ Query *</label>
					<textarea placeholder="Your Query here...." rows="10"></textarea>
				</div>
				<div class="form_row">
					<button type="submit">SUBMIT</button>
					<div class="clear"></div>
				</div>
			</form>
		</div>
	</main>
	<?php
include('Include/footer.php');

?>

</body>
</html>