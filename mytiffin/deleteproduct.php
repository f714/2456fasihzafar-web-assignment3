<?php 
include('Include/config.php');

		$pid=$_GET["id"];
		
	
	


?>


<?php

	$conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
  trigger_error('Database connection failed: '. $conn->connect_error,E_USER_ERROR);
}
$sql='DELETE  FROM products WHERE id=?';

$stmt=$conn->prepare($sql);
if($stmt==false)
{
		trigger_error('Wrong sql  '. $sql. 'Error' .  $conn->error,E_USER_ERROR);
}

$stmt->bind_param('i', $pid);
$stmt->execute();
$stmt->close();
$conn->close();

header("Location:manageproducts.php?status=PD");
?>
