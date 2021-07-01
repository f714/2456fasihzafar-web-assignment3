<?php
include('Include/config.php');
$conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
	trigger_error('Database connection failed: '. $conn->connect_error,E_USER_ERROR);
}
$em=($_POST["email"]);
$pwd=($_POST["password"]);


$sql='UPDATE customer SET password=? WHERE email=?';
$stmt = $conn->prepare($sql);
if ($sql === false) {
    trigger_error($this->mysqli->error, E_USER_ERROR);
    return;
  }

  $stmt->bind_param('ss',$pwd, $em);
  $stmt->execute();
  header("Location: welcome.php");
$conn->close();

?>