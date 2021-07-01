
<?php
include('Include/config.php');

if( isset($_POST['submit']))
{
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$em=$_POST["email"];
$pwd=$_POST['pwd'];
$cp=$_POST['cpwd'];
$ty=$_POST['type'];

if($pwd==$cp)
{
//$hpwd=password_hash($pwd,Password_Default);

$conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
	trigger_error('Database connection failed: '. $conn->connect_error,E_USER_ERROR);
}
 
       
$sql='INSERT INTO  customer (FirstName,LastName,Email,Password,Type) VALUES (?,?,?,?,?)';


$stmt=$conn->prepare($sql);
if($stmt==false)
{
	trigger_error('Wrong Insertion! '. $conn->error);
}
$stmt->bind_param('sssss',$fn,$ln,$em,$pwd,$ty);
$stmt->execute();
$stmt->close();

$conn->close();

header ('location:LandingPage.php?status=AC');

}

else
	header('location:LandingPage.php?status=PNM');


}



else
echo "Not Submitted";

?>
