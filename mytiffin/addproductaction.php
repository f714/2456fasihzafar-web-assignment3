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
$sql="insert into products SET Name='".$pName."',Quantity='".$pQuantity."',Price='".$pprice."',Category='".$pCategory."'";
mysqli_query($conn, $sql);

$conn->close();
header ("Location:manageproducts.php?status=PU");
?>