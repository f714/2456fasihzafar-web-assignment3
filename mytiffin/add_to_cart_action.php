<?php
include('Include/config.php');

$box=$_POST['ids'];
$conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
    trigger_error('Database connection failed: '. $conn->connect_error,E_USER_ERROR);
}
$count=0;
while (list ($key,$val) = @each ($box)) {
    $sql="insert into cart set id_products=".$val;
    mysqli_query($conn, $sql);
    //echo $sql;
    $count++;
}

$conn->close();
header ("Location:add_to_cart.php");
?>

