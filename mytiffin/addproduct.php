<?php
include('Include/config.php');
{
	$pid=$_GET["id"];
	$pName="";
	$pQuantity="";
	$pprice="";
	$pCategory="";
}
?>



<html>
    <head>
        <title>Add product</title>

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

                        <li><a href="manageproducts.php">View Product</a></li>
                        <li><a href="addproduct.php">Add Product</a></li>
                        <li><a href="viewcustomers.php">View Customer</a></li>
                        <li><a href="manageproduct.php">View Order</a></li>

                    </ul>

                </div>
	            <main class="container">
		            <section class="width about">
			            <h1 class="">Add Products  </h1>
                        <main class="container">
                            <div class="signup_form width">

                                <form action="addproductaction.php" method="POST">

                                    <div class="form_row">


                                        <p><label> Product Name*</label>
                                        <input type="text"  name="pn" placeholder="Name" required></p>

                                        <p><label> Product Quantity*</label>
                                        <input type="text"  name="qn" placeholder="Quantity" required></p>

                                        <p><label> Product Price*</label>
                                        <input type="text"  name="pp" placeholder="price" required></p>

                                        <p><label> Product Category*</label>
                                            <select name="pc" required>
                                                <option value="cury">Cury</option>
                                                <option value="rice">Rice</option>
                                            </select>
                                        </p>
                                        <input type="submit" name="submit" value="Update Product" class="btn">
                                    </div>
                                </form>
		                    </div>
	                    </main>

                    </section>
                </main>
            </header>
        </div>
    </body>
</html>
