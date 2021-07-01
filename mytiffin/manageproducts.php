<?php
include('Include/config.php');


?>

<html>
<head>
  <title>view product</title>

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
            <li><a href="addorder.php">New Order</a></li>
              <li><a href="managecustomer.php">View User</a></li>
              <li><a href="logout.php">LOGOUT</a></li>  
               
        </ul>
        <CENTER><h1>  View Products  </h1>
      
        </CENTER>
<?php
$conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
  trigger_error('Database connection failed: '. $conn->connect_error,E_USER_ERROR);
}
$sql='SELECT  * from  products';
$stmt=$conn->prepare($sql);
if($stmt==false)
{
  trigger_error('Wrong SQL '. $sql.'Error'.$conn->error);
}

$stmt->execute();
$stmt->store_result();
echo "<p>Found".$stmt->num_rows,"Products in inventory <p>";
$stmt->bind_result($id,$Name,$Quantity,$price,$Category);
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<td> id  </td>";
echo "<td> Name  </td>";
echo "<td> Quantity  </td>";
echo "<td> price </td>";
echo "<td> Category </td>";
echo "<td colspan='2'>Actions </td>";
echo "</tr>";
echo "</thead>";

while ($stmt->fetch())
{
 echo "<tr>";
echo "<td> $id  </td>";
echo "<td> $Name  </td>";
echo "<td> $Quantity  </td>";
echo "<td> $price </td>";
echo "<td> $Category </td>"; 
echo "<td><a href ='editproduct.php?id=$id'><button><i>Edit product</i></button></a></td>";
echo "<td><a href ='deleteproduct.php?id=$id'><button style='background-color: red;'><i>Delete product</i></button></a></td>";


}
?>

<!-- <h2>
  <?php
 
 //  if($_GET["status"]=="PU")
 // {
 //    echo "Product is updated successfully";
 // }
 // if($_GET["status"]=="PD")
 // {
 //    echo "Product is Deleted successfully";
 //}



  ?>
</h2> -->
</div>
</header>
</div>
</body>
</html>




