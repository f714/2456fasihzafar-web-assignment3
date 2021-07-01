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

        <?php
$conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
  trigger_error('Database connection failed: '. $conn->connect_error,E_USER_ERROR);
}
$sql='SELECT  * from  products Where id=?';
$stmt=$conn->prepare($sql);
if($stmt==false)
{
  trigger_error('Wrong SQL '. $sql.'Error'.$conn->error);
}
$stmt->bind_param('i',$pid);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows>0)
{
	$stmt->bind_result($id,$Name,$Quantity,$price,$Category);
	while($stmt->fetch()){
	$pName=$Name;
	$pQuantity=$Quantity;
	$pprice=$price;
	$pCategory=$Category;
	}
}
$stmt->free_result()
//$stmt->close();
// $conn->close();

?>

<html>
<head>
  <title>Edit product</title>

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
          
              <li><a href="manageproduct.php">View Product</a></li>
            <li><a href="manageproduct.php">Add Product</a></li>
<li><a href="viewcustomers.php">View Customer</a></li>
   <li><a href="manageproduct.php">View Order</a></li>           
               
        </ul>
        
        </div>
	<main class="container">
		<section class="width about">
			<h1 class="">Edit Products  </h1>
	<main class="container">
		<div class="signup_form width">
			
			<form action="editproductaction.php" method="POST">
				
				<div class="form_row">
			    <input type="hidden" name="pid" value="<?php echo $pid?>"/>

					<p><label> Product Name*</label>
					<input type="text"  name="pn" value="<?php echo $pName?>" required></p>

				<p><label> Product Quantity*</label>
					<input type="text"  name="qn" value="<?php echo $pQuantity?>" required></p>

					<p><label> Product Price*</label>
					<input type="text"  name="pp" value="<?php echo $pprice?>" required></p>

					<p><label> Product Category*</label>
					<input type="text"  name="pc"  value="<?php echo $pCategory?>"required></p>
		
	<input type="submit" name="submit" value="Update Product" class="btn">
	

	
</form>
		</div>
	</main>
</form>
</div>
</main>
</section>
</main>
</header>
</div>
</body>
</html>
