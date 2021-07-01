<?php
include('Include/config.php');


?>

<html>
<head>
  <title>Products</title>

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
          
              <li><a href="curry.php">Curry </a></li>
      <li><a href="rices.php">Rices </a></li>
      <li><a href="Products.php">Products </a></li>
      <li><a href="profileupdate.php">Update Profile</a></li>
      <li><a href="changepassword.php">Change Password </a></li>
      <li><a href="logout.php">Logout </a></li>
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
echo "<p>Found".$stmt->num_rows,"Products <p>";
$stmt->bind_result($id,$Name,$Quantity,$price,$Category); ?>
<form method="post" action="add_to_cart_action.php" enctype="multipart/form-data">
    <?php
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<td></td>";
echo "<td> id  </td>";
echo "<td> Name  </td>";
echo "<td> Quantity  </td>";
echo "<td> price </td>";
echo "<td> Category </td>";

echo "</tr>";
echo "</thead>";
echo "<tbody>";

while ($stmt->fetch())
{
    echo "<tr>";
 echo "<td><input type='checkbox' name='ids[]' value='$id'></td>";
echo "<td> $id  </td>";
echo "<td> $Name  </td>";
echo "<td> $Quantity  </td>";
echo "<td> $price </td>";
echo "<td> $Category </td>"; 





}
echo "</tbody></table>";
?>
<center><input type="submit" value="Add To Cart"></center>
</form>
</div>
</header>
</div>
</body>
</html>




