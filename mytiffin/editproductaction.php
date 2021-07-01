<?php
include('Include/config.php');
	$id=$_POST["pid"];
	$pName=$_POST["pn"];
	$pQuantity=$_POST["qn"];
	$pprice=$_POST["pp"];
	$pCategory=$_POST["pc"];
	$conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
  trigger_error('Database connection failed: '. $conn->connect_error,E_USER_ERROR);
}
$sql='UPDATE products SET Name=?,Quantity=?,Price=?,Category=? where id=?';
$stmt=$conn->prepare($sql);
if($stmt==false)
{
  trigger_error('Wrong SQL '. $sql.'Error'.$conn->error);
}
$stmt->bind_param('ssssi',$pName,$pQuantity,$pprice,$pCategory,$id);
$stmt->execute();
$stmt->close();

$conn->close();
 header ("Location:manageproducts.php?status=PU");
 ?>